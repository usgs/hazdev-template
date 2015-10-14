Template Page Configuration
===========================


Each page using the template should configure the template, include the template, and then generate page content:

```php
<?php

// include guard so configuration and include only happen once
if (!isset($TEMPLATE)) {
  // configure the template
  $TITLE = 'My Page Title';
  // include the template
  include 'template.inc.php';
}

// generate page content

?>
```


## Template processing

This is the processing flow for a page that loads the template.  Note that `page.php` is loaded more than one time, which is why the include guard is so important.

```
# request begins
page.php
    configure template
    include 'template.inc.php'
        include 'functions.inc.php'
        include 'config.inc.php'
            # load site configuration
            include DOCUMENT_ROOT/_config.inc.php
            set $TEMPLATE
        include 'layout.inc.php'
            # output header
            include page.php
               # skip configuration/include
               generate content
            # output footer
            # exit
```


## Using template functions before including the template

Template functions are normally only defined after the template has been included. Sometimes you want to use these functions before including the template.  One example would be using the [param() function](phpFunctions.md#param) during or before template configuration:

```php
if (!isset($TEMPLATE)) {

  include_once 'functions.inc.php';
  $id = param('id');
  // look up title in database

  $TITLE = '...';
  // include the template
  include 'template.inc.php';
}

// generate page content
```
