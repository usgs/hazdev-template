<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Accordion Example';
	$NAVIGATION = true;

	$HEAD = '<link rel="stylesheet" href="/css/accordion.css"/>';
	$FOOT = '<script src="/js/accordion-example.js"></script>';

	include_once 'template.inc.php';
}
?>

<div class="accordion accordion-standard">
	<h3 class="accordion-toggle">Section Header (Default Open)</h3>
	<div class="accordion-content">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
			veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
			occaecat cupidatat non proident, sunt in culpa qui officia deserunt
			mollit anim id est laborum.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
			veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
			occaecat cupidatat non proident, sunt in culpa qui officia deserunt
			mollit anim id est laborum.
		</p>
	</div>
</div>

<div class="accordion accordion-standard accordion-closed">
	<h3 class="accordion-toggle">Section Header (Default Closed)</h3>
	<div class="accordion-content">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
			veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
			occaecat cupidatat non proident, sunt in culpa qui officia deserunt
			mollit anim id est laborum.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
			veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
			occaecat cupidatat non proident, sunt in culpa qui officia deserunt
			mollit anim id est laborum.
		</p>
	</div>
</div>

<section class="accordion my-accordion">
	<div class="my-summary">
		Nothing inside of this div will be toggled by the accordion button because
		it is not part of the <em>accordion-content</em> class.
	</div>
	<span class="accordion-toggle">Toggle Button</span>
	<div class="my-summary">
		Another div that will not be toggled by the accordion.
		Yes, 20.
	</div>
	<div class="accordion-content">
		<p>
			This is at the beginning of the details that will be hidden/displayed.
			The toggle button will remain wherever it is placed by default and will
			only toggle content within the <em>accordion-content</em> container with
			the same parent as the <em>accordion-toggle</em>. The
			<em>accordion-content</em> container in this example has a blue 1px border
		</p>
		<table>
			<thead>
				<tr>
					<th>A</th>
					<th>B</th>
					<th>C</th>
					<th>D</th>
					<th>E</th>
					<th>F</th>
					<th>G</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>a</td>
					<td>b</td>
					<td>c</td>
					<td>d</td>
					<td>e</td>
					<td>f</td>
					<td>g</td>
				</tr>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
				</tr>
			</tbody>
		</table>
		<p>
			This is at the end of the details that will be hidden/displayed.
		</p>
	</div>
</section>
