<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Forms';
	$NAVIGATION = true;

	$HEAD = '
			<style>
				textarea {
					width: 36em;
					height: 10em;
				}

				.vertical > button {
					margin: 2em 0 0;
				}

				.sortExample,
				.searchExample {
					margin: 1em 0 0;
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

<h2>Form Elements</h2>
<p>
	Here are some examples of form elements displayed with their default styles.
</p>

<h3>Sort Example</h3>
<div class="sortExample">
	<label>Sort by
		<select class="collection-selectbox">
			<option value="0">Location</option>
			<option value="1">MMI</option>
			<option value="2">Responses</option>
			<option value="3" selected="selected">Distance</option>
		</select>
	</label>
	<button type="submit">Download</button>
</div>

<h3>Search Example</h3>
<div class="searchExample">
	<label>Search
		<input type="search" placeholder="Search" />
	</label>
	<button type="submit">Search</button>
</div>


<h2>Vertical Form</h2>
<form class="vertical">

	<!-- Label and text input -->
	<label for="regularInput1">Regular Input</label>
	<input type="text" id="regularInput1" placeholder="Placeholder Text"/>

	<!-- Label and textarea -->
	<label for="regularTextarea1">Regular Textarea</label>
	<textarea id="regularTextarea1"></textarea>

	<!-- Label and select list -->
	<label for="selectList1">Select List</label>
	<select id="selectList1">
		<option value="Option 1">Option 1</option>
		<option value="Option 2">Option 2</option>
		<option value="Option 3">Option 3</option>
	</select>

	<!-- Wrap checkbox/radio button groups in fieldsets -->
	<fieldset>

		<!-- Give the fieldset a legend -->
		<legend>Checkboxes</legend>

		<!-- Wrap each checkbox in a label, then give it the input and span for the text option -->
		<label for="regularCheckbox1">
			<input type="checkbox" id="regularCheckbox1" value="checkbox 1" />
			Regular Checkbox 1
		</label>

		<label for="secondRegularCheckbox1">
			<input type="checkbox" id="secondRegularCheckbox1" value="checkbox 2" />
			Regular Checkbox 2
		</label>

		<label for="thirdRegularCheckbox1">
			<input type="checkbox" id="thirdRegularCheckbox1" value="checkbox 2" />
			Regular Checkbox 3
		</label>
	</fieldset>

	<fieldset>
		<legend>Radio Buttons</legend>
		<label for="regularRadio1">
			<input type="radio" name="radios" id="regularRadio1" value="radio 1" />
			Regular Radio 1
		</label>
		<label for="secondRegularRadio1">
			<input type="radio" name="radios" id="secondRegularRadio1" value="radio 2" />
			Regular Radio 2
		</label>
	</fieldset>

	<button type="submit">Submit Form</button>
</form>
<h2>Usage</h2>
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


<h2>Fieldset Example</h2>
<p>
	This is an example of a <code>fieldset</code> being used to format a question.
</p>
<section class="vertical">
	<fieldset>
		<legend>
			I have a long question that I want to wrap on a smaller screen, do you
			think that this text will wrap?
		</legend>
		<label for="regularRadio3">
			<input type="radio" name="radios" id="regularRadio3" value="radio 1" />
			I'm not sure if it will wrap... I'm not very good with this line of
			questioning let me think on it for ahile. 
		</label>
		<label for="secondRegularRadio3">
			<input type="radio" name="radios" id="secondRegularRadio3" value="radio 2" />
			Yes
		</label>
		<label for="thirdRegularRadio3">
			<input type="radio" name="radios" id="thirdRegularRadio3" value="radio 2" />
			No
		</label>
		<label for="fourthRegularRadio3">
			<input type="radio" name="radios" id="fourthRegularRadio3" value="radio 2" />
			Maybe
		</label>
	</fieldset>
</section>
<h2>Usage</h2>
<pre><code>&lt;section class="vertical"&gt;
	&lt;fieldset&gt;
		&lt;legend&gt;
			I have a long question that I want to wrap on a smaller screen, do you
			think that this text will wrap?
		&lt;/legend&gt;
		&lt;label for="regularRadio3"&gt;
			&lt;input type="radio" name="radios" id="regularRadio3" value="radio 1" /&gt;
			I'm not sure if it will wrap... I'm not very good with this line of
			questioning let me think on it for ahile.
		&lt;/label&gt;
		&lt;label for="secondRegularRadio3"&gt;
			&lt;input type="radio" name="radios" id="secondRegularRadio3" value="radio 2" /&gt;
			Yes
		&lt;/label&gt;
		&lt;label for="thirdRegularRadio3"&gt;
			&lt;input type="radio" name="radios" id="thirdRegularRadio3" value="radio 2" /&gt;
			No
		&lt;/label&gt;
		&lt;label for="fourthRegularRadio3"&gt;
			&lt;input type="radio" name="radios" id="fourthRegularRadio3" value="radio 2" /&gt;
			Maybe
		&lt;/label&gt;
	&lt;/fieldset&gt;
&lt;/section&gt;
</code></pre>
