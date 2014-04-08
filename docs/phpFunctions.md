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
 * When $href matches the start of REQUEST_URI, it is considered the
 * "current page", and no anchor is output.  To match the start of
 * REQUEST_URI, $href should be a site root-relative link.
 *
 * @param $href {String}
 *         href for anchor.
 * @param $text {String}
 *         text for anchor.
 * @return {String} markup for navigation item.
 */
function navItem ($href, $text)
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


