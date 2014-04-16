<?php

if (!isset($TEMPLATE)) {
	$HEAD = '
	<link rel="stylesheet" href="/css/responsive-table.css"/>
	<style>
		@media screen and (max-width: 767px) {
			td:nth-of-type(1):before { content: "First Header"; }
			td:nth-of-type(2):before { content: "Second Header"; }
			td:nth-of-type(3):before { content: "Third Header"; }
			td:nth-of-type(4):before { content: "Fourth Header"; }
			td:nth-of-type(5):before { content: "Fifth Header"; }
		}
	</style>
';
	$TITLE = 'Responsive Table Demo';
	include 'template.inc.php';
}

?>

<table class="responsive test-table">
	<thead>
		<tr>
			<th>First Header</th>
			<th>Second Header</th>
			<th>Third Header</th>
			<th>Fourth Header</th>
			<th>Fifth Header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<td>This</td>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
	</tbody>
</table>