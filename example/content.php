<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Content Styles';
	$NAVIGATION = true;
	include 'template.inc.php';
}
?>

<p>This is an evolving document. Please add to it.</p>

<h2>Disclaimers</h2>
<ul>
	<li>Use the "small" element for disclaimers.</small>
	<li>Place them at the end of the page content.</li>
</ul>

<h2>Links &amp; Labels</h2>
<ul>
	<li>Never use "click here" for a link.</li>
	<li>The link text should match the title of the webpage you're linking to.</li>
	<li>Use title case for navigation links.</li>
	<li>off-site links - will show symbol, do not make open in new window with <code>target="_blank"</code></li>
</ul>

<h2>Maps</h2>
<p>This section needs to be completed.</p>
<ul>
	<li>Leaflet</li>
	<li>Include distance scale.</li>
</ul>

<h2>Multimedia</h2>
<p>This section needs to be completed.</p>
<ul>
	<li>Photos</li>
	<li>Photo Galleries</li>
	<li>Videos</li>
	<li>Images</li>
</ul>

<h2>Navigation</h2>
<ul>
	<li>Site navigation will always appear off-canvas on small-format and at the
	bottom-left on large-format.</li>
	<li>If local navigation is needed, it will appear above the site navigation.</li>
	<li>If the webpage is more than one level below the site section, a navigation
	link to the level one above the current one will appear above the site navigation
	(and below the local navigation if it exists.)
	<li>Navigation text should match the title of the webpage you're linking to.
	If it is too long, you can shorten it but don't change any of the words.</li>
</ul>

<h2>Titles &amp; Headers</h2>
<ul>
	<li>Use title case.</li>
	<li>No title with a colon (:) at the end.</li>
	<li>Short and simple is better than long and technical.</li>
</ul>

<h2>Writing Style</h2>
<ul>
	<li>Include at top of all webpages (example):
	<pre><code>
	// Webpage contact - Lisa Wald
	// Content contact/SME - Art Frankel
	// Created Jan 2015
	// Last updated 01/30/2015
		</code></pre>
	</li>
	<li>Use the <a href="http://www.plainlanguage.gov/">Plain Language</a> guidelines.</li>
	<li>"and" versus "&amp;" - always use "and" in copy, and in headers and navigation links as much as possible, instead of "&amp;".
	<li>US not U.S.</li>
	<li>USGS not U.S.G.S., US "Geological Survey", not "U.S. Geological Survey"</li>
	<li>"University of Washington" is preferred to "Univ. of Washington" (include "." here)</li>
	<li>"real-time" not "realtime"</li>
	<li>phone numbers - xxx-xxx-xxxx
	<li>5000 not 5,000, but 10,000+ gets the comma.
	<li>voice & purpose:
		<ul>
			<li>make science about people too, not just data and research, include photos of people</li>
			<li>explain scientific method by example</li>
			<li>teach something new about the science, not just the results</li>
			<li>think "fact sheet" for level</li>
			<li>tell a story</li>
			<li>off-site links open in the same browser window</li>
		</ul>
</li>

	<li>width of text on page will be limited to ??? using the class ?</li>
</ul>

<H2>See also:</h2>
<ul>
	<li><a  href="https://github.com/usgs/hazdev-template/">Website Overview, Config, Variables, Functions, and SCSS Patterns</a>
</ul>