<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Test Index';
	$NAVIGATION = true;

	include 'template.inc.php';

}
?>

<style>

	.buttons button {
		min-width:80px;
	}

	.confirm {
		color:#fff;
		background:#2EA96A;
		text-shadow:0 1px 1px rgba(0,0,0,0.6);
		border-color:#0C7C42;
		border-color:#108B4C;
	}

	.confirm.icon:after {
		content:'\2713';
	}

	.cancel {
		color:#fff;
		background:#C7351F;
		text-shadow:0 1px 1px rgba(0,0,0,0.6);
		border-color:#7E1000;
		border-color:#961300;
	}

	.cancel.icon:after {
		content:'x';
		font-weight:bold;
	}

	.icon:after {
		position:relative;
		border-left:1px solid rgba(0,0,0,0.2);
		margin-left:1em;
		padding-left:1em;
	}

</style>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<section class="buttons">
<h2>Buttons</h2>
<p>
	Here are some examples of default styles for buttons, and also some examples
	of class modifiers you can use for a consistent look with common button usage.
</p>
<h3 class="subheading">Example 1</h3>
<button type="submit" disabled>Disabled</button>
<button type="submit">Click Me!</button>

<h3 class="subheading">Example 2</h3>
<button class="confirm" type="submit">Yes</button>
<button class="cancel" type="submit">No</button>

<h3 class="subheading">Example 3</h3>
<button class="confirm icon" type="submit">Confirm</button>
<button class="cancel icon" type="submit">Cancel</button>
</section>
