<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Cooperator Logos';
  $NAVIGATION = true;

  $COOPERATORS =
    '<a class="cooperator" href="http://anss.org/">' .
      '<img src="https://usgs.github.io/anss-comcat/logos/ci.svg"' .
      ' alt="in cooperation with Advanced National Seismic System (ANSS)"/>' .
    '</a>';

  include 'template.inc.php';
}
?>

<p>
  Contributor logos may be added to the banner by setting the
  <code>$COOPERATORS</code> template variable. The logo will appear
  to the right of the USGS site logo.
</p>

<h2>Usage</h2>
<pre><code>$COOPERATORS = <?php echo htmlspecialchars($COOPERATORS); ?>
</code></pre>