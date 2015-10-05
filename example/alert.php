<?php

	if (!isset($TEMPLATE)) {
		$TITLE = 'Alerts';
		$NAVIGATION = true;

		$HEAD = '
			<style>
				div.help {
					width: 2em;
					height: 2em;
					text-align: center;
					font-weight: bold;
					border-radius: 1em;
					line-height: 2em;
					padding: 0;
				}

				dl.example > dd {
					margin-bottom: 1em;
				}

				input.error:focus {
					background: #fff;
					color: #555;
					border: 1px solid #d8d8d8;
				}
			</style>

			<link rel="stylesheet" href="/theme/css/alert.css"/>
		';

		include 'template.inc.php';
	}
?>

<p>
	It is suggested that alert classes are added on <code>&lt;p&gt;</code>
	tags. This way the element will inherit a top/bottom margin.
</p>
<h3 class="subheading">Example 1</h3>
<p class="alert">
	To indicate additional information add the <code>.alert</code> class.
</p>
<p class="alert info">
	To emphasize important information add the <code>.alert .info</code>
	classes.
</p>
<p class="alert info remove-icon">
	To remove info icon add the <code>.remove-icon</code> class.
</p>
<p class="alert success">
	To indicate success or a positive message add the
	<code>.alert .success</code> classes.
</p>
<p class="alert success remove-icon">
	To remove success icon add the <code>.remove-icon</code> class.
</p>
<p class="alert warning">
	To highlight a message containing a warning add the
	<code>.alert .warning</code> classes.
</p>
<p class="alert warning remove-icon">
	To remove warning icon add the <code>.remove-icon</code> class.
</p>
<p class="alert error">
	To highlight a message containing an error add the
	<code>.alert .error</code> classes.
</p>
<p class="alert error remove-icon">
	To remove error icon add the <code>.remove-icon</code> class.
</p>

<div class="alert info">
	<h3>Header</h3>
	<p>
		Multiple lines of text Lorem ipsum dolor sit amet, consectetur adipiscing
		elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
		enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
		aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
		voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
		occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
		anim id est laborum.
	</p>
</div>

<h3 class="subheading">Header Usage</h3>
<pre>
<code>&lt;div class="alert info"&gt;
 &lt;h3&gt;&hellip;&lt;/h3&gt;
 &lt;p&gt;&hellip;&lt;/p&gt;
&lt;/div&gt;
</code></pre>

<h3 class="subheading">Usage</h3>
<pre>
<code>&lt;p class="alert"&gt;&hellip;&lt;/p&gt;
&lt;p class="alert info"&gt;&hellip;&lt;/p&gt;
&lt;p class="alert success"&gt;&hellip;&lt;/p&gt;
&lt;p class="alert warning"&gt;&hellip;&lt;/p&gt;
&lt;p class="alert error"&gt;&hellip;&lt;/p&gt;</code>
</pre>
