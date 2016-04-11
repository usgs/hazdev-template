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
  'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>' .
      '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>',
  'link' => '',
  'modified' => strtotime('2014-11-01'),
  'thumbnail' => 'http://placehold.it/75x75',
  'image' => 'http://placehold.it/464x300'
);

$EQ_FEATURES->items[] = array(
  'id' => 'item-2',
  'title' => 'Title of Second Featured Item',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
  'link' => '',
  'modified' => strtotime('2014-11-01'),
  'thumbnail' => 'http://placehold.it/75x75',
  'image' => 'http://placehold.it/75x75'
);

$EQ_FEATURES->items[] = array(
  'id' => 'item-3',
  'title' => 'Title of Third Featured Item',
  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
  'link' => '',
  'modified' => strtotime('2014-11-01'),
  'thumbnail' => 'http://placehold.it/75x75',
  'image' => 'http://placehold.it/75x75'
);

  echo $EQ_FEATURES->toHtml();
?>

<h2>Usage</h2>
<p>In the index.php file to include the featured items, include this code at the top just below the "template" code:</p>

<pre>
  <code>
    &lt;?php
      include_once &apos;_features.inc.php&apos;;
      echo $EQ_FEATURES-&gt;toHtml();
    ?&gt;
  </code>
</pre>

<p>
  In the directory of the index.php file for which you want to include the featured items, create a _features.inc.php file like this:
</p>
<pre>
  <code>
    &lt;?php
    if (!isset($TEMPLATE)) {
      $TITLE = &apos;Featured Items&apos;;
      include &apos;template.inc.php&apos;;
    }

    include_once &apos;Features.class.php&apos;;

    date_default_timezone_set(&apos;UTC&apos;);

    $EQ_FEATURES = new Features();
    $EQ_FEATURES-&gt;id = &apos;usgs_program_name_section&apos;;
    $EQ_FEATURES-&gt;title = &apos;Featured Items&apos;;
    $EQ_FEATURES-&gt;author = &apos;U.S. Geological Survey&apos;;
    $EQ_FEATURES-&gt;siteUrl = &apos;http://earthquake.usgs.gov/&apos;;
    $EQ_FEATURES-&gt;baseUrl = &apos;&apos;;

    $EQ_FEATURES-&gt;items[] = array(
      &apos;id&apos; =&gt; &apos;item-main&apos;,
      &apos;title&apos; =&gt; &apos;Title of Main Featured Item&apos;,
      &apos;content&apos; =&gt; &apos;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/p&gt;&apos; .
          &apos;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.&lt;/p&gt;&apos;,
      &apos;link&apos; =&gt; &apos;&apos;,
      &apos;modified&apos; =&gt; strtotime(&apos;2014-11-01&apos;),
      &apos;thumbnail&apos; =&gt; &apos;http://placehold.it/75x75&apos;,
      &apos;image&apos; =&gt; &apos;http://placehold.it/464x300&apos;
    );

    $EQ_FEATURES-&gt;items[] = array(
      &apos;id&apos; =&gt; &apos;item-2&apos;,
      &apos;title&apos; =&gt; &apos;Title of Second Featured Item&apos;,
      &apos;content&apos; =&gt; &apos;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&apos;,
      &apos;link&apos; =&gt; &apos;&apos;,
      &apos;modified&apos; =&gt; strtotime(&apos;2014-11-01&apos;),
      &apos;thumbnail&apos; =&gt; &apos;http://placehold.it/75x75&apos;,
      &apos;image&apos; =&gt; &apos;http://placehold.it/75x75&apos;
    );

    $EQ_FEATURES-&gt;items[] = array(
      &apos;id&apos; =&gt; &apos;item-3&apos;,
      &apos;title&apos; =&gt; &apos;Title of Third Featured Item&apos;,
      &apos;content&apos; =&gt; &apos;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&apos;,
      &apos;link&apos; =&gt; &apos;&apos;,
      &apos;modified&apos; =&gt; strtotime(&apos;2014-11-01&apos;),
      &apos;thumbnail&apos; =&gt; &apos;http://placehold.it/75x75&apos;,
      &apos;image&apos; =&gt; &apos;http://placehold.it/75x75&apos;
    );

      echo $EQ_FEATURES-&gt;toHtml();
    ?&gt;

  </code>
</pre>
