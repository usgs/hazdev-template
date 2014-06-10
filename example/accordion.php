<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Accordion Example';
	$NAVIGATION = true;

	$HEAD = '
		<link rel="stylesheet" href="/css/accordion.css"/>
	';
	$FOOT = '
		<script src="/js/accordion-example.js"></script>
	';

	include_once 'template.inc.php';
}
?>

<div class="accordion">
	<div>
		Content inside of the accordion container, but outside of the
		accordion-toggle and accordion-content.
	</div>
	<span class="accordion-toggle">Section Header (Default Open)</span>
	<div>
		Even more content inside of the accordion container, but outside of the
		accordion-toggle and accordion-content. Location. Location. Location.
	</div>
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

<div class="accordion accordion-closed">
	<span class="accordion-toggle">Section Header (Default Closed)</span>
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

<section class="accordion">
	<div>
		Nothing inside of this div will be toggled by the accordion button because
		it is not part of the <em>accordion-content</em> class.
		<h3>
			<em>Example Content</em>
			<small> - more description and stuff</small>
		</h3>
		Yes, 20.
	</div>
	<span class="accordion-toggle">Details</span>
	<div class="accordion-content">
		<p>
			This is at the beginning of the details that will be hidden/displayed.
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
