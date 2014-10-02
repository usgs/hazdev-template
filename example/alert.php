<?php 

	if (!isset($TEMPLATE)) {
		$TITLE = 'Alerts';
		$NAVIGATION = true;

		$HEAD = '
			<style>
				.help {
					width: 2em;
					height: 2em;
					text-align: center;
					font-weight: bold;
					border-radius: 1em;
					line-height: 2em;
					padding: 0;
				}

				.example > dd {
					margin-bottom: 1em;
				}

				input.alert:focus {
					background: #fff;
					color: #555;
					border: 1px solid #d8d8d8;
				}
			</style>
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
<p class="alert success">
	To indicate success or a positive message add the
	<code>.alert .success</code> classes.
</p>
<p class="alert warning">
	To highlight a message containing a warning add the
	<code>.alert .warning</code> classes.
</p>
<p class="alert error">
	To highlight a message containing an error add the
	<code>.alert .error</code> classes.
</p>
<h3 class="subheading">Usage</h3>
<pre>
<code>
	&lt; TODO:: add code sample.&gt;
</code>
</pre>



<h3 class="subheading">Example 2</h3>
<p>
	The alert classes <code>info</code>, <code>success</code>,
	<code>warning</code>, and <code>error</code>, can be applied to
	any HTML elements.
</p>
<dl class="horizontal example">
	<dt>Input Elements</dt>
	<dd>
		<input id="input-field" type="text" class="alert error" value="Error state">
	</dd>
	<dt>Span Elements</dt>
	<dd>
		<span class="alert info">
			This text is inside a <code>&lt;span&gt;</code> tag styled with
			<code>.alert .info</code>
		</span>
	</dd>
	<dt>Div Elements</dt>
	<dd>
		<div class="alert success help">&#10003;</div>
	</dd>
</dl>
<h3 class="subheading">Usage</h3>
<pre>
<code>
	&lt; TODO:: add code sample.&gt;
</code>
</pre>