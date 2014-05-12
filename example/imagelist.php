<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'Image List Example';
	$NAVIGATION = true;

	$HEAD = '
		<link rel="stylesheet" href="/css/flexible-grid.css"/>
		<link rel="stylesheet" href="/css/imagelist.css"/>
	';

	$FOOT = '
		<script src="http://localhost:35729/livereload.js?snipver=1"></sciript>
	';

	$gist = 'https://gist.github.com/emartinez-usgs/11158054.js';

	include 'classes/ImageList.class.php';
	include 'template.inc.php';
}

?>

<p>
	This page shows <a href="#usage">example usage</a> and <a href="#output">
	corresponding output</a> for the ImageList content pattern.
</p>

<h2 id="usage">Example Usage</h2>
<p>
	Below is an example of how to use the ImageList content pattern. This
	includes:
</p>
<ul>
	<li>
		Including the content pattern utilities on your page (lines 7 and 11).
	</li>
	<li>Creating a new image list object (line 24).</li>
	<li>Adding items to the image list object (line 27).</li>
	<li>Rending the list on the page (line 30).</li>
</ul>
<script src="<?php print $gist; ?>?file=example-01.php"></script>

<h2 id="output">Example Output</h2>
<p>
	The output below corresponds to the example above.
</p>
<?php
	$simpleList = new ImageList();
	$simpleList->addItem('http://some.host.com/some/page/',
			'http://placehold.it/200x200', 'This is the title for this list item',
			'This is the content for this list item. It may contain any HTML.');
	$simpleList->display();
?>

<h2 id="additional-output">Additional Output</h2>
<p>
	This section contains a second image list. The contents of this list are
	meant to highlight how the list responds with varying content. This example
	does not relate in any way to the example usage from above.
</p>

<?php
$imageList = new ImageList();
$imageList->addItem('#', 'http://placehold.it/400x400',
		'Example with large image and short text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans.');


$imageList->addItem('#', 'http://placehold.it/400x400',
		'Example with large image and moderate text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.');


$imageList->addItem('#', 'http://placehold.it/400x400',
		'Example with large image and long text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.' .
		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.' .
		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.');




$imageList->addItem('#', 'http://placehold.it/225x225',
		'Example with moderate image and short text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans.');


$imageList->addItem('#', 'http://placehold.it/225x225',
		'Example with moderate image and moderate text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.');


$imageList->addItem('#', 'http://placehold.it/225x225',
		'Example with moderate image and long text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.' .
		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.' .
		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.');




$imageList->addItem('#', 'http://placehold.it/80x80',
		'Example with small image and short text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans.');


$imageList->addItem('#', 'http://placehold.it/80x80',
		'Example with small image and moderate text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.');


$imageList->addItem('#', 'http://placehold.it/80x80',
		'Example with small image and long text.',

		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.' .
		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.' .
		'Lorem ipsum dolor sit amet, eu mea vivendum incorrupte, an mei prima ' .
		'nusquam reformidans. Accusamus maiestatis vel ut, eam cu possim oblique ' .
		'periculis. Eam ea summo signiferumque, erant corpora eu vix. Nam no ' .
		'iudicabit temporibus, mea impedit ponderum cu. Mel sapientem ' .
		'adversarium ex.');

$imageList->display();
?>
