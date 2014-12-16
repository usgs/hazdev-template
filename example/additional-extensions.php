<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Additional Extensions';
	$NAVIGATION = true;

	include 'template.inc.php';
}
?>

<p>
	These are the styles in the template that are NOT included by default.
	They can easy be included on any page by linking to the appropriate css
	file in $HEAD. Additional styles available include:
</p>

<ul>
	<li>Alerts</li>
	<li>Figure Captions</li>
	<li>Image Lists</li>
	<li>Jump Lists</li>
	<li>References</li>
	<li>Responsive Tables</li>
</ul>

<h3>How To</h3>
<p>
	To include any of these additional styles inlcude the css file in the app
	configuration or on the page where you would like the styles applied.
	Look at the example below for help.
</p>
<pre><code>if (!isset($TEMPLATE)) {
	$TITLE = 'Responsive Table Demo';
	$NAVIGATION = true;

	$HEAD = '
	&lt;link rel="stylesheet" href="/css/responsive-table.css"/&gt;
}
</code></pre>