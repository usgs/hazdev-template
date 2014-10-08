<?php

echo navItem('/index.php', 'Template Intro Page');

echo navGroup('Default Extensions',
		navItem('/flexible-grid.php', 'Flexible Grid') .
		navItem('/list.php', 'Lists') .
		navItem('/text.php', 'Text Level Semantics') .
		navItem('/typography.php', 'Typography')
	);

echo navGroup('Additional Extensions',
		navItem('/alert.php', 'Alerts') .
		navItem('/button.php', 'Buttons') .
		navItem('/figcaption.php', 'Figure Caption') .
		navItem('/form.php', 'Forms') .
		navItem('/imagelist.php', 'Image List') .
		navItem('/jumplist.php', 'Jump List') .
		navItem('/references.php', 'References') .
		navItem('/responsive-table.php', 'Responsive Table')
	);
