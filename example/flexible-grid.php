<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Flexible grid demo';
	$NAVIGATION = true;
	$HEAD = '
	<style>
		.row > .column > div {
			border:1px solid #F00;
		}
		.row.right-to-left > .column > div {
			border-color:#00F;
		}
	</style>
	';

	include 'template.inc.php';
}


$names = array(
	1 => "one",
	2 => "two",
	3 => "three",
	4 => "four",
	5 => "five",
	6 => "six",
	7 => "seven",
	8 => "eight",
	9 => "nine",
	10 => "ten",
	11 => "eleven",
	12 => "twelve"
);


$grid_sizes = array(2, 3, 4, 5, 6, 8, 10, 12);


foreach ($grid_sizes as $size) {
	echo '<h2>*/' . $size . '</h2>';
	$size_name = $names[$size];

	for ($i=1; $i<$size; $i++) {
		$i_name = $names[$i] . '-of-' . $size_name;
		$rest = $size - $i;
		$rest_name = $names[$rest] . '-of-' . $size_name;

		// output normal example
		echo '<div class="row">';
			echo '<div class="column ' . $i_name . '"><div>' . $i_name . ' (first)</div></div>';
			echo '<div class="column ' . $rest_name . '"><div>' . $rest_name . ' (second)</div></div>';
		echo '</div>';

		// output right-to-left example
		echo '<div class="row right-to-left">';
			echo '<div class="column ' . $i_name . '"><div>' . $i_name . ' (first)</div></div>';
			echo '<div class="column ' . $rest_name . '"><div>' . $rest_name . ' (second)</div></div>';
		echo '</div>';

	}
}

?>

<h2>Nested columns</h2>
<div class="row">
	<div class="column one-of-two"><div>one-of-two</div></div>
	<div class="column one-of-two"><div>
		one-of-two<br/>
		<div class="row">
			<div class="column one-of-two"><div>nested one-of-two</div></div>
			<div class="column one-of-two"><div>nested one-of-two</div></div>
		</div>
	</div></div>
</div>