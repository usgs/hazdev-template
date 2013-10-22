<?php


/**
 * Get a request parameter from $_GET or $_POST.
 *
 * @param $name {String}
 *        The parameter name.
 * @param $default {?} default is null.
 *        Optional default value if the parameter was not provided.
 * @param $regex {String} default is null.
 *        Optional regular expression used to validate.
 *        If the value was provided and does not match regex,
 *        return $default instead.
 */
function param ($name, $default=null, $regex=null) {
	$value = null;
	$key = "$name";

	if (isset($_POST[$key])) {
		$value = $_POST[$key];
	} else if (isset($_GET[$key])) {
		$value = $_GET[$key];
	} else {
		$value = $default;
	}

	if ($value !== $default && $regex !== null) {
		if (preg_match($regex, $value)) {
			return $value;
		} else {
			return $default;
		}
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
	static $script_path = null;
	if ($script_path === null) {
		// only compute this once for each request
		$script_path = realpath($_SERVER['SCRIPT_FILENAME']);
	}
	
	// start at script path
	$path = $script_path;
	
	// check parent directories
	while ($path !== false && $path !== '/' && $path !== '' && $path !== '.') {
		// go up one directory
		$path = dirname($path);

		// check for file in this directory
		$test_path = $path . '/' . $name;
		if (file_exists($test_path)) {
			return $test_path;
		}

		// stop checking when at document or app root
		if (basename($path) === 'htdocs') {
			break;
		}
	}

	// return null if not found
	return null;
}


?>