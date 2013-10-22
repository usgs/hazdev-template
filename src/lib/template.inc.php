<?php

// page has already "configured" template variables


// include template level functions
include('functions.inc.php');

// finish configuring template based on site and template defaults
include('config.inc.php');

// begin layout, which includes original page for content
include('layout.inc.php');

// layout is complete, exit before returnning to original page
exit();