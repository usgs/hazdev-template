<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Forms';
	$NAVIGATION = true;

	$HEAD = '
			<link rel="stylesheet" href="/theme/css/flexible-grid.css" />

			<style>

				.preview {
          border: 1px solid #eee;
          margin: 1em 0;
          padding: .25em 3rem;
        }

			</style>
	';

	include 'template.inc.php';

}
?>


<div class="preview">
  <h2>Text input Examples</h2>
  <form>
    <label for="input-type-text">Text input label</label>
    <input id="input-type-text" name="input-type-text" type="text" />

    <label for="input-focus">Text input focused</label>
    <input class="usa-input-focus" id="input-focus" name="input-focus" type="text" />

    <div class="usa-input-error">
      <label class="usa-input-error-label" for="input-error">Text input error</label>
      <span class="usa-input-error-message" id="input-error-message" role="alert">Helpful error message</span>
      <input id="input-error" name="input-error" type="text" aria-describedby="input-error-message" />
    </div>

    <label for="input-success">Text input success</label>
    <input class="usa-input-success" id="input-success" name="input-success" type="text" />

    <label for="input-type-textarea">Text area label</label>
    <textarea id="input-type-textarea" name="input-type-textarea"></textarea>
  </form>
</div>

<div class="preview">
  <h2>Dropdown Example</h2>
  <form>
  	<label>Dropdown label
  		<select class="collection-selectbox">
  			<option value="0">Location</option>
  			<option value="1">MMI</option>
  			<option value="2">Responses</option>
  			<option value="3" selected="selected">Distance</option>
  		</select>
  	</label>
  </form>
</div>

<div class="preview">
  <h2>Checkboxes Example</h2>
  <fieldset class="usa-fieldset-inputs">
    <legend class="usa-sr-only">Checkboxes</legend>
    <ul class="usa-unstyled-list">
      <li>
        <input type="checkbox" id="regularCheckbox1" value="checkbox 1" />
        <label for="regularCheckbox1">Regular Checkbox 1</label>
      </li>
      <li>
        <input type="checkbox" id="secondRegularCheckbox1" value="checkbox 2" />
        <label for="secondRegularCheckbox1">Regular Checkbox 2</label>
      </li>
      <li>
        <input type="checkbox" id="thirdRegularCheckbox1" value="checkbox 2" />
        <label for="thirdRegularCheckbox1">Regular Checkbox 3</label>
      </li>
    </ul>
  </fieldset>
</div>

<div class="preview">
  <h2>Radio Buttons Example</h2>
  <fieldset class="usa-fieldset-inputs">
    <legend class="usa-sr-only">Radio Buttons</legend>
    <ul class="usa-unstyled-list">
      <li>
        <input type="radio" name="radios" id="regularRadio1" value="radio 1" />
        <label for="regularRadio1">Regular Radio 1</label>
      </li>
      <li>
        <input type="radio" name="radios" id="secondRegularRadio1" value="radio 2" />
        <label for="secondRegularRadio1">Regular Radio 2</label>
      </li>
    </ul>
  </fieldset>
</div>

<h2>Usage</h2>
Inspect an element to see how it was used in the desired example.

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
