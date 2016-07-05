<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Navigation';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<h2>Homepage</h2>
<p>
  The homepage has no left navigation since the sitewide sections are presented as part of the main content.
</p>

<h2>Section Level Webpages</h2>
<p>The Section level pages include the sitewide navigation by default.</p>
<p>
  The sitewide navigation is defined in /src/htdocs/_config.inc.php, and the "buttons" will only span the width of the left navigation column, which is variable and depends on the width of the browser window.
</p>

<section class="site-sitenav" aria-label="Site Navigation">
  <a href="/earthquakes/">Earthquakes</a>
  <a href="/hazards/">Hazards</a>
  <a href="/data/">Data &amp; Products</a>
  <a href="/learn/">Learn</a>
  <a href="/monitoring/">Monitoring</a>
  <a href="/research/">Research</a>
</section>

<h2>Usage</h2>
<pre>
  // navigation above search, below section navigation
$SITE_SITENAV =
  &apos;&lt;a href=&quot;/earthquakes/&quot;&gt;Earthquakes&lt;/a&gt;&apos; .
  &apos;&lt;a href=&quot;/hazards/&quot;&gt;Hazards&lt;/a&gt;&apos; .
  &apos;&lt;a href=&quot;/data/&quot;&gt;Data &amp;amp; Products&lt;/a&gt;&apos; .
  &apos;&lt;a href=&quot;/learn/&quot;&gt;Learn&lt;/a&gt;&apos; .
  &apos;&lt;a href=&quot;/monitoring/&quot;&gt;Monitoring&lt;/a&gt;&apos; .
  &apos;&lt;a href=&quot;/research/&quot;&gt;Research&lt;/a&gt;&apos;;
</pre>

<h2>Sub-Section Level Webpages</h2>
<p>
  The Section navigation is defined in the _navigation.inc.php file. Set the variable $NAVIGATION in the header of the PHP file to 'true' ($NAVIGATION = true;)in order to include the _navigation.inc.php.
</p>
<p>
  The Sub-Section level pages include an "up-one-level" link at the top, the Section navigation and the sitewide navigation.  The navigation is defined in the _navigation.inc.php file.
</p>
<p>
  The default is to use the _navigation.inc.php file in the current directory.  If there is none in the current directory, it will use the one in the directory one level up, etc, until one exists.
</p>

<p>
  See <a href="/earthquakes/browse/">Earthquake Lists, Maps and Statistics</a> for an example of what the code below will display.
</p>

<h2>Usage</h2>
<pre>
&lt;?php
$section = &quot;/earthquakes/feed/&quot;;
echo &quot;&lt;a href=&apos;(&quot;${section}&quot; class=&apos;up-one-level&apos;&gt;Feeds and Notifications&lt;/a&gt;&quot;;

  print navGroup(&apos;Real-time Feeds&apos;,
    navItem(&apos;v1.0/atom.php&apos;, &apos;ATOM&apos;) .
    navItem(&apos;v1.0/kml.php&apos;, &apos;KML&apos;) .
    navItem(&apos;v1.0/csv.php&apos;, &apos;Spreadsheet&apos;) .
    navItem(&apos;v1.0/quakeml.php&apos;, &apos;QuakeML&apos;) .
    navItem(&apos;v1.0/geojson.php&apos;, &apos;GeoJSON Summary&apos;) .
    navItem(&apos;v1.0/geojson_detail.php&apos;, &apos;GeoJSON Detail&apos;)
  );
?&gt;
</pre>

<h2>Webpages Under Sub-Section</h2>
<p>Webpages under the Sub-Section level include an "up-one-level" link at the top, the navigation (if any) for the current content, and the sitewide navigation.</p>

<p>
  See <a href="/earthquakes/feed/policy.php">Feed Life Cycle Policy</a> for an example.
</p>

<h2>Use Navigation in Another Directory</h2>
<p>
  If you want to use a navigation file in another directory (usually this is because you have a subdirectory for a collection of content, but you want the main index.php file for that content to use the navigation file in the directory one level up), you can specify which navigation file to use.
</p>
<p>See <a href="/earthquakes/feed/">Real-time Feeds and Notifications</a> for an example of this in use.
</p>
<p>
To accomplish this, add the following to the top of the PHP file:
</p>

<h2>Usage</h2>
<pre>
// Use Earthquake level nav file
  include_once &apos;functions.inc.php&apos;;
  ob_start();
// indicate path to navigation file here; in this case, up one directory
  include &apos;../_navigation.inc.php&apos;;
  $NAVIGATION = ob_get_clean();

  include &apos;template.inc.php&apos;;
</pre>

<h2>Navigation With a Group Header</h2>
<p>
  See <a href="/data/comcat">ANSS Comprehensive Earthquake Catalog (ComCat) Documentation</a> for an example of what the code below with display.
</p>

<h2>Usage</h2>
<pre>
&lt;?php
$section = &quot;/earthquakes/feed/&quot;;
echo &quot;&lt;a href=&apos;(&quot;${section}&quot; class=&apos;up-one-level&apos;&gt;Feeds and Notifications&lt;/a&gt;&quot;;

  print navGroup(&apos;Real-time Feeds&apos;,
    navItem(&apos;v1.0/atom.php&apos;, &apos;ATOM&apos;) .
    navItem(&apos;v1.0/kml.php&apos;, &apos;KML&apos;) .
    navItem(&apos;v1.0/csv.php&apos;, &apos;Spreadsheet&apos;) .
    navItem(&apos;v1.0/quakeml.php&apos;, &apos;QuakeML&apos;) .
    navItem(&apos;v1.0/geojson.php&apos;, &apos;GeoJSON Summary&apos;) .
    navItem(&apos;v1.0/geojson_detail.php&apos;, &apos;GeoJSON Detail&apos;)
  );
?&gt;
</pre>

<h2>Navigation Without a Group Header</h2>

<p>
  See <a href="/earthquakes/browse/">Earthquake Lists, Maps and Statistics</a> for an example of what the code below will display.
</p>

<pre>
&lt;?php
$section = &quot;/earthquakes/feed/&quot;;
echo &quot;&lt;a href=&apos;(&quot;${section}&quot; class=&apos;up-one-level&apos;&gt;Feeds and Notifications&lt;/a&gt;&quot;;

&quot;&lt;section&gt;&quot;,
    navItem(&apos;v1.0/atom.php&apos;, &apos;ATOM&apos;) .
    navItem(&apos;v1.0/kml.php&apos;, &apos;KML&apos;) .
    navItem(&apos;v1.0/csv.php&apos;, &apos;Spreadsheet&apos;) .
    navItem(&apos;v1.0/quakeml.php&apos;, &apos;QuakeML&apos;) .
    navItem(&apos;v1.0/geojson.php&apos;, &apos;GeoJSON Summary&apos;) .
    navItem(&apos;v1.0/geojson_detail.php&apos;, &apos;GeoJSON Detail&apos;) ,
&quot;&lt;/section&gt;&quot;
    ;
?&gt;
</pre>
