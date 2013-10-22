<!DOCTYPE html>
<html>
<head>
	<title><?php echo strip_tags($TITLE); ?></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="/template/css/index.css"/>
	<?php

		if ($HEAD) {
			echo $HEAD;
		}

	?>
</head>
<?php

		if ($NAVIGATION) {
			echo '<body class="navigation">';
		} else {
			echo '<body>';
		}

?>

	<header role="banner" class="site-header">
		<a class="site-logo" href="http://www.usgs.gov/" title="U.S. Geological Survey">U.S. Geological Survey</a>
		<a class="jumplink-navigation" href="#site-sectionnav">Jump to Navigation</a>
	</header>

	<main role="main" class="page oncanvas" aria-labelledby="page-header">
		<header class="page-header" id="page-header">
			<h1><?php echo $TITLE; ?></h1>
		</header>

		<div class="page-content">
			<?php

				// setup include guard
				$TEMPLATE = true;
				// include original page for content
				include($_SERVER['SCRIPT_FILENAME']);

			?>
		</div>

		<footer class="page-footer">
			<p>
				<a href="/contactus/<?php
						if ($CONTACT) {
							echo '?to=' . $CONTACT;
						}
					?>">Questions or comments?</a>
			</p>

			<nav id="page-social" class="page-social" aria-label="Share this page">
				<a href="#facebook" class="facebook">Facebook</a>
				<a href="#twitter" class="twitter">Twitter</a>
				<a href="#google-plus" class="google-plus">Google+</a>
				<a href="#email" class="email">Email</a>
			</nav>
		</footer>
	</main>

<?php

	if ($NAVIGATION) {
		echo '<nav' .
				' id="site-sectionnav"' .
				' name="site-sectionnav"' .
				' class="site-sectionnav offcanvas-left"' .
				' aria-label="Section Navigation"' .
				'>' . $NAVIGATION . '</nav>';
	}

?>

	<form role="search" class="site-search" method="get" action="http://search.usa.gov/search">
		<input type="search" name="query" placeholder="Search"/>
		<button type="submit">Search</button>
	</form>

	<footer class="site-footer oncanvas">
		<?php

			if ($SITE_SITENAV) {
				echo '<nav class="site-sitenav" aria-label="Site Navigation">' .
						$SITE_SITENAV . '</nav>';
			}

			if ($SITE_COMMONNAV) {
				echo '<hr/><nav class="site-commonnav">' . $SITE_COMMONNAV . '</nav>';
			}

		?>
	</footer>

	<?php

		if ($FOOT) {
			echo $FOOT;
		}

	?>
</body>
</html>