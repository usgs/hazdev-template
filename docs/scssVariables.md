Template SCSS Variables
=======================

See [Site Configuration](siteConfiguration.md) for information about where to set these variables.


## General layout

### $spacing
Used as padding and margin of many elements.
Default is 8px.

### $breakpoint-full
Width of page when OffCanvas is disabled.
Default is 768px.

### $side-column-width
Width of side column, containing Section Navigation, Site Navigation, and Search, when page is at least $breakpoint-full pixels wide.
Default is 20%.


## Banner variables

### $banner-image

The banner image to the right of the USGS logo.
Default is '/theme/images/usgs-banner.jpg'.

### $banner-background-color

The background color of the banner section.
Default is #000.

### $site-title

Name of site.
Default is 'U.S. Geological Survey'.

### $site-title-color

Text color for [$site-title](#site-title).
Default is #fff.

### $site-title-background-color

Background color for [$site-title](#site-title).
Default is #4e7ab9.


## Page Footer

### $page-footer-color
Text color for page footer.
Default is #999.

### $page-footer-background-color
Background color for page footer.
Default is #fff.

### $page-footer-border-color
Border color for page footer.
Default is #ddd.


## Search

### $search-background-color
Background color for search box.
Default is #eee.

### $search-border-color
Border color for search box.
Default is #ccc


## Site Navigation

### $sitenav-color
Text color for site navigation.
Default is #132840.

### $sitenav-background-color
Background color for site navigation.
Default is #C9D8E9.

### $sitenav-color-hover
Hover text color for site navigation
Default is #111.

### $sitenav-background-color-hover
Hover background color for site navigation.
Default is darken($sitenav-background-color, 10%).

### $sitenav-border-color-hover
Hover border color for site navigation.
Default is #111.


## Section Navigation

Section navigation is by default made to be 10% "lighter" than site navigation, and often does not need to be specified by a theme.

### $sectionnav-color
Text color for section navigation.
Default is $sitenav-color.

### $sectionnav-background-color
Background color for section navigation.
Default is lighten($sitenav-background-color, 10%).

### $sectionnav-color-hover
Hover text color for section navigation.
Default is $sitenav-color-hover.

### $sectionnav-background-color-hover
Hover background color for section navigation.
Default is lighten($sitenav-background-color-hover, 10%).

### $sectionnav-border-color
Border color for section navigation.
Default is #ccc.


## OffCanvas

Side column content is displayed "off canvas", or hidden by default, on pages smaller than $breakpoint-full pixels wide.

### $offcanvas-width
How wide the offcanvas content will be (or how far from the left edge page content is shifted).
Default is 80%.

### $offcanvas-toggle-color
Text color for offcanvas toggle "button".
Default is $sitenav-color.

### $offcanvas-toggle-background-color
Background color for offcanvas toggle "button".
Default is $sitenav-background-color.

### $offcanvas-toggle-border-color
Border color for offcanvas toggle "button".
Default is $offcanvas-toggle-color.

### $offcanvas-toggle-color-hover
Hover text color for offcanvas toggle "button".
Default is $sitenav-color-hover.

### $offcanvas-toggle-background-color-hover
Hover background color for offcanvas toggle "button".
Default is $sitenav-background-color-hover.

### $offcanvas-toggle-border-color-hover
Hover border color for offcanvas toggle "button".
Default is $sitenav-border-color-hover

### $offcanvas-transition-time
Transition time when showing and hiding offcanvas content.
Default is .5s.

