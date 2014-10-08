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
<h3 class="subheading">Example 1</h3>
<button type="submit">Enabled</button>
<br>
<button type="submit" disabled>Disabled</button>

<h3 class="subheading">Example 2</h3>
<button class="green" type="submit">Yes</button>
<button type="submit">No</button>
<br>
<button class="green" type="submit" disabled>Yes</button>
<button type="submit" disabled>No</button>

<h3 class="subheading">Example 3</h3>
<button class="green confirm" type="submit">Yes</button>
<button class="cancel" type="submit">No</button>
<br>
<button class="green confirm" type="submit" disabled>Yes</button>
<button class="cancel" type="submit" disabled>No</button>

<h3 class="subheading">Example 4</h3>
<button class="red" type="submit">Red</button>
<button class="orange" type="submit">Orange</button>
<button class="yellow" type="submit">Yellow</button>
<button class="green" type="submit">Green</button>
<button class="blue" type="submit">Blue</button>
<br>
<button class="red" type="submit" disabled>Red</button>
<button class="orange" type="submit" disabled>Orange</button>
<button class="yellow" type="submit" disabled>Yellow</button>
<button class="green" type="submit" disabled>Green</button>
<button class="blue" type="submit" disabled>Blue</button>
</section>