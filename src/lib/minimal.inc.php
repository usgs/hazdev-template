<?php

// page has already "configured" template variables

// include template level functions
include_once 'functions.inc.php';

// minimal template does not include "site" configuration

?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo strip_tags($TITLE); ?></title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php

  if (isset($HEAD)) {
    echo $HEAD;
  }

  ?>
</head>
<body>
<?php

// setup include guard
$TEMPLATE = true;
// include original page for content
include($_SERVER['SCRIPT_FILENAME']);

if (isset($FOOT)) {
  echo $FOOT;
}

?>
</body>
</html>
<?php

// layout is complete, exit before returnning to original page
exit();
