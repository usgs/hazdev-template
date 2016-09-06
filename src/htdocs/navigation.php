<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Navigation';
  $NAVIGATION = true;
  $HEAD = '
    <style>
      main .site-sectionnav {
        border-left: 1px solid #ddd;
      }
    </style>
  ';

  include 'template.inc.php';

}
?>

<p>Examples of different navigation configuration options.</p>


<h3>Top Level Navigation</h3>
<div class="site-sectionnav">
<?php
echo navItem('#', 'First Item') .
    navItem('#', 'Second Item') .
    navItem('#', 'Third Item') .
    navItem('#', 'Fourth Item');
?>
</div>


<h3>Navigation with Clickable Header</h3>
<div class="site-sectionnav">
<?php
echo navGroup(navItem('#', 'Header'),
    navItem('#', 'First Item') .
    navItem('#', 'Second Item') .
    navItem('#', 'Third Item') .
    navItem('#', 'Fourth Item')
  );
?>
</div>


<h3>Navigation <i>without</i> Clickable Header</h3>
<div class="site-sectionnav">
<?php
echo navGroup('Header',
    navItem('#', 'First Item') .
    navItem('#', 'Second Item') .
    navItem('#', 'Third Item') .
    navItem('#', 'Fourth Item')
  );
?>
</div>


<h3>Navigation with Up-One-Level Link</h3>
<div class="site-sectionnav">
<?php
echo '<a href="#" class="up-one-level">Up One Level Link</a>';
echo navGroup(navItem('#', 'Header'),
    navItem('#', 'First Item') .
    navItem('#', 'Second Item') .
    navItem('#', 'Third Item') .
    navItem('#', 'Fourth Item')
  );
?>
</div>
