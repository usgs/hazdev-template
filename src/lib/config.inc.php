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
// AUTO GENERATED CONTENT

// process before site configuration, in case site needs to modify

if ($HEAD === true) {
	$HEAD = includeFile(findFileInPath('_head.inc.php'), null);
}

if ($FOOT === true) {
	$FOOT = includeFile(findFileInPath('_foot.inc.php'), null);
}

if ($NAVIGATION === true) {
	$NAVIGATION = includeFile(findFileInPath('_navigation.inc.php'), null);
}


///////////////////////////////////////////////////////////////////////////////
// SITE CONFIGURATION

// load site configuration if it exists, or trigger_error

if (isset($_SERVER['DOCUMENT_ROOT'])) {
	$site_config = $_SERVER['DOCUMENT_ROOT'] . '/_config.inc.php';
	if (file_exists($site_config)) {
		include_once($site_config);
	} else {
		trigger_error('expected site configuration at "' . $site_config . '"');
	}
} else {
	trigger_error('DOCUMENT_ROOT is not set, cannot find site configuration');
}
