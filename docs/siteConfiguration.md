Template Site Configuration
==========================


## CSS configuration

Each site should define one site-wide stylesheet that defines the site theme, before including the template SCSS partial that uses those theme variables.

[Template SCSS Variables](scssVariables.md)

Example site theme `DOCUMENT_ROOT/site/theme.scss`:
```scss
// theme variables
$site-title: 'My Site Title';

// import template scss partial
@import "/path/to/hazdev-template/src/htdocs/css/template";
```

This site wide SCSS file then needs to be compiled to CSS, using sass on the command line `sass site/theme.scss`, which should generate a file named `site/theme.css` that can be configured as described below.


## PHP configuration

Site-wide php variables go in the file `DOCUMENT_ROOT/_config.inc.php`.

[Template PHP Variables](phpVariables.md)

When setting site-wide variables, consider whether pages may also use those variables so page configuration is not ignored.  For example the `$HEAD` variable can be used to include a site-wide stylesheet, but pages may need to add additional page specific stylesheets.

```php
if (!isset $HEAD) {
	$HEAD = '';
}
$HEAD = '<link rel="stylesheet" href="/site/theme.css"/>' . $HEAD;
```

