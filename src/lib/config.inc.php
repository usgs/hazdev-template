<?php

///////////////////////////////////////////////////////////////////////////////
// SET DEFAULTS

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

if (!isset($CONTACT_URL)) {
	$CONTACT_URL = '/contactus/?to={CONTACT}';
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
				'url' => 'http://twitter.com/intent/tweet?url={URL}&text={TITLE}',
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

// site url (without protocol) for "search this site"
if (!isset($SITE_URL)) {
	// an empty value implies search "All USGS Sites"
	$SITE_URL = '';
}

// site navigation markup
if (!isset($SITE_SITENAV)) {
	$SITE_SITENAV = false;
}

// common navigation markup
if (!isset($SITE_COMMONNAV)) {
	$SITE_COMMONNAV = false;
}


///////////////////////////////////////////////////////////////////////////////
// Auto Generated Content

// process before site configuration, in case site needs to modify

if ($HEAD === true) {
	$file = findFileInPath('_head.inc.php');
	if (is_file($file)) {
		ob_start();
		include $file;
		$HEAD = ob_get_clean();
	} else {
		$HEAD = null;
	}
}

if ($FOOT === true) {
	$file = findFileInPath('_foot.inc.php');
	if (is_file($file)) {
		ob_start();
		include $file;
		$FOOT = ob_get_clean();
	} else {
		$FOOT = null;
	}
}

if ($NAVIGATION === true) {
	$file = findFileInPath('_navigation.inc.php');
	if (is_file($file)) {
		ob_start();
		include $file;
		$NAVIGATION = ob_get_clean();
	} else {
		$NAVIGATION = null;
	}
}


///////////////////////////////////////////////////////////////////////////////
// Site Configuration

// load site configuration, or trigger_error

if (isset($_SERVER['DOCUMENT_ROOT'])) {
	$site_config = $_SERVER['DOCUMENT_ROOT'] . '/_config.inc.php';
	if (is_file($site_config)) {
		include_once($site_config);
	} else {
		trigger_error('expected site configuration at "' . $site_config . '"');
	}
} else {
	trigger_error('DOCUMENT_ROOT is not set, cannot find site configuration');
}


///////////////////////////////////////////////////////////////////////////////
// Recheck Auto Generated Content

// in case site configuration (re)enables these

if ($HEAD === true) {
	$file = findFileInPath('_head.inc.php');
	if (is_file($file)) {
		ob_start();
		include $file;
		$HEAD = ob_get_clean();
	} else {
		$HEAD = null;
	}
}

if ($FOOT === true) {
	$file = findFileInPath('_foot.inc.php');
	if (is_file($file)) {
		ob_start();
		include $file;
		$FOOT = ob_get_clean();
	} else {
		$FOOT = null;
	}
}

if ($NAVIGATION === true) {
	$file = findFileInPath('_navigation.inc.php');
	if (is_file($file)) {
		ob_start();
		include $file;
		$NAVIGATION = ob_get_clean();
	} else {
		$NAVIGATION = null;
	}
}

