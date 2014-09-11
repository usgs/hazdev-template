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

	.buttons button.cancel,
	.buttons button.confirm {
		min-width:100px;
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
<button class="red tint" type="submit">Red</button>
<button class="orange tint" type="submit">Orange</button>
<button class="yellow tint" type="submit">Yellow</button>
<button class="green tint" type="submit">Green</button>
<button class="blue tint" type="submit">Blue</button>
<br>
<button class="red" type="submit" disabled>Red</button>
<button class="orange" type="submit" disabled>Orange</button>
<button class="yellow" type="submit" disabled>Yellow</button>
<button class="green" type="submit" disabled>Green</button>
<button class="blue" type="submit" disabled>Blue</button>
</section>
