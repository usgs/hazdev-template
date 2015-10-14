<?php

echo navGroup(navItem('/index.php', 'The Template'),
    navItem('/alert.php', 'Alerts') .
    navItem('/button.php', 'Buttons') .
    navItem('/figcaption.php', 'Figure Caption') .
    navItem('/flexible-grid.php', 'Flexible Grid') .
    navItem('/form.php', 'Forms') .
    navItem('/icons.php', 'Icons') .
    navItem('/jumplist.php', 'Jump List') .
    navItem('/list.php', 'Lists') .
    navItem('/references.php', 'References') .
    navItem('/table.php', 'Tables') .
    navItem('/text.php', 'Text Level Semantics') .
    navItem('/typography.php', 'Typography')
  );

echo navItem('/content.php', 'Content Styles');
