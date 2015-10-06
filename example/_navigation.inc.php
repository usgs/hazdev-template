<?php

echo navGroup(navItem('/index.php', 'The Template'),
    navItem('/button.php', 'Buttons') .
    navItem('/flexible-grid.php', 'Flexible Grid') .
    navItem('/form.php', 'Forms') .
    navItem('/list.php', 'Lists') .
    navItem('/icons.php', 'Icons') .
    navItem('/text.php', 'Text Level Semantics') .
    navItem('/typography.php', 'Typography')
  );

echo navGroup(navItem('/additional-extensions.php','Additional Extensions'),
    navItem('/alert.php', 'Alerts') .
    navItem('/figcaption.php', 'Figure Caption') .
    navItem('/jumplist.php', 'Jump List') .
    navItem('/references.php', 'References') .
    navItem('/responsive-table.php', 'Responsive Table')
  );

echo navItem('/content.php', 'Content Styles');
