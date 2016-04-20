<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Featured Items';
  $NAVIGATION = true;
  include 'template.inc.php';
}

include_once 'Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_program_name_section';
$EQ_FEATURES->title = 'Featured Items';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'http://earthquake.usgs.gov/';
$EQ_FEATURES->baseUrl = '';

$EQ_FEATURES->items[] = array(
  'id' => 'item-main',
  'title' => 'Title of Main Featured Item',
  'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
  do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
  commodo consequat.</p>' .
  '<p>Lorem ipsum dolor sit amet, consectetur
  adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>',
  'link' => 'http://url.of.webpage/',
  'modified' => strtotime('2014-11-01'),
  'thumbnail' => 'http://placehold.it/75x75',
  'image' => 'http://placehold.it/464x300'
);

$EQ_FEATURES->items[] = array(
  'id' => 'item-2',
  'title' => 'Title of Second Featured Item',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
  commodo consequat.',
  'link' => 'http://url.of.webpage/',
  'modified' => strtotime('2014-11-01'),
  'thumbnail' => 'http://placehold.it/75x75',
  'image' => 'http://placehold.it/75x75'
);

$EQ_FEATURES->items[] = array(
  'id' => 'item-3',
  'title' => 'Title of Third Featured Item',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
  commodo consequat.',
  'link' => 'http://url.of.webpage/',
  'modified' => strtotime('2014-11-01'),
  'thumbnail' => 'http://placehold.it/75x75',
  'image' => 'http://placehold.it/75x75'
);

  echo $EQ_FEATURES->toHtml();
?>

<h2>Usage</h2>
<p>Featured Items should always appear just under the page title. In the index.php file to include the featured items, include the following code at the
top just below the &ldquo;template&rdquo; code. (If for some reason the Featured Items are to appear somewhere else on the page besides the top, include the following code at that locaion instead.) Do not nest this inside other HTML &ldquo;containers&rdquo; on the page.</p>

<pre>
  <code>
    &lt;?php
      include_once &lsquo;_features.inc.php&rsquo;;
      echo $EQ_FEATURES-&gt;toHtml();
    ?&gt;
  </code>
</pre>

<p>
  In the directory of the index.php file for which you want to include the
  featured items, create a _features.inc.php file like this:
</p>
<pre>
  <code>
    &lt;?php
    if (!isset($TEMPLATE)) {
      $TITLE = &lsquo;Featured Items&rsquo;;
      include &lsquo;template.inc.php&rsquo;;
    }

    include_once &lsquo;Features.class.php&rsquo;;

    date_default_timezone_set(&lsquo;UTC&lsquo;);

    $EQ_FEATURES = new Features();
    $EQ_FEATURES-&gt;id = &lsquo;usgs_program_name_section&rsquo;;
    $EQ_FEATURES-&gt;title = &lsquo;Featured Items&rsquo;;
    $EQ_FEATURES-&gt;author = &lsquo;U.S. Geological Survey&rsquo;;
    $EQ_FEATURES-&gt;siteUrl = &lsquo;http://earthquake.usgs.gov/&rsquo;;
    $EQ_FEATURES-&gt;baseUrl = &lsquo;&rsquo;;

    $EQ_FEATURES-&gt;items[] = array(
      &lsquo;id&rsquo; =&gt; &lsquo;item-main&rsquo;,
      &lsquo;title&rsquo; =&gt; &lsquo;Title of Main Featured Item&rsquo;,
      &lsquo;content&rsquo; =&gt; &lsquo;&lt;p&gt;Lorem ipsum dolor sit amet,
      consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/p&gt;&rsquo; .
          &lsquo;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing
          elit, sed do eiusmod tempor incididunt ut labore.&lt;/p&gt;&rsquo;,
      &lsquo;link&rsquo; =&gt; &lsquo;http://url.of.webpage/&rsquo;,
      &lsquo;modified&rsquo; =&gt; strtotime(&lsquo;2014-11-01&lsquo;),
      &lsquo;thumbnail&rsquo; =&gt; &lsquo;http://placehold.it/75x75&rsquo;,
      &lsquo;image&rsquo; =&gt; &lsquo;http://placehold.it/464x300&rsquo;
    );

    $EQ_FEATURES-&gt;items[] = array(
      &lsquo;id&rsquo; =&gt; &lsquo;item-2&rsquo;,
      &lsquo;title&rsquo; =&gt; &lsquo;Title of Second Featured Item&rsquo;,
      &lsquo;content&rsquo; =&gt; &lsquo;Lorem ipsum dolor sit amet, consectetur
      adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.&rsquo;,
      &lsquo;link&rsquo; =&gt; &lsquo;http://url.of.webpage/&rsquo;,
      &lsquo;modified&rsquo; =&gt; strtotime(&lsquo;2014-11-01&rsquo;),
      &lsquo;thumbnail&rsquo; =&gt; &lsquo;http://placehold.it/75x75&rsquo;,
      &lsquo;image&rsquo; =&gt; &lsquo;http://placehold.it/75x75&rsquo;
    );

    $EQ_FEATURES-&gt;items[] = array(
      &lsquo;id&rsquo; =&gt; &lsquo;item-3&rsquo;,
      &lsquo;title&rsquo; =&gt; &lsquo;Title of Third Featured Item&rsquo;,
      &lsquo;content&rsquo; =&gt; &lsquo;Lorem ipsum dolor sit amet, consectetur
      adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.&rsquo;,
      &lsquo;link&rsquo; =&gt; &lsquo;http://url.of.webpage/&rsquo;,
      &lsquo;modified&rsquo; =&gt; strtotime(&lsquo;2014-11-01&rsquo;),
      &lsquo;thumbnail&rsquo; =&gt; &lsquo;http://placehold.it/75x75&rsquo;,
      &lsquo;image&rsquo; =&gt; &lsquo;http://placehold.it/75x75&rsquo;
    );

      echo $EQ_FEATURES-&gt;toHtml();
    ?&gt;

  </code>
</pre>
