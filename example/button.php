<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Buttons';
	$NAVIGATION = true;

	$HEAD = '
			<style>
				.buttons button {
					min-width:80px;
				}
			</style>
	';

	include 'template.inc.php';
}
?>

<section class="buttons">
<p>
	Here are some examples of default styles for buttons, and also some examples
	of class modifiers you can use for a consistent look with common button usage.
</p>
<h2 class="subheading">Example 1</h2>
<p>
	This is the default style applied to all buttons, it also displays the disabled state. The disabled state can be set using the disabled attribute or by applying the class <code>.disabled</code>.
</p>
<button>Enabled</button>
<br>
<button disabled="true">Disabled</button>
<h2 class="subheading">Usage</h2>
<pre><code>&lt;button&gt;Enabled&lt;button&gt;
&lt;button disabled="true"&gt;Disabled&lt;button&gt;
</code></pre>


<h2 class="subheading">Example 2</h2>
<p>
	When color styles are applied to buttons the disabled state does not
	inherit the background color.
</p>
<button class="green">Yes</button>
<button>No</button>
<br>
<button class="green" disabled="true">Yes</button>
<button disabled="true">No</button>
<h2 class="subheading">Usage</h2>
<pre><code>&lt;button class="green"&gt;Yes&lt;button&gt;
&lt;button&gt;No&lt;button&gt;
&lt;br&gt;
&lt;button class="green" disabled="true"&gt;Yes&lt;button&gt;
&lt;button disabled="true"&gt;No&lt;button&gt;
</code></pre>

<h2 class="subheading">Example 3</h2>
<p>
	There are two classes that can be applied to buttons for use with a yes/no
	type of response. These classes are <code>.confirm</code> and
	<code>.cancel</code> and they add an icon to the button.
</p>
<button class="green confirm">Yes</button>
<button class="cancel">No</button>
<br>
<button class="green confirm" disabled="true">Yes</button>
<button class="cancel" disabled="true">No</button>
<h2 class="subheading">Usage</h2>
<pre><code>&lt;button class="confirm green"&gt;Yes&lt;button&gt;
&lt;button class="cancel"&gt;No&lt;button&gt;
&lt;br&gt;
&lt;button class="confirm green" disabled="true"&gt;Yes&lt;button&gt;
&lt;button class="cancel" disabled="true"&gt;No&lt;button&gt;
</code></pre>

<h2 class="subheading">Example 4</h2>
<p>
	There are five predefined colors that can be applied to buttons. If you add
	the class <code>.red</code>, <code>.orange</code>, <code>.yellow</code>,
	<code>.green</code>, or <code>.blue</code>, then the button will be styled
	with that color scheme. 
</p>
<button class="red">Red</button>
<button class="orange">Orange</button>
<button class="yellow">Yellow</button>
<button class="green">Green</button>
<button class="blue">Blue</button>
<br>
<button class="red" disabled="true">Red</button>
<button class="orange" disabled="true">Orange</button>
<button class="yellow" disabled="true">Yellow</button>
<button class="green" disabled="true">Green</button>
<button class="blue" disabled="true">Blue</button>
</section>
<h2 class="subheading">Usage</h2>
<pre><code>&lt;button class="red"&gt;Red&lt;button&gt;
&lt;button class="orange"&gt;Orange&lt;button&gt;
&lt;button class="yellow"&gt;Yellow&lt;button&gt;
&lt;button class="green"&gt;Green&lt;button&gt;
&lt;button class="blue"&gt;Blue&lt;button&gt;
&lt;br&gt;
&lt;button class="red" disabled="true"&gt;Red&lt;button&gt;
&lt;button class="orange" disabled="true"&gt;Orange&lt;button&gt;
&lt;button class="yellow" disabled="true"&gt;Yellow&lt;button&gt;
&lt;button class="green" disabled="true"&gt;Green&lt;button&gt;
&lt;button class="blue" disabled="true"&gt;Blue&lt;button&gt;
</code></pre>