<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Figure Captions';
	$NAVIGATION = true;
	$HEAD = '<link rel="stylesheet" href="/css/figcaption.css"/>';

	include('template.inc.php');
}
?>

<p><a href="https://github.com/usgs/earthquake-website/blob/master/src/htdocs/css/figcaption.scss">Images (with captions) SCSS</a></p>

<h2>An H2 Header</h2>

<figure class="right">
	<img src="images/st-tropez.jpg" alt="St Tropez"/>
	<figcaption>Image floated right with figure caption.</figcaption>
</figure>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h3>An H3 Header</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h4 id="aheader">An H4 Header</h4>

<figure class="left" >
	<img src="images/st-tropez.jpg" alt="St Tropez"/>
	<figcaption>Image floated left with figure caption.</figcaption>
</figure>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
