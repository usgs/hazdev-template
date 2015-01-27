<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Responsive Table Demo';
	$NAVIGATION = true;

	$HEAD = '
	<link rel="stylesheet" href="/theme/css/responsive-table.css"/>
	<style>
		@media screen and (max-width: 559px) {
			.test-horizontal td:nth-of-type(1):before { content: "First Header"; }
			.test-horizontal td:nth-of-type(2):before { content: "Second Header"; }
			.test-horizontal td:nth-of-type(3):before { content: "Third Header"; }
			.test-horizontal td:nth-of-type(4):before { content: "Fourth Header"; }
			.test-horizontal td:nth-of-type(5):before { content: "Fifth Header"; }
		}

		strong {
			/* color: red */
			color: #E46554;
		}
	</style>
	';
	include 'template.inc.php';
}

?>


<h2>Table (.tabular)</h2>
<p>
	This is a non-responsive table styled with the <code>.tabular</code> class.
</p>
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
<h3>Usage</h3>
<pre><code>&lt;table class="<strong>tabular</strong>"&gt;
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


<h2>Vertical Table (.tabular)</h2>
<p>
	This is a non-responsive table styled with the <code>.tabular</code> class.
</p>
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
<h3>Usage</h3>
<pre><code>&lt;table class="<strong>tabular</strong>"&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th&gt;First Header&lt;/th&gt;
			&lt;td&gt;This&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;Second Header&lt;/th&gt;
			&lt;td&gt;Is&lt;/td&gt;
		&lt;/tr&gt;
		&hellip;
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>


<h2>Responsive Table (.tabular .responsive)</h2>
<p>
	Responsive table using the <code>.tabular .responsive</code> classes.
	This table has no th elements in the body.
</p>
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


<h2>Responsive Table (.tabular .responsive)</h2>
<p>
	Responsive table using the <code>.tabular .responsive</code> classes.
	This table has a leading <code>th</code> element at the first position
	of each row in the body.
</p>
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
			<th>1st Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>2nd Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>3rd Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>4th Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
		<tr>
			<th>5th Value</th>
			<td>In</td>
			<td>A</td>
			<td>Responsive</td>
			<td>Table</td>
		</tr>
	</tbody>
</table>
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
			<strong>&lt;th&gt;</strong>This<strong>&lt;/th&gt;</strong>
			&lt;td&gt;Is&lt;/td&gt;
			&lt;td&gt;A&lt;/td&gt;
			&lt;td&gt;Responsive&lt;/td&gt;
			&lt;td&gt;Table&lt;/td&gt;
		&lt;/tr&gt;
	&hellip;
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>

<h2>Responsive Table (.tabular .responsive .center)</h2>
<p>
	Responsive table using the <code>.tabular .responsive .center</code> classes.
	This table has a leading <code>th</code> element at the first position
	of each row in the body.
</p>
<p>
	This table also has a <code>.no-header-style</code> class applied to the body.
	the <code>.no-header-style</code> class removes the header style from any 
	headers that exist in the table tbody.
</p>
<table class="tabular responsive center test-horizontal">
	<thead>
		<tr>
			<th>First Header</th>
			<th>Second Header</th>
			<th>Third Header</th>
			<th>Fourth Header</th>
			<th>Fifth Header</th>
		</tr>
	</thead>
	<tbody class="no-header-style">
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
<h3>Usage</h3>
<pre><code>&lt;table class="<strong>tabular responsive center</strong>"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;First Header&lt;/th&gt;
			&lt;th&gt;Second Header&lt;/th&gt;
			&lt;th&gt;Third Header&lt;/th&gt;
			&lt;th&gt;Fourth Header&lt;/th&gt;
			&lt;th&gt;Fifth Header&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody class="<strong>no-header-style</strong>"&gt;
		&lt;tr&gt;
			<strong>&lt;th&gt;</strong>Main Value<strong>&lt;/th&gt;</strong>
			&lt;td&gt;In&lt;/td&gt;
			&lt;td&gt;A&lt;/td&gt;
			&lt;td&gt;Responsive&lt;/td&gt;
			&lt;td&gt;Table&lt;/td&gt;
		&lt;/tr&gt;
		&hellip;
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>