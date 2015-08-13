<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Lists';
    $NAVIGATION = true;

    include 'template.inc.php';
  }
?>

<p>
  The following gives you an example of <code>&lt;ul&gt;</code> and <code>&lt;ol&gt;</code> lists.
</p>

<h2>Ordered List</h2>
<ol>
  <li>Item 1</li>
  <li>Item 2
    <ol>
      <li>Item 1</li>
      <li>Item 2
      <ol>
        <li>Item 1</li>
        <li>Item 2</li>
      </ol>
      </li>
    </ol>
  </li>
  <li>Item 3</li>
  <li>Item 4</li>
</ol>
<h3>Usage</h3>
<pre><code>&lt;ol&gt;
  &lt;li&gt;Item 1&lt;/li&gt;
  &lt;li&gt;Item 2
    &lt;ol&gt;
      &lt;li&gt;Item 1&lt;/li&gt;
      &lt;li&gt;Item 2
        &lt;ol&gt;
          &lt;li&gt;Item 1&lt;/li&gt;
          &lt;li&gt;Item 2&lt;/li&gt;
        &lt;/ol&gt;
      &lt;/li&gt;
    &lt;/ol&gt;
  &lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h2>Unordered List</h2>
<ul>
  <li>Item 1</li>
  <li>Item 2
    <ul>
      <li>Item 1</li>
      <li>Item 2
      <ul>
        <li>Item 1</li>
        <li>Item 2</li>
      </ul>
      </li>
    </ul>
  </li>
  <li>Item 3</li>
  <li>Item 4</li>
</ul>
<h3>Usage</h3>
<pre><code>&lt;ul&gt;
  &lt;li&gt;Item 1&lt;/li&gt;
  &lt;li&gt;Item 2
    &lt;ul&gt;
      &lt;li&gt;Item 1&lt;/li&gt;
      &lt;li&gt;Item 2
        &lt;ul&gt;
          &lt;li&gt;Item 1&lt;/li&gt;
          &lt;li&gt;Item 2&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<h2>Unstyled List</h2>
<p>
  Adding the class <code>.no-style</code> to a <code>ul</code> or
  <code>ol</code> list will remove padding from the list and remove bullets.
  The class <code>.no-style</code> only applies to direct descendants, and
  must be repeated for nested lists.
</p>
<ul class="no-style">
  <li>Item 1</li>
  <li>Item 2
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
    </ul>
  </li>
  <li>Item 3</li>
  <li>Item 4</li>
</ul>
<h3>Usage</h3>
<pre><code>&lt;ul class="no-style"&gt;
  &hellip;
&lt;/ul&gt;
</code></pre>

<h2>Separated List</h2>
<p>
  Adding the class <code>.separator</code> to a <code>ul</code> or
  <code>ol</code> list will add a border-bottom between list items.
  The class <code>.separator</code> only applies to direct descendants, and
  must be repeated for nested lists.
</p>
<ul class="no-style separator">
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
  <li>Item 4</li>
</ul>
<h3>Usage</h3>
<pre><code>&lt;ul class="no-style separator"&gt;
  &hellip;
&lt;/ul&gt;
</code></pre>

<h2>Link List</h2>

<ul class="linklist">
  <li>
    <a href="#1">
      <h4>This is a link</h4>
    </a>
    <p>Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris
      magna augue, fringilla et felis eget.</p>
  </li>
  <li>
    <a href="#2">
      <h4>This is a longer link</h4>
    </a>
    <p>Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam ut
      lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut vitae
      metus et quam rutrum varius sit amet sit amet lectus. Suspendisse rhoncus
      nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean sed nunc
      nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla
      et felis eget, commodo consequat sem.</p>
  </li>
</ul>

<h3>Usage</h3>

<pre>
  <code>
&lt;ul class="linklist"&gt;
  &lt;li&gt;
    &lt;a&gt;
      &lt;h4&gt;&lt;/h4&gt; (or h3, h5)
    &lt;/a&gt;
    &lt;p&gt;&lt;/p&gt;
  &lt;/li&gt;
  &hellip;
&lt;/ul&gt;
  </code>
</pre>

<h2>Image List</h2>

<p>Suggested width for images is either 75px or 150px for consistency. Also
  optimized, retina (2x) images are recommended for thumbnail images in image
  lists.</p>

<ul class="linklist">
  <li>
    <a href="#1">
      <h4>This is a link</h4>
      <img src="http://placehold.it/150x150" alt="Placeholder image">
    </a>
    <p>Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris
      magna augue, fringilla et felis eget.</p>
  </li>
  <li>
    <a href="#2">
      <h4>This is a longer link</h4>
      <img src="http://placehold.it/150x150" alt="Placeholder image">
    </a>
    <p>Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam ut
      lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut vitae
      metus et quam rutrum varius sit amet sit amet lectus. Suspendisse rhoncus
      nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean sed nunc
      nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla
      et felis eget, commodo consequat sem.</p>
  </li>
</ul>

<h3>Usage</h3>

<pre>
  <code>
&lt;ul class="linklist"&gt;
  &lt;li&gt;
    &lt;a&gt;
      &lt;h4&gt;&lt;/h4&gt; (or h3, h5)
      &lt;img /&gt;
    &lt;/a&gt;
    &lt;p&gt;&lt;/p&gt;
  &lt;/li&gt;
  &hellip;
&lt;/ul&gt;
  </code>
</pre>

<h2>Definition Lists</h2>
<p>
  A description list defines terms and their corresponding descriptions.
</p>
<h3>Default Styles</h3>
<dl>
  <dt>This is a longer definition term</dt>
  <dd>
    Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam
    ut lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut
    vitae metus et quam rutrum varius sit amet sit amet lectus. Suspendisse
    rhoncus nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean
    sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue,
    fringilla et felis eget, commodo consequat sem.
  </dd>
  <dt>This is a term</dt>
  <dd>
    Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna
    augue, fringilla et felis eget.
  </dd>
  <dt>This is a term that overflows</dt>
  <dd>
    Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna
    augue, fringilla et felis eget.
  </dd>
</dl>
<h3>Usage</h3>
<pre>
<code>&lt;dl&gt;
  &lt;dt&gt;&lt;/dt&gt;
  &lt;dd&gt;&lt;/dd&gt;
  &hellip;
&lt;/dl&gt;</code>
</pre>
<h3>Vertical Definition List</h3>
<p>
  Add the <code>.vertical</code> class to display terms and definitions stacked
  vertically. This must be reapplied to nested definition lists to apply.
</p>
<dl class="vertical">
  <dt>This is a longer definition term</dt>
  <dd>
    Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam
    ut lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut
    vitae metus et quam rutrum varius sit amet sit amet lectus. Suspendisse
    rhoncus nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean
    sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue,
    fringilla et felis eget, commodo consequat sem.
  </dd>
  <dt>This is a term</dt>
  <dd>
    Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna
    augue, fringilla et felis eget.
  </dd>
  <dt>This is a term that overflows</dt>
  <dd>
    Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna
    augue, fringilla et felis eget.
  </dd>
</dl>
<h3>Usage</h3>
<pre>
<code>&lt;dl class="vertical"&gt;
  &lt;dt&gt;&lt;/dt&gt;
  &lt;dd&gt;&lt;/dd&gt;
  &hellip;
&lt;/dl&gt;</code>
</pre>
<h3 class="subheading">Horizontal Definition List</h3>
<p>
  Add the <code>.horizontal</code> class to display terms and definitions side
  by side. On mobile devices the horizontal definition list collapses, it does
  not layout horizontally. The <code>dt</code> element is given a width of
  10em by default, but is styled with text-overflow ellipsis.
</p>
<dl class="horizontal">
  <dt>This is a longer definition term</dt>
  <dd>
    Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam
    ut lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut
    vitae metus et quam rutrum varius sit amet sit amet lectus. Suspendisse
    rhoncus nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean
    sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue,
    fringilla et felis eget, commodo consequat sem.
  </dd>
  <dt>This is a term</dt>
  <dd>
    Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna
    augue, fringilla et felis eget.
  </dd>
  <dt>This is a term that overflows</dt>
  <dd>
    Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna
    augue, fringilla et felis eget.
  </dd>
</dl>
<h3>Usage</h3>
<pre>
<code>&lt;dl class="horizontal"&gt;
  &lt;dt&gt;&lt;/dt&gt;
  &lt;dd&gt;&lt;/dd&gt;
  &hellip;
&lt;/dl&gt;</code>
</pre>
