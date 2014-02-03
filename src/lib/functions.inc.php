<?php


/**
 * Get a request parameter from $_GET or $_POST.
 *
 * @param $name {String}
 *        The parameter name.
 * @param $default {?} default is null.
 *        Optional default value if the parameter was not provided.
 */
function param ($name, $default=null) {
	$value = null;
	$key = "$name";

	if (isset($_POST[$key])) {
		$value = $_POST[$key];
	} else if (isset($_GET[$key])) {
		$value = $_GET[$key];
	} else {
		$value = $default;
	}

	return $value;
}


/**
 * Find a file in the request path.
 *
 * Starts in same directory as main php script, looking for a file named $name.
 * If the file is not found, it continues checking until a directory
 * named 'htdocs' is found.
 *
 * @param $name {String}
 *        name of file to find.
 */
function findFileInPath ($name) {
	static $scriptPath = null;
	if ($scriptPath === null) {
		// only compute this once for each request
		$scriptPath = realpath($_SERVER['SCRIPT_FILENAME']);
	}

	// start at script path
	$path = $scriptPath;

	// check parent directories
	while ($path !== false && $path !== '/' && $path !== '' && $path !== '.') {
		// go up one directory
		$path = dirname($path);

		// check for file in this directory
		$testPath = $path . '/' . $name;
		if (file_exists($testPath)) {
			return $testPath;
		}

		// stop checking when at document or app root
		if (basename($path) === 'htdocs') {
			break;
		}
	}

	// return null if not found
	return null;
}

/**
 * Include a file and return any output.
 *
 * NOTE: File is included by function with local scope, and cannot access
 * global variables without using the global keyword.
 *
 * @param $file {String}
 *         path the file, or null to not include any file.
 * @param $default {Any}
 *         return value when file is null or does not exist.
 *         default is null.
 * @return {String} any output that was captured.
 */
function includeFile ($file, $default=null) {
	$contents = $default;
	if ($file !== null && file_exists($file)) {
		ob_start();
		include $file;
		$contents = ob_get_clean();
	}
	return $contents;
}

/**
 * Generate markup for a navigation item.
 *
 * When $href is null, only the text is output.
 * When $href matches the start of REQUEST_URI, it is considered the
 * "current page", and no anchor is output.
 *
 * @param $href {String}
 *         href for anchor, null for no link.
 * @param $text {String}
 *         text for anchor.
 * @return {String} markup for navigation item.
 */
function navItem ($href, $text) {
	$isCurrentPage = preg_match(
			'/^' . preg_quote($href, '/') . '/',
			$_SERVER['REQUEST_URI']);

	if ($isCurrentPage) {
		return '<strong>' . $text . '</strong>';
	} else {
		return '<a href="' . $href . '">' . $text . '</a>';
	}
}

/**
 * Generate markup for a navigation group.
 *
 * @param  $text {String} text for group header.
 * @param  $children markup for group navigation items.
 * @return {String} markup for navigation group.
 */
function navGroup ($text, $children) {
	return '<section>' .
			'<header>' . $text . '</header>' .
			$children .
			'</section>';
}


?>
