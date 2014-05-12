<?php

echo navItem('/index.php', 'Template Intro Page');

echo navGroup('Default Extensions',
		navItem('/flexible-grid.php', 'Flexible Grid') .
		navItem('/typography.php', 'Typography')
	);

echo navGroup('Additional Extensions',
		navItem('/imagelist.php', 'Image List') .
		navItem('/responsive-table.php', 'Responsive Table')
	);