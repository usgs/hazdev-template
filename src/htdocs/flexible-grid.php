<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Layout/Flexible Grid';
  $NAVIGATION = true;
  $HEAD = '
  <style>
    .row > .column > div {
      margin: 16px 0 0;
      text-align: center;
    }

    .row > .column {
      white-space: nowrap;
    }

    .column > .alert {
      text-align: center;
      padding: 1em;
      font-size: 15px;
    }
  </style>
  ';

  include 'template.inc.php';
}

?>


<h2>The Grid</h2>

<p>
  The grid consists of <code>.column</code> elements inside
  <code>.row</code> containers. The column widths are defined as a
  percentage of their row containers, this is done using a
  lexicographical representation of the row percentage.
</p>

<div class="row">
  <div class="column one-of-one"><p class="alert">.one-of-one</p></div>
</div>

<div class="row">
  <div class="column one-of-two"><p class="alert">.one-of-two</p></div>
  <div class="column one-of-two"><p class="alert">.one-of-two</p></div>
</div>

<div class="row">
  <div class="column one-of-three"><p class="alert">.one-of-three</p></div>
  <div class="column one-of-three"><p class="alert">.one-of-three</p></div>
  <div class="column one-of-three"><p class="alert">.one-of-three</p></div>
</div>

<div class="row">
  <div class="column one-of-four"><p class="alert">.one-of-four</p></div>
  <div class="column one-of-four"><p class="alert">.one-of-four</p></div>
  <div class="column one-of-four"><p class="alert">.one-of-four</p></div>
  <div class="column one-of-four"><p class="alert">.one-of-four</p></div>
</div>

<div class="row">
  <div class="column one-of-five"><p class="alert">.one-of-five</p></div>
  <div class="column one-of-five"><p class="alert">.one-of-five</p></div>
  <div class="column one-of-five"><p class="alert">.one-of-five</p></div>
  <div class="column one-of-five"><p class="alert">.one-of-five</p></div>
  <div class="column one-of-five"><p class="alert">.one-of-five</p></div>
</div>

<h2>Usage</h2>
<pre>
  &lt;div class="row"&gt;
    &lt;div class="column one-of-five"&gt;&lt;p class="alert"&gt;.one-of-five&lt;/p&gt;&lt;/div&gt;
    &lt;div class="column one-of-five"&gt;&lt;p class="alert"&gt;.one-of-five&lt;/p&gt;&lt;/div&gt;
    &lt;div class="column one-of-five"&gt;&lt;p class="alert"&gt;.one-of-five&lt;/p&gt;&lt;/div&gt;
    &lt;div class="column one-of-five"&gt;&lt;p class="alert"&gt;.one-of-five&lt;/p&gt;&lt;/div&gt;
    &lt;div class="column one-of-five"&gt;&lt;p class="alert"&gt;.one-of-five&lt;/p&gt;&lt;/div&gt;
  &lt;/div&gt;
</pre>

<h2>Nested columns</h2>

<p>
  To nest your content within the grid, add a new <code>.row</code> and
  set of <code>.column</code> elements within an existing <code>.column</code>
  container.
</p>

<div class="row">
  <div class="column two-of-three">
    <div class="alert">
      .two-of-three<br/>
      <div class="row">
        <div class="column one-of-three">
          <div class="alert success no-icon">.one-of-three</div>
        </div>
        <div class="column one-of-three">
          <div class="alert success no-icon">.one-of-three</div>
        </div>
        <div class="column one-of-three">
          <div class="alert success no-icon">.one-of-three</div>
        </div>
      </div>
    </div>
  </div>
  <div class="column one-of-three">
    <div class="alert">
      .one-of-three<br/>
      <div class="row">
        <div class="column one-of-two">
          <div class="alert success no-icon">.one-of-two</div>
        </div>
        <div class="column one-of-two">
          <div class="alert success no-icon">.one-of-two</div>
        </div>
      </div>
    </div>
  </div>
</div>

<h2>Usage</h2>
<pre>
  &lt;div class="row"&gt;
    &lt;div class="column two-of-three"&gt;
      &lt;div class="alert"&gt;
        .two-of-three&lt;br/&gt;
        &lt;div class="row"&gt;
          &lt;div class="column one-of-three"&gt;
            &lt;div class="alert success no-icon"&gt;.one-of-three&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="column one-of-three"&gt;
            &lt;div class="alert success no-icon"&gt;.one-of-three&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="column one-of-three"&gt;
            &lt;div class="alert success no-icon"&gt;.one-of-three&lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="column one-of-three"&gt;
      &lt;div class="alert"&gt;
        .one-of-three&lt;br/&gt;
        &lt;div class="row"&gt;
          &lt;div class="column one-of-two"&gt;
            &lt;div class="alert success no-icon"&gt;.one-of-two&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="column one-of-two"&gt;
            &lt;div class="alert success no-icon"&gt;.one-of-two&lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</pre>

<h2>Display Columns Right-to-Left</h2>

<p>
  To display columns in right-to-left order (especially useful for mobile), use the class <code>row.right-to-left</code>.
</p>

<div class="row right-to-left">
  <div class="column two-of-three">
    <div class="alert">
      .two-of-three<br/>
    </div>
  </div>
  <div class="column one-of-three">
    <div class="alert">
      .one-of-three<br/>
    </div>
  </div>
</div>

<h2>Usage</h2>
<pre>
&lt;div class=&quot;row right-to-left&quot;&gt;
  &lt;div class=&quot;column two-of-three&quot;&gt;
    &lt;div class=&quot;alert&quot;&gt;
      .two-of-three&lt;br/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;column one-of-three&quot;&gt;
    &lt;div class=&quot;alert&quot;&gt;
      .one-of-three&lt;br/&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

<h2>Transitioning columns</h2>

<p>
  Large screens see a <code>.one-of-four</code> layout, while small screens
  get a <code>.mobile-one-of-two</code> layout. For small screens the same
  four elements layout in a two-up grid.
</p>

<div class="row">
  <div class="column one-of-four mobile-one-of-two">
    <div class="alert info no-icon">.one-of-four<br/>.mobile-one-of-two</div>
  </div>
  <div class="column one-of-four mobile-one-of-two">
    <div class="alert info no-icon">.one-of-four<br/>.mobile-one-of-two</div>
  </div>
  <div class="column one-of-four mobile-one-of-two">
    <div class="alert info no-icon">.one-of-four<br/>.mobile-one-of-two</div>
  </div>
  <div class="column one-of-four mobile-one-of-two">
    <div class="alert info no-icon">.one-of-four<br/>.mobile-one-of-two</div>
  </div>
</div>

<p>
  Large screens see a <code>.five-up</code> layout, while small screens
  get a <code>.mobile-three-up</code> layout. For small screens the same
  five elements layout in a three-up grid.
</p>

<div class="row mobile-three-up five-up">
  <div class="column">
    <div class="alert info no-icon">.five-up<br/>.mobile-three-up</div>
  </div>
  <div class="column">
    <div class="alert info no-icon">.five-up<br/>.mobile-three-up</div>
  </div>
  <div class="column">
    <div class="alert info no-icon">.five-up<br/>.mobile-three-up</div>
  </div>
  <div class="column">
    <div class="alert info no-icon">.five-up<br/>.mobile-three-up</div>
  </div>
  <div class="column">
    <div class="alert info no-icon">.five-up<br/>.mobile-three-up</div>
  </div>
</div>

<h2>Usage</h2>
<pre>
  &lt;div class="row"&gt;
    &lt;div class="column one-of-four mobile-one-of-two"&gt;
      &lt;div class="alert info no-icon"&gt;.one-of-four&lt;br/&gt;.mobile-one-of-two&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="column one-of-four mobile-one-of-two"&gt;
      &lt;div class="alert info no-icon"&gt;.one-of-four&lt;br/&gt;.mobile-one-of-two&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="column one-of-four mobile-one-of-two"&gt;
      &lt;div class="alert info no-icon"&gt;.one-of-four&lt;br/&gt;.mobile-one-of-two&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="column one-of-four mobile-one-of-two"&gt;
      &lt;div class="alert info no-icon"&gt;.one-of-four&lt;br/&gt;.mobile-one-of-two&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</pre>
