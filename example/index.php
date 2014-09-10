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

	.confirm.icon:after {
		content:'\2713';
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

	hr {
		margin:25px 0;
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


<hr class="article-divider" />


<h2>Forms</h2>
<p>
	The inputs, labels, and other form elements on a form are stacked
	when the <code>.stacked</code> class is applied to the container.
<h3 class="subheading">Example 1</h3>
<form class="form stacked">

	<!-- Label and text input -->
	<label for="regularInput">Regular Input</label>
	<input type="text" id="regularInput" placeholder="Placeholder Text"/>

	<!-- Label and textarea -->
	<label for="regularTextarea">Regular Textarea</label>
	<textarea id="regularTextarea"></textarea>

	<!-- Label and select list -->
	<label for="selectList">Select List</label>
	<select id="selectList">
		<option value="Option 1">Option 1</option>
		<option value="Option 2">Option 2</option>
		<option value="Option 3">Option 3</option>
	</select>

	<!-- Wrap checkbox/radio button groups in fieldsets -->
	<fieldset>

		<!-- Give the fieldset a legend -->
		<legend for="">Checkboxes</legend>

		<!-- Wrap each checkbox in a label, then give it the input and span for the text option -->
		<label for="regularCheckbox">
			<input type="checkbox" id="regularCheckbox" value="checkbox 1" />
			Regular Checkbox
		</label>

		<label for="secondRegularCheckbox">
			<input type="checkbox" id="secondRegularCheckbox" value="checkbox 2" />
			Regular Checkbox
		</label>
	</fieldset>

	<fieldset>
		<legend>Radio Buttons</legend>
		<label for="regularRadio">
			<input type="radio" name="radios" id="regularRadio" value="radio 1" />
			Regular Radio
		</label>
		<label for="secondRegularRadio">
			<input type="radio" name="radios" id="secondRegularRadio" value="radio 2" />
			Regular Radio
		</label>
	</fieldset>

	<button type="submit">Submit Form</button>
</form>


<hr class="article-divider" />


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
