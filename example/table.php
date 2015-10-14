<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Tables';
	$NAVIGATION = true;

	$HEAD = '
	<style>
		code > strong {
			/* color: red */
			color: #E46554;
		}
	</style>
	';
	include 'template.inc.php';
}

?>

<p>
	Tables display tabular data in columns and rows.
</p>

<div class="horizontal-scrolling">
	<table>
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
				<td>Normal</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Normal</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Normal</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Normal</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Normal</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Normal</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Normal</td>
				<td>Table</td>
			</tr>
		</tbody>
	</table>
</div>
<h3>Usage</h3>
<pre><code>&lt;table class="<strong>tabular</strong>"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;First Header&lt;/th&gt;
			&lt;th&gt;Second Header&lt;/th&gt;
			&lt;th&gt;Third Header&lt;/th&gt;
			&lt;th&gt;Fourth Header&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;This&lt;/td&gt;
			&lt;td&gt;Is&lt;/td&gt;
			&lt;td&gt;A&lt;/td&gt;
			&lt;td&gt;Table&lt;/td&gt;
		&lt;/tr&gt;
	&hellip;
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>



<h2>Borderless Table (.borderless)</h2>
<p>
	This table is styled using the .borderless class. 
</p>
<div class="horizontal-scrolling">
	<table class="borderless">
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
				<td>Borderless</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Borderless</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Borderless</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Borderless</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Borderless</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Borderless</td>
				<td>Table</td>
			</tr>
			<tr>
				<td>This</td>
				<td>Is</td>
				<td>A</td>
				<td>Borderless</td>
				<td>Table</td>
			</tr>
		</tbody>
	</table>
</div>
<h3>Usage</h3>
<pre><code>&lt;table class="<strong>tabular responsive</strong>"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;First Header&lt;/th&gt;
			&lt;th&gt;Second Header&lt;/th&gt;
			&lt;th&gt;Third Header&lt;/th&gt;
			&lt;th&gt;Fourth Header&lt;/th&gt;
			&lt;th&gt;Fifth Header&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;This&lt;/td&gt;
			&lt;td&gt;Is&lt;/td&gt;
			&lt;td&gt;A&lt;/td&gt;
			&lt;td&gt;Responsive&lt;/td&gt;
			&lt;td&gt;Table&lt;/td&gt;
		&lt;/tr&gt;
	&hellip;
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>


<h2>Responsive Table (.horizontal-scrolling)</h2>
<p>
	This table has been made responsive by adding the .horizontal-scrolling
	class to a div wrapper element.
</p>

<div class="horizontal-scrolling">
	<table>
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
		</tbody>
	</table>
</div>
<h3>Usage</h3>
<pre><code>&lt;div class="horizontal-scrolling"&gt;
	&lt;table class="<strong>tabular responsive</strong>"&gt;
		&lt;thead&gt;
			&lt;tr&gt;
				&lt;th&gt;First Header&lt;/th&gt;
				&lt;th&gt;Second Header&lt;/th&gt;
				&lt;th&gt;Third Header&lt;/th&gt;
				&lt;th&gt;Fourth Header&lt;/th&gt;
				&lt;th&gt;Fifth Header&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;
		&lt;tbody&gt;
			&lt;tr&gt;
				<strong>&lt;th&gt;</strong>This<strong>&lt;/th&gt;</strong>
				&lt;td&gt;Is&lt;/td&gt;
				&lt;td&gt;A&lt;/td&gt;
				&lt;td&gt;Responsive&lt;/td&gt;
				&lt;td&gt;Table&lt;/td&gt;
			&lt;/tr&gt;
		&hellip;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;
</code></pre>
