<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Image List Example';

	$HEAD = '
		<link rel="stylesheet" href="/css/flexible-grid.css"/>
		<link rel="stylesheet" href="/css/imagelist.css"/>
	';

	$FOOT = '
		<script src="http://localhost:35729/livereload.js?snipver=1"></sciript>
	';

	include 'classes/ImageList.class.php';
	include 'template.inc.php';
}

$imageList = new ImageList();
$imageList->addItem('#', 'http://placehold.it/400x400',
		'Example with a reasonably too long header to see how things will work this way!',
		'Some Example text for an image list');


$imageList->addItem('#', 'http://placehold.it/100x100', 'Example',
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list');


$imageList->addItem('#', 'http://placehold.it/300x200', 'Example',
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example');


$imageList->addItem('#', 'http://placehold.it/100x300', 'Example',
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list ' .
		'Some Example text for an image list');

$imageList->display();
?>
