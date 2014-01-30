Template Site Configuration
==========================


## PHP configuration

Site-wide php variables go in the file `DOCUMENT_ROOT/_config.inc.php`.

[Template PHP Variables](phpVariables.md)

When setting site-wide variables, consider whether pages may also use those variables so page-configuration is not ignored.  For example the `$HEAD` variable can be used to include a site-wide stylesheet, but pages may need to add page specific stylesheets.

```php
if (!isset $HEAD) {
	$HEAD = '';
}
$HEAD = '<link rel="stylesheet" href="/site/theme.css">' . $HEAD;
```


## CSS configuration

Each site should define one site-wide stylesheet that defines the site theme, before including the template SCSS partial that uses those theme variables.

[Template SCSS Variables](scssVariables.md)

site/theme.scss
```scss
// theme variables
$site-title: 'My Site Title';

// include template scss partial
@include "/path/to/hazdev-template/src/htdocs/css/template";
```

This site wide SCSS file then needs to be compiled to CSS, using sass:
```
sass site/theme.scss
```
