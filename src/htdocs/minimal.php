<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Minimal Template Example';
  $HEAD = '
    <style>
      code,
      pre {
        background: #f8f8f8;
        border-radius: 3px;
        color: #555;
        font-family: monospace;
      }
    </style>
  ';
  include 'minimal.inc.php';
}

?>

<h1>Minimal Template Example</h1>

<p>
  The minimal template generates content similarly to the regular template,
  but ignores site configuration and outputs only a basic HTML structure.
</p>

<h2>Supported Variables</h2>
<dl>
  <dt><code>$FOOT</code></dt>
  <dd>
    Javascript and other markup output at the end of the
    <code>&lt;body&gt;</code> element.
  </dd>

  <dt><code>$HEAD</code></dt>
  <dd>
    Stylesheets and other markup output at the end of the
    <code>&lt;head&gt;</code> element.
  </dd>

  <dt><code>$TITLE</code></dt>
  <dd>
    Content for the <code>&lt;title&gt;</code> element; unlike the regular
    template, no <code>&lt;h1&gt;</code> element is output.
  </dd>
</dl>


<h2>Example Usage</h2>
<pre><code>&lt;?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Page Title';
    include 'minimal.inc.php';
  }
?>
&lt;!-- content goes here --&gt;</code></pre>
