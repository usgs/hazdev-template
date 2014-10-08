<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Forms';
	$NAVIGATION = true;

	$HEAD = '
			<link rel="stylesheet" href="/css/flexible-grid.css" />
			<link rel="stylesheet" href="/css/form.css" />
			<link rel="stylesheet" href="/css/button.css" />
	';

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

	textarea {
		width: 36em;
		height: 10em;
	}

	hr {
		margin:25px 0;
	}

	.example .row {
		margin-top: 15px;
	}

</style>


<p>
	The inputs, labels, and other form elements on a form are vertical
	when the <code>.vertical</code> class is applied to the container.
</p>


<h3 class="subheading">Vertical Form</h3>
<form class="vertical">

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


<h3 class="subheading">Horizontal Form</h3>
<p>
	To acheive a horizontal layout you must use the flexible grid to layout form
	labels and input fields, grouping each logical match with a <code>.row</code>.
</p>
<form class="example">
	<!-- Label and text input -->
	<div class="row">
		<div class="column one-of-five">
			<label for="regularInput" >Regular Input</label>
		</div>

		<div class="column four-of-five">
			<input type="text" id="regularInput" placeholder="Placeholder Text"/>
		</div>
	</div>

	<!-- Label and textarea -->
	<div class="row">
		<div class="column one-of-five">
			<label for="regularTextarea">Regular Textarea</label>
		</div>

		<div class="column four-of-five">
			<textarea id="regularTextarea"></textarea>
		</div>
	</div>

	<!-- Label and select list -->
	<div class="row">
		<div class="column one-of-five">
			<label for="selectList">Select List</label>
		</div>

		<div class="column four-of-five">
			<select id="selectList">
				<option value="Option 1">Option 1</option>
				<option value="Option 2">Option 2</option>
				<option value="Option 3">Option 3</option>
			</select>
		</div>
	</div>

	<!-- Wrap checkbox/radio button groups in fieldsets -->
	<fieldset class="row">

		<!-- Give the fieldset a legend -->
		<div class="column one-of-five">
			<legend for="">Checkboxes</legend>
		</div>

		<!-- Wrap each checkbox in a label, then give it the input and span for the text option -->
		<div class="column four-of-five">
			<label for="regularCheckbox">
				<input type="checkbox" id="regularCheckbox" value="checkbox 1" />
				Regular Checkbox
			</label>

			<label for="secondRegularCheckbox">
				<input type="checkbox" id="secondRegularCheckbox" value="checkbox 2" />
				Regular Checkbox
			</label>
		</div>
	</fieldset>

	<fieldset class="row">
		<div class="column one-of-five">
			<legend>Radio Buttons</legend>
		</div>
		<div class="column four-of-five">
			<label for="regularRadio">
				<input type="radio" name="radios" id="regularRadio" value="radio 1" />
				Regular Radio
			</label>
			<label for="secondRegularRadio">
				<input type="radio" name="radios" id="secondRegularRadio" value="radio 2" />
				Regular Radio
			</label>
		</div>
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
<button class="red" type="submit" disabled>Red</button>
<button class="orange" type="submit" disabled>Orange</button>
<button class="yellow" type="submit" disabled>Yellow</button>
<button class="green" type="submit" disabled>Green</button>
<button class="blue" type="submit" disabled>Blue</button>
</section>
