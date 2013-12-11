<?php

// load site configuration if it exists
if (isset($_SERVER['DOCUMENT_ROOT'])) {
	$site_config = $_SERVER['DOCUMENT_ROOT'] . '/_config.inc.php';
	if (file_exists($site_config)) {
		include_once($site_config);
	} else {
		trigger_error('expected site configuration at "' . $site_config . '"');
	}
}



// include guard for detecting whether template has been included
if (!isset($TEMPLATE)) {
	$TEMPLATE = null;
}

// page title, for <title> and <h1> heading
if (!isset($TITLE)) {
	$TITLE = 'Default Page Title';
}

// page contact, email address
if (!isset($CONTACT)) {
	$CONTACT = null;
}

// content for head element of page, like <meta> or <link>
if (!isset($HEAD)) {
	$HEAD = false;
}

// content for end of page, like <script>
if (!isset($FOOT)) {
	$FOOT = false;
}

// content for side navigation
if (!isset($NAVIGATION)) {
	$NAVIGATION = false;
}

// social links for sharing page
if (!isset($SOCIAL)) {
	// NOTE: configured links do not need to encode & as &amp;
	$SOCIAL = array(
			array(
				'name' => 'Facebook',
				'url' => 'http://www.facebook.com/sharer.php?u={URL}',
				'class' => 'facebook'
			),
			array(
				'name' => 'Twitter',
				'url' => 'http://twitter.com/share?url={URL}&text={TITLE}',
				'class' => 'twitter'
			),
			array(
				'name' => 'Google',
				'url' => 'https://plusone.google.com/_/+1/confirm?url={URL}',
				'class' => 'google-plus'
			),
			array(
				'name' => 'Email',
				'url' => 'mailto:?to=&subject={TITLE}&body={URL}',
				'class' => 'email'
			)
	);
}


// auto generated content

if ($HEAD === true) {
	$HEAD = findFileInPath('_head.inc.php');
	if ($HEAD !== null) {
		ob_start();
		include($HEAD);
		$HEAD = ob_get_clean();
	}
}

if ($FOOT === true) {
	$FOOT = findFileInPath('_foot.inc.php');
	if ($FOOT !== null) {
		ob_start();
		include($FOOT);
		$FOOT = ob_get_clean();
	}
}

if ($NAVIGATION === true) {
	$NAVIGATION = findFileInPath('_navigation.inc.php');
	if ($NAVIGATION !== null) {
		ob_start();
		include($NAVIGATION);
		$NAVIGATION = ob_get_clean();
	}
}



if (!isset($SITE_TITLE)) {
	$SITE_TITLE = 'Default Site Title';
}

if (!isset($SITE_URL)) {
	$SITE_URL = $_SERVER['HTTP_HOST'];
}

if (!isset($SITE_SITENAV)) {
	$SITE_SITENAV = false;
}

if (!isset($SITE_COMMONNAV)) {
	$SITE_COMMONNAV = false;
}

// make sure $HEAD is a string at this point
if (!$HEAD) { $HEAD = ''; }

if (isset($SITE_KEYWORDS)) {
	$HEAD .= '<meta name="keywords" content="' . $SITE_KEYWORDS . '"/>';
}

if (isset($SITE_DESCRIPTION)) {
	$HEAD .= '<meta name="description" content="' . $SITE_DESCRIPTION . '"/>';
}

