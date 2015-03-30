<!DOCTYPE html>
<html>
<head>
  <title><?php echo strip_tags($TITLE); ?></title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php

    if ($HEAD) {
      echo $HEAD;
    }

  ?>
</head>
<body>

  <header role="banner" class="site-header">
    <a class="site-logo" href="/" title="U.S. Geological Survey">
    </a>
    <a class="jumplink-navigation" href="#site-sectionnav">Jump to Navigation</a>
  </header>

  <main role="main" class="page" aria-labelledby="page-header">
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

    <?php

      if ($CONTACT_URL || $SOCIAL) {

        echo '<footer class="page-footer">';

        if ($CONTACT_URL) {
          echo '<p><a href="' .
              str_replace('{CONTACT}', $CONTACT, $CONTACT_URL) .
              '">Questions or comments?</a></p>';
        }

        if ($SOCIAL) {
          $pageUrl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'Off')
              ? 'https://' : 'http://') .
              $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

          $replacements = array(
              '{URL}' => htmlspecialchars($pageUrl),
              '{TITLE}' => htmlspecialchars($TITLE));
          $urlReplacements = array(
              '{URL}' => urlencode($pageUrl),
              '{TITLE}' => urlencode($TITLE));

          echo '<nav class="page-social" aria-label="Share this page">';
          foreach ($SOCIAL as $link) {
            echo ' <a' .
                ' href="' . htmlspecialchars(strtr($link['url'], $urlReplacements)) . '"' .
                ' title="Share using ' . htmlspecialchars($link['name']) . '"' .
                ' class="' . $link['class'] . '"' .
                ' data-link-template="' . htmlspecialchars($link['url']) . '"' .
                '>' . htmlspecialchars($link['name']) . '</a>';
          }
          echo '</nav>';
        }

        echo '</footer>';

      }

    ?>
  </main>

  <nav class="site-footer">
    <?php

      if ($NAVIGATION) {
        echo '<section' .
            ' id="site-sectionnav"' .
            ' class="site-sectionnav"' .
            ' aria-label="Section Navigation"' .
            '>' . $NAVIGATION . '</section>';
      }

      if ($SITE_SITENAV) {
        echo '<section class="site-sitenav" aria-label="Site Navigation">' .
            $SITE_SITENAV . '</section>';
      }

    ?>

    <form class="site-search" role="search" action="http://search.usa.gov/search" method="get" accept-charset="UTF-8">
      <input name="utf8" type="hidden" value="✓"/>
      <input name="affiliate" type="hidden" value="usgs"/>
      <input name="sitelimit" type="hidden" value="<?php echo $SITE_URL; ?>"/>
      <input id="query" name="query" type="search" placeholder="Search..." title="Search"/>
      <button type="submit">Search</button>
    </form>
  </nav>

  <?php

    if ($SITE_COMMONNAV) {
      echo '<footer class="site-commonnav">' . $SITE_COMMONNAV . '</footer>';
    }

    // IE <= 9 polyfills
    echo '<!--[if lte IE 9]>';
    echo '<script src="/theme/js/classList.js"></script>';
    echo '<![endif]-->';
    echo '<script src="/theme/js/index.js"></script>';

    if ($FOOT) {
      echo $FOOT;
    }

    // universal analytics
    if (isset($UNIVERSAL_ANALYTICS) && $UNIVERSAL_ANALYTICS) {
      $analyticsUrl = '/theme/js/analytics.js?agency=DOI';
      if (isset($GA_KEY) && $GA_KEY !== '') {
        $analyticsUrl .= '&amp;pua=' . $GA_KEY;
      }
      echo '<script id="_fed_an_ua_tag" src="' . $analyticsUrl . '"></script>';
    } else if (isset($GA_KEY) && $GA_KEY !== '') {?>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php print $GA_KEY; ?>']);
      _gaq.push(['_gat.anonymizeIp']);
      _gaq.push(['_trackPageview']);
      (function () {
        var ga = document.createElement('script');
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ?
            'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        document.querySelector('script').parentNode.appendChild(ga);
      })();
    </script>
    <?php
    }
  ?>
</body>
</html>
