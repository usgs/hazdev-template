<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Typography';
	$NAVIGATION = true;

	$HEAD = '
		<style>
			pre {
				white-space: pre-wrap;
				white-space: -moz-pre-wrap;
				white-space: -o-pre-wrap;
				background: #f6f6f6;
				color:#666;
				font-size:14px;
				font-family:monospace;
			}

			.code {
				display: block;
				padding: 0.5em 1em;
				border: 1px solid #ededed;
			}

		</style>
	';
	$FOOT = '<script src="js/index.js"></script>';

	include('template.inc.php');
}

?>

<p>This page gives examples of different header sizes and styles.</p>


<h2 class="underline">Headers and Line Height</h2>

<h1>h1 Header</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisici<strong>*</strong> g elit,
sed do eius<strong>*</strong> od tempor<strong>*</strong> incididunt ut labore
et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>
<p>
aliquip ex ea commodo consequat. Duis aute irure dolor
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>

<h2>h2 Header</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipisici<strong>*</strong> g elit,
sed do eius<strong>*</strong> od tempor<strong>*</strong> incididunt ut labore
et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>

<h3>h3 Header</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipisici<strong>*</strong> g elit,
sed do eius<strong>*</strong> od tempor<strong>*</strong> incididunt ut labore
et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>

<h4>h4 Header</h4>
<p>
Lorem ipsum dolor sit amet, consectetur adipisici<strong>*</strong> g elit,
sed do eius<strong>*</strong> od tempor<strong>*</strong> incididunt ut labore
et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>

<h5>h5 Header</h5>
<p>
Lorem ipsum dolor sit amet, consectetur adipisici<strong>*</strong> g elit,
sed do eius<strong>*</strong> od tempor<strong>*</strong> incididunt ut labore
et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>


<h2 class="underline">Nested Headers</h2>

<p>
	This is an example of what happens when you nest headers inside
	&lt;div&gt; tags.
</p>

<pre class="code">
&lt;h1&gt;h1 Header&lt;/h1&gt;
&lt;div&gt;
	&lt;h1&gt;h1 Header&lt;/h1&gt;
	&lt;div&gt;
		&lt;h1&gt;h1 Header&lt;/h1&gt;
		&lt;div&gt;
			&lt;h1&gt;h1 Header&lt;/h1&gt;
			&lt;div&gt;
				&lt;h1&gt;h1 Header&lt;/h1&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>

<h1>h1 Header</h1>
<div>
	<h1>h1 Header</h1>
	<div>
		<h1>h1 Header</h1>
		<div>
			<h1>h1 Header</h1>
			<div>
				<h1>h1 Header</h1>
			</div>
		</div>
	</div>
</div>