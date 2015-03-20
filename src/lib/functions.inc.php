<?php


/**
 * Get a request parameter from $_GET or $_POST.
 *
 * @param $name {String}
 *        The parameter name.
 * @param $default {?} default is null.
 *        Optional default value if the parameter was not provided.
 */
if (!function_exists('param')) {
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
if (!function_exists('findFileInPath')) {
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
}

/**
 * Generate markup for a navigation item.
 *
 * When $href matches the start of REQUEST_URI, it is considered the
 * "current page", and no anchor is output.  To match the start of
 * REQUEST_URI, $href should be a site root-relative link.
 *
 * @param $href {String}
 *         href for anchor.
 * @param $text {String}
 *         text for anchor.
 * @param $isCurrentPage {Boolean} default null.
 *        When null, compare /^$href/ to REQUEST_URI and highlight if matches.
 *        When true, highlight.
 *        When false, do not highlight.
 * @return {String} markup for navigation item.
 */
if (!function_exists('navItem')) {
function navItem ($href, $text, $isCurrentPage=null) {
	if ($isCurrentPage === null) {
		$isCurrentPage = preg_match(
				'/^' . preg_quote($href, '/') . '/',
				$_SERVER['REQUEST_URI']);
	}

	if ($isCurrentPage) {
		return '<a href="' . $href . '"><strong>' . $text . '</strong></a>';
	} else {
		return '<a href="' . $href . '">' . $text . '</a>';
	}
}
}

/**
 * Generate markup for a navigation group.
 *
 * @param  $text {String} text for group header.
 * @param  $children markup for group navigation items.
 * @return {String} markup for navigation group.
 */
if (!function_exists('navGroup')) {
function navGroup ($text, $children) {
	return '<section>' .
			'<header>' . $text . '</header>' .
			$children .
			'</section>';
}
}

?>
