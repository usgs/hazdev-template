PHP Template Functions
======================


## param

```php
/**
 * Get a request parameter from $_GET or $_POST.
 *
 * @param $name {String}
 *        The parameter name.
 * @param $default {?} default is null.
 *        Optional default value if the parameter was not provided.
 */
function param ($name, $default=null)
```

### param examples

If the requested page is `mypage.php?someparameter=value`:
```php
$someparameter = param('someparameter', 'defaultvalue');
echo $someparameter;
// output is "value"
```

If the requested page is `mypage.php`:
```php
$someparameter = param('someparameter', 'defaultvalue');
echo $someparameter;
// output is "defaultvalue"
```


## includeFile 

```php
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
```

### includeFile examples

If the file `somefile.php` contains:
```php
<?php
echo 'Hello World!';
?>
```

Then:
```php
$someFileContents = includeFile('somefile.php');
echo $someFileContents;
// output is "Hello World!"
```


## findFileInPath

```php
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
function findFileInPath ($name)
```

### findFileInPath examples

Given this directory structure:
```
directory/index.php
directory/myfile.php
directory/subdirectory/index.php
directory/subdirectory/subsubdirectory/index.php
directory/subdirectory/subsubdirectory/myfile.php
```

If the requested page is `directory/index.php`:
```php
$path = findFileInPath('myfile.php');
echo $path;
// output is 'directory/myfile.php'
```

If the requested page is `directory/subdirectory/index.php`:
```php
$path = findFileInPath('myfile.php');
echo $path;
// output is 'directory/myfile.php'
```

If the requested page is `directory/subdirectory/subsubdirectory/index.php`:
```php
$path = findFileInPath('myfile.php');
echo $path;
// output is 'directory/subdirectory/subsubdirectory/myfile.php'
```


## navItem

See [$NAVIGATION](phpVariables#navigation) for information about template navigation.

```php
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
function navItem($href, $text)
```

### navItem example

```php
echo navItem('/contactus/', 'Contact Us');
```


## navGroup

See [$NAVIGATION](phpVariables#navigation) for information about template navigation.

```php
/**
 * Generate markup for a navigation group.
 *
 * @param  $text {String} text for group header.
 * @param  $children markup for group navigation items.
 * @return {String} markup for navigation group.
 */
function navGroup($text, $children)
```

### navGroup example

```php
echo navGroup('Section',
    navItem('/section/page1.php', 'Section Page 1') .
    navItem('/section/page2.php', 'Section Page 2') .
    navItem('/section/page3.php', 'Section Page 3'));
```


