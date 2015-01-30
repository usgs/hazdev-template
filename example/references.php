<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'References';
	$NAVIGATION = true;
	$HEAD = '<link rel="stylesheet" href="/theme/css/references.css"/>';

	include('template.inc.php');
}
?>

<h2>Example</h2>
<p><a href="https://github.com/usgs/hazdev-template/tree/master/src/htdocs/css/references.scss">References SCSS</a></p>

<ul class="referencelist">
	<li>Reference 1 - showing that the format is in bibliography style where the
	second line is indented. Wald et al., Some really long paper title about a
	very obscure topic in seismology, some scientific journal, series number,
	date.</li>
	<li>Reference 2 - showing that the format is in bibliography style where the
	second line is indented. Wald et al., Some really long paper title about a
	very obscure topic in seismology, some scientific journal, series number,
	date.</li>
	<li>Reference 3 - showing that the format is in bibliography style where the
	second line is indented. Wald et al., Some really long paper title about a
	very obscure topic in seismology, some scientific journal, series number,
	date.</li>
	<li>Reference 4 - showing that the format is in bibliography style where the
	second line is indented. Wald et al., Some really long paper title about a
	very obscure topic in seismology, some scientific journal, series number,
	date.</li>
	<li>Reference 5 - showing that the format is in bibliography style where the
	second line is indented. Wald et al., Some really long paper title about a
	very obscure topic in seismology, some scientific journal, series number,
	date.</li>
</ul>
<h2>Usage</h2>
<pre><code>&lt;ul class="referencelist"&gt;
	&lt;li&gt;&hellip;&lt;/li&gt;
	&lt;li&gt;&hellip;&lt;/li&gt;
	&hellip;
&lt;/ul&gt;
</code></pre>