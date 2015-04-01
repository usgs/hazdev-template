PHP Template Variables
======================

## $TITLE

Sets the content of the title element, and h1 page header.

```php
$TITLE = 'My page title';
```


## $HEAD, $FOOT, and $NAVIGATION

Special variables that allow content to automatically be configured for a section of the website.


### Values

* `false`

  Omit content.

* `true`

  Result of including FILE with string buffering.
  Each variable uses a different FILE, listed below.

*  String

  html markup as a string.


### $HEAD

FILE is `_head.inc.php`

Markup before the closing head element of a page (`$HEAD</head>`).  Typically stylesheets.

```php
$HEAD = '<link rel="stylesheet" href="mystyles.css"/>' .
    '<link rel="stylesheet" href="mystyles2.css"/>';
```


### $FOOT

FILE is `_foot.inc.php`

Markup before the closing body element of a page (`$FOOT</body>`).  Typically javascript.

```php
$FOOT = '<script src="myscript.js"></script>' .
    '<script src="myscript2.js"></script>';
```


### $NAVIGATION

FILE is `_navigation.inc.php`

Markup for "section" navigation.

Appears before "site" navigation (`$SITE_SITENAV`) in sidebar/offcanvas.

```php
$NAVIGATION = navItem('/section/', 'Section') .
    navGroup('Section 2',
        navItem('/section2/index.php', 'Section 2 page') .
        navItem('/section2/other.php', 'Section 2 other'));
```

#### Section Navigation

By setting $NAVIGATION to true, all pages in a section can share the same navigation file without repeating the navigation content in each page.


1) In the template configuration for a content page, set $NAVIGATION to true:

```php
<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'My title';
  $NAVIGATION = true;
  include 'template.inc.php';
}

?>

content
```

2) In the same directory, or a parent directory, create a file named `_navigation.inc.php` that outputs navigation:

```php
<?php

echo navItem('/test.php', 'Test') .
    navGroup('Group 1',
        navItem('/item1.php', 'Group item 1') .
        navItem('/item2.php', 'Group item 2')) .
    navItem('/item.php', 'Item') .
    navGroup('Group 2',
        navItem('/group2/item1.php', 'Group item 1') .
        navItem('/group2/item2.php', 'Group item 2'));

?>
```

This generates a navigation list similar to:

<img src="images/navigationExample.png" alt="Section navigation screen capture"/>

* "Test" shows the styles of the "current page".
* "Item" shows the styles when mouse hovers over the item.
* Group items are indented under an un-linked group title.



## $CONTACT

Sets the page contact information email.

```php
$CONTACT = 'lisa@usgs.gov';
```


### $CONTACT_URL

Sets the page contact url.  The placeholder `{CONTACT}` is replaced with the contents of the $CONTACT variable.

```php
$CONTACT_URL = '/contactus/?to={CONTACT}';
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
