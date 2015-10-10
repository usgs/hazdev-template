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
  <h2>Form Example Elements</h2>
  <form>
    <label for="input-type-text">Tell us your name, so that we can let you
      know when it is ready:
      <input id="input-type-text" name="input-type-text" type="text" />
    </label>

    <p>
      You may pick one flavor...
    </p>
    <fieldset class="usa-fieldset-inputs">
      <legend class="usa-sr-only">Ice Cream Flavors</legend>
      <ul class="usa-unstyled-list">
        <li>
          <input type="radio" name="flavor" id="flavor-vanilla"
              value="vanilla" checked="checked" />
          <label for="flavor-vanilla">Vanilla</label>
        </li>
        <li>
          <input type="radio" name="flavor" id="flavor-chocolate"
              value="chocolate" />
          <label for="flavor-chocolate">Chocolate</label>
        </li>
        <li>
          <input type="radio" name="flavor" id="flavor-strawberry"
              value="strawberry" disabled="disabled" />
          <label for="flavor-strawberry">Strawberry - Sorry, out of stock</label>
        </li>
      </ul>
    </fieldset>

    <p>
      ...and several toppings.
    </p>
    <fieldset class="usa-fieldset-inputs">
      <legend class="usa-sr-only">Ice Cream Toppings</legend>
      <ul class="usa-unstyled-list">
        <li>
          <input type="checkbox" name="topping" id="topping-sprinkles"
              value="sprinkles" checked="checked" />
          <label for="topping-sprinkles">Sprinkles</label>
        </li>
        <li>
          <input type="checkbox" name="topping" id="topping-chocolate-syrup"
              value="chocolate-syrup" />
          <label for="topping-chocolate-syrup">Chocolate Syrup</label>
        </li>
        <li>
          <input type="checkbox" name="topping" id="topping-peanuts"
              value="peanuts" disabled="disabled" />
          <label for="topping-peanuts">Peanuts - Sorry, out of stock</label>
        </li>
      </ul>
    </fieldset>

    <label>Now choose your container:
      <select class="collection-selectbox">
        <option value="waffle-cone">Waffle Cone</option>
        <option value="regular-cone">Regular Cone</option>
        <option value="users-hands">Your Hands</option>
        <option value="bowl" selected="selected">Bowl</option>
      </select>
    </label>

    <label for="input-type-textarea">Any other instructions?
      <textarea id="input-type-textarea" name="input-type-textarea"></textarea>
    </label>
  </form>
</div>

<div class="preview">
  <h2>Text Input Examples</h2>
  <p>
    Text input can span single or multiple lines, and can be styled
    for success and error status.
  </p>
  <form>
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
  </form>
</div>
