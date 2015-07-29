<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Flexible grid demo';
	$NAVIGATION = true;
	$HEAD = '
	<style>
		.row > .column > div {
			margin: 16px 0 0;
			text-align: center;
		}
	</style>

	<link rel="stylesheet" href="/theme/css/flexible-grid.css" />
	<link rel="stylesheet" href="/theme/css/alert.css" />
	';

	include 'template.inc.php';
}


$names = array(
	1 => "one",
	2 => "two",
	3 => "three",
	4 => "four",
	5 => "five"
);


$grid_sizes = array(2, 3, 4, 5);


foreach ($grid_sizes as $size) {
	echo '<h2>*/' . $size . '</h2>';
	$size_name = $names[$size];

	for ($i=1; $i<$size; $i++) {
		$i_name = $names[$i] . '-of-' . $size_name;
		$rest = $size - $i;
		$rest_name = $names[$rest] . '-of-' . $size_name;

		// output normal example
		echo '<div class="row">';
			echo '<div class="column ' . $i_name . '"><div class="alert">' . $i_name . ' (first)</div></div>';
			echo '<div class="column ' . $rest_name . '"><div class="alert">' . $rest_name . ' (second)</div></div>';
		echo '</div>';

		// output right-to-left example
		echo '<div class="row right-to-left">';
			echo '<div class="column ' . $i_name . '"><div class="alert success">' . $i_name . ' (first)</div></div>';
			echo '<div class="column ' . $rest_name . '"><div class="alert success">' . $rest_name . ' (second)</div></div>';
		echo '</div>';

		// output mobile example
		echo '<div class="row mobile">';
			echo '<div class="column mobile-' . $i_name . '"><div class="alert info">' . $i_name . ' (mobile)</div></div>';
			echo '<div class="column mobile-' . $rest_name . '"><div class="alert info">' . $rest_name . ' (mobile)</div></div>';
		echo '</div>';

	}
}

?>

<h2>Nested columns</h2>
<div class="row">
	<div class="column one-of-two"><div class="alert info">one-of-two</div></div>
	<div class="column one-of-two"><div class="alert info">
		one-of-two<br/>
		<div class="row">
			<div class="column one-of-two"><div class="alert">nested one-of-two</div></div>
			<div class="column one-of-two"><div class="alert">nested one-of-two</div></div>
		</div>
	</div></div>
</div>


<section class="desktop-to-mobile">
	<h2>Transitioning columns</h2>
	<p>
		large screens see a <code>.one-of-four</code> layout, while small screens
		get a <code>.mobile-one-of-two</code> layout. For small screens the same
		four elements layout in a two-up grid.
	</p>
	<div class="row">
		<div class="column one-of-four mobile-one-of-two"><div class="alert info">one-of-four (mobile-one-of-two)</div></div>
		<div class="column one-of-four mobile-one-of-two"><div class="alert info">one-of-four (mobile-one-of-two)</div></div>
		<div class="column one-of-four mobile-one-of-two"><div class="alert info">one-of-four (mobile-one-of-two)</div></div>
		<div class="column one-of-four mobile-one-of-two"><div class="alert info">one-of-four (mobile-one-of-two)</div></div>
	</div>

	<p>
		large screens see a <code>.five-up</code> layout, while small screens
		get a <code>.mobile-three-up</code> layout. For small screens the same
		five elements layout in a three-up grid.
	</p>
	<div class="row mobile-three-up five-up">
		<div class="column"><div class="alert info">five-up (mobile-three-up)</div></div>
		<div class="column"><div class="alert info">five-up (mobile-three-up)</div></div>
		<div class="column"><div class="alert info">five-up (mobile-three-up)</div></div>
		<div class="column"><div class="alert info">five-up (mobile-three-up)</div></div>
		<div class="column"><div class="alert info">five-up (mobile-three-up)</div></div>
	</div>
</section>