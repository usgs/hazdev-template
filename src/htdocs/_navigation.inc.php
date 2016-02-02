<?php

echo navGroup(navItem('/theme/index.php', 'The Template'),
    navItem('/theme/alert.php', 'Alerts') .
    navItem('/theme/button.php', 'Buttons') .
    navItem('/theme/form.php', 'Forms') .
    navItem('/theme/icons.php', 'Icons') .
    navItem('/theme/images.php', 'Images') .
    navItem('/theme/jumplist.php', 'Jump Lists') .
    navItem('/theme/flexible-grid.php', 'Layout/Flexible Grid') .
    navItem('/theme/list.php', 'Lists') .
    navItem('/theme/minimal.php', 'Minimal') .
    navItem('/theme/references.php', 'References') .
    navItem('/theme/table.php', 'Tables') .
    navItem('/theme/text.php', 'Text Level Semantics') .
    navItem('/theme/typography.php', 'Typography')
  );

echo navItem('/theme/content.php', 'Content Styles');

echo navItem('/theme/cooperator.php', 'Cooperator Logos');
