Site Configuration
==========================


## CSS Theme Configuration

Each site should define one site-wide stylesheet that defines the site theme, before including the template SCSS partial that uses those theme variables.


Example site theme `theme.scss`:
```scss
///////////////////////////////////////////////////////////////////////////////
// configure theme variables

// banner image
$banner-image: '/theme/images/usgs-banner.jpg';
$banner-background-color: #000;

// site title and colors
$site-title: 'My Site Title';
$site-title-color: #fff;
$site-title-background-color: #4e7ab9;

// primary color of site
$sitenav-background-color: #C9D8E9;


///////////////////////////////////////////////////////////////////////////////
// import template scss partial

@import ".../hazdev-template/src/htdocs/css/template";


///////////////////////////////////////////////////////////////////////////////
// include site-wide content patterns
// alternatively, these can be included per page instead of site-wide

// @import ".../hazdev-template/src/htdocs/css/flexible-grid.scss"

///////////////////////////////////////////////////////////////////////////////
// other site-wide css rules

```

This site wide SCSS file then needs to be compiled to CSS, using sass on the command line `sass theme.scss`, which should generate a file named `theme.css` that can be configured as described below.

[All SCSS Variables](scssVariables.md)
[All Content Patterns](scssPatterns.md)


## PHP Configuration

Site-wide php variables go in the file `DOCUMENT_ROOT/_config.inc.php`:
```php

// configure site search url, leave blank for all usgs
$SITE_URL = 'earthquake.usgs.gov';

$SITE_SITENAV =
		navItem('#earthquakes', 'Earthquakes') .
		navItem('#hazards', 'Hazards') .
		navItem('#data', 'Data') .
		navItem('#learn', 'Learn') .
		navItem('#monitoring', 'Monitoring') .
		navItem('#research', 'Research');

$SITE_COMMONNAV =
		navItem('#home', 'Home') .
		navItem('#aboutus', 'About Us') .
		navItem('#contactus', 'Contact Us') .
		navItem('#legal', 'Legal') .
		navItem('#partners', 'Partners');

$HEAD = 
		// site theme, should use a site root-relative URL
		'<link rel="stylesheet" href="/css/theme.css"/>' .
		// page head content
		($HEAD || '') .
		// description meta
		'<meta name="description" content="' .
				'USGS Earthquake Hazards Program, responsible for' .
				' monitoring, reporting, and researching earthquakes and' .
				' earthquake hazards' .
		'"/>' .
		// keywords meta
		'<meta name="keywords" content="' .
				'aftershock,earthquake,epicenter,fault,foreshock,geologist,' .
				'geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,' .
				'magnitude scale,mercalli,plate,richter,seismic,seismicity,seismogram,' .
				'seismograph,seismologist,seismology,subduction,tectonics,tsunami,quake,' .
				'sismologico,sismologia' .
		'"/>';

```

When setting site-wide variables, consider whether pages may also use those variables so page configuration is not ignored.  For example the `$HEAD` variable can be used to include a site-wide stylesheet, but pages may need to add additional page specific stylesheets.

[All PHP Variables](phpVariables.md)


### Include Path Configuration

The template pre-install script creates and Apache configuration file snippet in `src/conf/httpd.conf`, which is used to:

- Add `hazdev-template/src/lib` to the php include path.
- Alias the url prefix `/theme` to the directory `hazdev-template/src/htdocs`.

This can be included into the webserver apache configuration using an Include directive; or these same configurations may be manually changed on other web servers.