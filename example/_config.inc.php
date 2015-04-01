<?php

$SITE_COMMONNAV =
    navItem('#home', 'Home') .
    navItem('#aboutus', 'About Us') .
    navItem('#contactus', 'Contact Us') .
    navItem('#legal', 'Legal') .
    navItem('#partners', 'Partners');

$THEME = (isset($_GET['theme'])) ? $_GET['theme'] : 'default';

if ($THEME === 'earthquake') {
  $THEME_CSS =
    '<link rel="stylesheet" href="/theme/site/earthquake/index.css"/>';

  $SITE_URL = 'earthquake.usgs.gov';
  $SITE_SITENAV =
    navItem('#earthquakes', 'Earthquakes') .
    navItem('#hazards', 'Hazards') .
    navItem('#data', 'Data') .
    navItem('#learn', 'Learn') .
    navItem('/flexible-grid.php', 'Monitoring') .
    navItem('#research', 'Research');
} else if ($THEME === 'geomag') {
  $THEME_CSS =
    '<link rel="stylesheet" href="/theme/site/geomag/index.css"/>';

  $SITE_URL = 'geomag.usgs.gov';
  $SITE_SITENAV =
    navItem('#monitoring', 'Monitoring') .
    navItem('#data', 'Data &amp; Products') .
    navItem('#research', 'Research') .
    navItem('#learn', 'Learn') .
    navItem('#services', 'Services') .
    navItem('#partners', 'Partners');
} else if ($THEME === 'landslides') {
  $THEME_CSS =
    '<link rel="stylesheet" href="/theme/site/landslides/index.css"/>';

  $SITE_URL = 'landslides.usgs.gov';
  $SITE_SITENAV =
    navItem('#hazards', 'Hazards') .
    navItem('#monitoring', 'Monitoring') .
    navItem('#state_local', 'State &amp; Local') .
    navItem('#learn', 'Learn') .
    navItem('#research', 'Research');
} else {
  $THEME_CSS =
    '<link rel="stylesheet" href="/theme/site/default/index.css"/>';

  $SITE_URL = 'www.usgs.gov';
  $SITE_SITENAV =
    navItem('#navitem1', 'Nav Item 1') .
    navItem('#navitem2', 'Nav Item 2') .
    navItem('#navitem3', 'Nav Item 3') .
    navItem('#navitem4', 'Nav Item 4') .
    navItem('#navitem5', 'Nav Item 5') .
    navItem('#navitem6', 'Nav Item 6');
}

$HEAD = $THEME_CSS .
    // page head content
    ($HEAD ? $HEAD : '') .

    // description meta
    '<meta name="description" content="' .
        'USGS Earthquake Hazards Program, responsible for' .
        ' monitoring, reporting, and researching earthquakes and' .
        ' earthquake hazards' .
    '"/>' .

    // keywords meta
    '<meta name="keywords" content="' .
        'aftershock,earthquake,epicenter,fault,foreshock,geologist,' .
        'geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,' .
        'magnitude scale,mercalli,plate,richter,seismic,seismicity,seismogram,' .
        'seismograph,seismologist,seismology,subduction,tectonics,tsunami,quake,' .
        'sismologico,sismologia' .
    '"/>';
