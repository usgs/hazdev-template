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
  <p>
    Text input can span single or multiple lines.
  </p>
  <form>
    <label for="input-type-text">Text input label
      <input id="input-type-text" name="input-type-text" type="text" />
    </label>

    <label for="input-focus">Text input focused
      <input class="usa-input-focus" id="input-focus"
          name="input-focus" type="text" />
    </label>

    <div class="usa-input-error">
      <label class="usa-input-error-label" for="input-error">Text input error
        <span class="usa-input-error-message" id="input-error-message"
            role="alert">Helpful error message</span>
        <input id="input-error" name="input-error" type="text"
            aria-describedby="input-error-message" />
      </label>
    </div>

    <label for="input-success">Text input success
      <input class="usa-input-success" id="input-success"
          name="input-success" type="text" />
    </label>

    <label for="input-type-textarea">Text area label
      <textarea id="input-type-textarea" name="input-type-textarea"></textarea>
    </label>
  </form>
</div>

<div class="preview">
  <h2>Dropdown Example</h2>
  <p>
    Dropdowns should be used when only 1 selection is allowed, and there are
    not too many options to choose from.
  </p>
  <form>
  	<label>Dropdown label
  		<select class="collection-selectbox">
  			<option value="0">Option 1</option>
  			<option value="1">Option 2</option>
  			<option value="2">Option 3</option>
  			<option value="3" selected="selected">Option 4 - default</option>
  		</select>
  	</label>
  </form>
</div>

<div class="preview">
  <h2>Checkboxes Example</h2>
  <p>
    Checkboxes should be used when multiple selections are allowed, or
    to enable/disable a feature.
  </p>
  <fieldset class="usa-fieldset-inputs">
    <legend class="usa-sr-only">Checkboxes</legend>
    <ul class="usa-unstyled-list">
      <li>
        <input type="checkbox" id="checkbox-1"
            value="checkbox 1" checked="checked" />
        <label for="checkbox-1">Regular Checkbox 1 - checked by default</label>
      </li>
      <li>
        <input type="checkbox" id="checkbox-2" value="checkbox 2" />
        <label for="checkbox-2">Regular Checkbox 2</label>
      </li>
      <li>
        <input type="checkbox" id="checkbox-3" value="checkbox 3" />
        <label for="checkbox-3">Regular Checkbox 3</label>
      </li>
      <li>
        <input type="checkbox" id="checkbox-4"
            value="checkbox 4" disabled="disabled" />
        <label for="checkbox-4">Regular Checkbox 4 - disabled</label>
      </li>
    </ul>
  </fieldset>
</div>

<div class="preview">
  <h2>Radio Buttons Example</h2>
  <p>
    Radio buttons should be used when only 1 selection is allowed.
  </p>
  <fieldset class="usa-fieldset-inputs">
    <legend class="usa-sr-only">Radio Buttons</legend>
    <ul class="usa-unstyled-list">
      <li>
        <input type="radio" name="radios" id="radio-1"
            value="radio 1" checked="checked" />
        <label for="radio-1">Regular Radio 1 - selected by default</label>
      </li>
      <li>
        <input type="radio" name="radios" id="radio-2" value="radio 2" />
        <label for="radio-2">Regular Radio 2</label>
      </li>
      <li>
        <input type="radio" name="radios" id="radio-3"
            value="radio 3" disabled="disabled"/>
        <label for="radio-3">Regular Radio 3 - disabled</label>
      </li>
    </ul>
  </fieldset>
</div>
