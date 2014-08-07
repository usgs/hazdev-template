<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Responsive Table Demo';
	$NAVIGATION = true;

	$HEAD = '
	<link rel="stylesheet" href="/css/responsive-table.css"/>
	<style>
		@media screen and (max-width: 767px) {

			table.test-horizontal > tbody > tr > td {
				padding-left: 48%;
			}

			.test-horizontal td:nth-of-type(1):before { content: "First Header"; }
			.test-horizontal td:nth-of-type(2):before { content: "Second Header"; }
			.test-horizontal td:nth-of-type(3):before { content: "Third Header"; }
			.test-horizontal td:nth-of-type(4):before { content: "Fourth Header"; }
			.test-horizontal td:nth-of-type(5):before { content: "Fifth Header"; }
		}

		.test-vertical th {
			width:50%;
		}
	</style>
	';
	include 'template.inc.php';
}

?>


<h2>Responsive Table (.responsive)</h2>

<table class="tabular">
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

<table class="tabular responsive test-horizontal">
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
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>Main Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
	</tbody>
</table>

<h2>Responsive Table (.responsive)</h2>

<table class="tabular responsive test-horizontal">
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
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th class="header">This</th>
			<td>Is</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
	</tbody>
</table>


<h2>Vertical Table (.responsive-vertical)</h2>

<table class="tabular">
	<tbody>
		<tr>
			<th>First Header</th>
			<td>This</td>
		</tr>
		<tr>
			<th>Second Header</th>
			<td>Is</td>
		</tr>
		<tr>
			<th>Third Header</th>
			<td>A</td>
		</tr>
		<tr>
			<th>Fourth Header</th>
			<td>Vertical</td>
		</tr>
		<tr>
			<th>Fifth Header</th>
			<td>Table</td>
		</tr>
	</tbody>
</table>