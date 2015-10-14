<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Icons';

  $HEAD = '
    <link rel="stylesheet" ' .
        'href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <style>
      .icon-wrapper {
        float: left;
        overflow: hidden;
        margin: 0 1em 1em 0;
        width: 20%;
        min-width: 200px;
      }
      .icon-wrapper > i {
        border-radius: 2px;
        float: left;
        margin-right: .5em;
        background-color: #f0f0f0;
        padding: .25em;
      }
      .icon-wrapper > aside {
        float: left;
      }
      .icon-name, .icon-index {
        display: block;
        font-size: .8em;
      }
      .icon-name {
        font-weight: bold;
        color: #555;
      }
      .icon-index {
        color: #666;
      }
    </style>
  ';
  $NAVIGATION = true;

  $icons = array(
    'add' => 'e145',
    'add_circle' => 'e147',
    'add_circle_outline' => 'e148',
    'arrow_back' => 'e5c4',
    'arrow_forward' => 'e5c8',
    'block' => 'e14b',
    'cancel' => 'e5c9',
    'check' => 'e5ca',
    'check_circle' => 'e86c',
    'chevron_left' => 'e5cb',
    'chevron_right' => 'e5cc',
    'close' => 'e5cd',
    'delete' => 'e872',
    'edit' => 'e3c9',
    'email' => 'e0be',
    'error' => 'e000',
    'error_outline' => 'e001',
    'expand_less' => 'e5ce',
    'expand_more' => 'e5cf',
    'explore' => 'e87a',
    'fast_forward' => 'e01f',
    'fast_rewind' => 'e020',
    'file_download' => 'e2c4',
    'file_upload' => 'e2c6',
    'flag' => 'e153',
    'fullscreen' => 'e5d0',
    'fullscreen_exit' => 'e5d1',
    'gps_fixed' => 'e1b3',
    'help' => 'e887',
    'help_outline' => 'e8fd',
    'highlight_off' => 'e888',
    'history' => 'e889',
    'home' => 'e88a',
    'info' => 'e88e',
    'info_outline' => 'e88f',
    'layers' => 'e53b',
    'list' => 'e896',
    'map' => 'e55b',
    'menu' => 'e5d2',
    'my_location' => 'e55c',
    'notifications' => 'e7f4',
    'notifications_none' => 'e7f5',
    'pause' => 'e034',
    'place' => 'e55f',
    'play_arrow' => 'e037',
    'print' => 'e8ad',
    'public' => 'e80b',
    'refresh' => 'e5d5',
    'remove' => 'e15b',
    'remove_circle' => 'e15c',
    'remove_circle_outline' => 'e15d',
    'save' => 'e161',
    'schedule' => 'e8b5',
    'search' => 'e8b6',
    'settings' => 'e8b8',
    'share' => 'e80d',
    'skip_next' => 'e044',
    'skip_previous' => 'e045',
    'smartphone' => 'e32c',
    'star' => 'e838',
    'star_border' => 'e83a',
    'stop' => 'e047',
    'today' => 'e8df',
    'warning' => 'e002',
    'zoom_in' => 'e8ff',
    'zoom_out' => 'e900'
  );

  if (!function_exists('getExample')) {
    function getExample ($index, $name) {
      return '<li class="icon-wrapper example-' . $name . '">
        <i class="material-icons">' . $name . '</i>
        <aside>
          <span class="icon-name">' . $name . '</span>
          <span class="icon-index">&amp;#' . $index . ';</span>
        </aside>
      </li>';
    }
  }

  include_once 'template.inc.php';
}
?>

<p>
  As a general rule, the hazdev-template has chosen to incorporate the <a
  href="https://www.google.com/design/icons/">material icon font</a> pack when
  icons are required. A <a
  href="http://google.github.io/material-design-icons/">complete implementation
  guide</a> can be used as a reference for optimal usage and styling. Below are
  instructions for incorporating the fonts into projects already using the
  hazdev-template as well as a few examples.
</p>

<h2>Usage</h2>
<p>
  Include the stylesheet in the document <code>HEAD</code> section. This will
  tell the browser to download the web font used by the icons as well as
  classes/styles with canonical references to each font size.
</p>
<pre><code>$HEAD = '&lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/&gt;';</code></pre>

<p>
  Place icons on the page using the <code>material-icons</code> class on an
  element with content indicating the name of the icon to display.
</p>
<pre><code>&lt;i class="material-icons"&gt;face&lt;/i&gt;</code></pre>

<p>
  While all browsers supported by the hazdev-template have support for font
  ligatures, for maximum compatibility, you may want to use the numeric
  character index instead of the character name, like so:
</p>
<pre><code>&lt;i class="material-icons"&gt;&amp;#xe87c;&lt;/i&gt;</code></pre>

<p>
  Result: <i class="material-icons">face</i>
</p>

<h2>More Examples</h2>

<p>
  Below are selected examples chosen for consistency across pages/applications
  within the template. The full set of icons are available if desired. Icons
  are listed alphabetically by name left-to-right, top-to-bottom.
</p>

<ul class="no-style">
  <?php
  foreach ($icons as $name => $index) {
    print getExample($index, $name);
  }
  ?>
</ul>
