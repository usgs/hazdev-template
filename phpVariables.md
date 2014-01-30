PHP Template Variables
======================

## Site configuration of template

Site-wide configuration variables should be place in the file `DOCUMENT_ROOT/_config.inc.php`. Be careful to check if a page has already set a variable such as $HEAD, so page specific configuration is not ignored.

```php
if (!isset $HEAD) {
	$HEAD = '';
}
$HEAD = '<link rel="stylesheet" href="/site/index.css">' . $HEAD;
```


## Page configuration of template

Each page using the template should configure the template, include the template, and then generate page content:

```php
<?php

// include guard so configuration only happens once
if (!isset($TEMPLATE)) {
	// configure the template
	$TITLE = 'My Page Title';
	// include the template
	include_once 'template.inc.php';
}

// generate page content

?>
```


## Variables

### $TITLE

Sets the content of the title element, and h1 page header.

```php
$TITLE = 'My page title';
```


### $CONTACT

Sets the page contact information email.

```php
$CONTACT = 'lisa@usgs.gov';
```


### $HEAD

Markup after the opening head element of a page (`<head>$HEAD`).  Typically stylesheets.

Values:
- (default) {Boolean} false, don't embed content.
- {Boolean} true, calls
    [findFileInPath('_head.inc.php')](phpFunctions.md#findFileInPath).
- {String} markup, html markup to include.

```php
$HEAD = '<link rel="stylesheet" href="mystyles.css"/>';
```


### $FOOT

Markup before the closing body element of a page (`$FOOT</body>`).  Typically javascript.

Value:
- (default) {Boolean} false, don't embed content.
- {Boolean} true, calls
    [findFileInPath('_foot.inc.php')](phpFunctions.md#findFileInPath).
- {String} markup, html markup to include.

```php
$FOOT = '<script src="myscript.js"></script>';
```


### $NAVIGATION

Markup for "section" navigation.
Appears before "site" navigation (`$SITE_SITENAV`) in sidebar/offcanvas.

Values:
- (default) {Boolean} false, don't embed content.
- {Boolean} true, calls
    [findFileInPath('_navigation.inc.php')](phpFunctions.md#findFileInPath),
- {String} markup, html markup to include.

```php
$NAVIGATION = navItem('/section/', 'Section') .
    navGroup('Section 2',
        navItem('/section2/index.php', 'Section 2 page') .
        navItem('/section2/other.php', 'Section 2 other'));
```

#### Section navigation example
By setting $NAVIGATION to true, all pages in a section can share the same 
navigation file without repeating the navigation content in each page.

page.php
```php
$NAVIGATION = true;
```

_navigation.inc.php
```php
echo navItem('/section/', 'Section') .
    navGroup('Section 2',
        navItem('/section2/index.php', 'Section 2 page') .
        navItem('/section2/other.php', 'Section 2 other'));
```


### $SOCIAL

Configure sharing links in page footer.

Values:
- (default) {Boolean} false, don't include social links on page.
- {Array<Array>} social link templates.


Default value is
```php
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
```

Url values may include "{TITLE}" and "{URL}", which are replaced with page specific values.


### $SITE_URL

Configure the domain name, embedded in search form for search this site.

```php
$SITE_URL = 'earthquake.usgs.gov';
```


### $SITE_SITENAV

Configure "site" navigation.
Appears between "section" navigation ($NAVIGATION) and "search" in sidebar/offcanvas.

```php
$SITE_SITENAV = navItem('/earthquakes/', 'Earthquakes') .
    navItem('/hazards/', 'Hazards') .
    navItem('/data/', 'Data') .
    navItem('/learn/', 'Learn') .
    navItem('/monitoring/', 'Monitoring') .
    navItem('/research/', 'Research');
```


### $SITE_COMMONNAV

Configure "common navigation".
Appears at bottom of page.

```php
$SITE_COMMONNAV =
		navItem('/index.php', 'Home') .
		navItem('/aboutus/', 'About Us') .
		navItem('/contactus/', 'Contact Us') .
		navItem('/legal/', 'Legal') .
		navItem('/partners/', 'Partners');
```


### $SITE_KEYWORDS

Configure meta keywords.

```php
$SITE_KEYWORDS = 'aftershock,earthquake,epicenter,fault,foreshock,geologist,' .
		'geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,' .
		'magnitude scale,mercalli,plate,richter,seismic,seismicity,seismogram,' .
		'seismograph,seismologist,seismology,subduction,tectonics,tsunami,quake,' .
		'sismologico,sismologia';
```


### $SITE_DESCRIPTION

Configure meta description.

```php
$SITE_DESCRIPTION = 'USGS Earthquake Hazards Program, responsible for' .
		' monitoring, reporting, and researching earthquakes and' .
		' earthquake hazards';
```

