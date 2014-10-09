<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Forms';
	$NAVIGATION = true;

	$HEAD = '
			<link rel="stylesheet" href="/css/flexible-grid.css" />

			<style>
				textarea {
					width: 36em;
					height: 10em;
				}

				.example .row {
					margin-top: 15px;
				}
			</style>
	';

	include 'template.inc.php';

}
?>


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
<h3 class="subheading">Usage</h3>
<pre><code>&lt;form class="vertical"&gt;
	&lt;label for="regularInput"&gt;Regular Input&lt;/label&gt;
	&lt;input type="text" id="regularInput" placeholder="Placeholder Text"/&gt;
	&hellip;
	&lt;fieldset&gt;
		&lt;legend&gt;Radio Buttons&lt;/legend&gt;
		&lt;label for="regularRadio"&gt;
			&lt;input type="radio" name="radios" id="regularRadio" value="radio 1" /&gt;
			Regular Radio
		&lt;/label&gt;
		&lt;label for="secondRegularRadio"&gt;
			&lt;input type="radio" name="radios" id="secondRegularRadio" value="radio 2" /&gt;
			Regular Radio
		&lt;/label&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
</code></pre>


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
<h3 class="subheading">Usage</h3>
<pre><code>&lt;form class="example"&gt;
	&lt;div class="row"&gt;
		&lt;div class="column one-of-five"&gt;
			&lt;label for="regularInput" &gt;Regular Input&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class="column four-of-five"&gt;
			&lt;input type="text" id="regularInput" placeholder="Placeholder Text"/&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&hellip;
	&lt;fieldset class="row"&gt;
		&lt;div class="column one-of-five"&gt;
			&lt;legend&gt;Radio Buttons&lt;/legend&gt;
		&lt;/div&gt;
		&lt;div class="column four-of-five"&gt;
			&lt;label for="regularRadio"&gt;
				&lt;input type="radio" name="radios" id="regularRadio" value="radio 1" /&gt;
				Regular Radio
			&lt;/label&gt;
			&lt;label for="secondRegularRadio"&gt;
				&lt;input type="radio" name="radios" id="secondRegularRadio" value="radio 2" /&gt;
				Regular Radio
			&lt;/label&gt;
		&lt;/div&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
</code></pre>
