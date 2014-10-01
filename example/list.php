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

<h3 class="subheading">Ordered List</h3>
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
<h3 class="subheading">Usage</h3>
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

<h3 class="subheading">Unordered List</h3>
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
<h3 class="subheading">Usage</h3>
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


<h3 class="subheading">Unstyled List</h3>
<p>
	Adding the class <code>.unstyled</code> to a <code>ul</code> or
	<code>ol</code> list will remove padding from the list and remove bullets.
	The class <code>.unstyled</code> only applies to direct descendants, and
	must be repeated for nested lists.
</p>
<ul class="unstyled">
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
<h3 class="subheading">Usage</h3>
<pre><code>&lt;ul class="unstyled"&gt;
	&hellip;
&lt;/ul&gt;
</code></pre>

<h3 class="subheading">Separated List</h3>
<p>
	Adding the class <code>.separator</code> to a <code>ul</code> or
	<code>ol</code> list will add a border-bottom between list items.
	The class <code>.separator</code> only applies to direct descendants, and
	must be repeated for nested lists.
</p>
<ul class="unstyled separator">
	<li>Item 1</li>
	<li>Item 2</li>
	<li>Item 3</li>
	<li>Item 4</li>
</ul>
<h3 class="subheading">Usage</h3>
<pre><code>&lt;ul class="unstyled separator"&gt;
	&hellip;
&lt;/ul&gt;
</code></pre>


<h2>Definition Lists</h2>
<p>
	A description list defines terms and their corresponding descriptions.
</p>
<h3 class="subheading">Default Styles</h3>
<dl>
	<dt>This is a longer definition term</dt>
	<dd>Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam ut lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut vitae metus et quam rutrum varius sit amet sit amet lectus. Suspendisse rhoncus nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla et felis eget, commodo consequat sem.</dd>
	<dt>This is a term</dt>
	<dd>Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla et felis eget.</dd>
	<dt>This is a term</dt>
	<dd>Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla et felis eget.</dd>
</dl>
<h3 class="subheading">Usage</h3>
<pre>
<code>
	&lt; TODO:: add code sample.&gt;
</code>
</pre>
<h3 class="subheading">Horizontal Definition List</h3>
<p>Add the <code>.horizontal</code> class to display terms and definitions side by side.</p>
<dl class="horizontal">
	<dt>This is a longer definition term</dt>
	<dd>Integer hendrerit risus tellus, non varius quam elementum ac. Aliquam ut lectus nulla. Maecenas tincidunt ligula quis augue rhoncus mattis. Ut vitae metus et quam rutrum varius sit amet sit amet lectus. Suspendisse rhoncus nibh eu placerat blandit. Pellentesque quis mollis leo. Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla et felis eget, commodo consequat sem.</dd>
	<dt>This is a term</dt>
	<dd>Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla et felis eget.</dd>
	<dt>This is a term that overflows</dt>
	<dd>Aenean sed nunc nec diam dictum tempus. Sed quis arcu leo. Mauris magna augue, fringilla et felis eget.</dd>
</dl>
<h3 class="subheading">Usage</h3>
<pre>
<code>
	&lt; TODO:: add code sample.&gt;
</code>
</pre>
