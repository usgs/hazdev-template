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

<section class="accordion" style="position:relative;">
	<div style="
		border:1px solid red;
		padding-right:75px;
		overflow:hidden;
		white-space:nowrap;
		text-overflow:ellipsis;">
		Nothing inside of this div will be toggled by the accordion button because
		it is not part of the <em>accordion-content</em> class.
	</div>
	<span class="accordion-toggle" style="
		position:absolute;
		top:25px;
		right:15px;
		padding:0;
		color:#00f;">Toggle Button</span>
	<div style="
		border:1px solid red;
		padding-right:165px;
		overflow:hidden;
		white-space:nowrap;
		text-overflow:ellipsis;">
		Another div that will not be toggled by the accordion.
		Yes, 20.
	</div>
	<div class="accordion-content" style="border:1px solid blue;">
		<p>
			This is at the beginning of the details that will be hidden/displayed.
			All of the inline styles here are just to help point out which sections
			are which, and what can be done. The toggle button will remain wherever
			it is placed and will only toggle content within the accordion-content
			container with the same parent as the accordion-toggle.
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
