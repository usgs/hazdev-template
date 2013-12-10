<?php

$SITE_TITLE = 'Earthquake Hazards Program';
$SITE_URL = 'earthquake.usgs.gov';


$SITE_DESCRIPTION = 'USGS Earthquake Hazards Program, responsible for' .
		' monitoring, reporting, and researching earthquakes and' .
		' earthquake hazards';

$SITE_KEYWORDS = 'aftershock,earthquake,epicenter,fault,foreshock,geologist,' .
		'geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,' .
		'magnitude scale,mercalli,plate,richter,seismic,seismicity,seismogram,' .
		'seismograph,seismologist,seismology,subduction,tectonics,tsunami,quake,' .
		'sismologico,sismologia';

$SITE_SITENAV =
		navItem('#earthquakes', 'Earthquakes') .
		navItem('#hazards', 'Hazards') .
		navItem('#data', 'Data') .
		navItem('#learn', 'Learn') .
		navItem('#monitoring', 'Monitoring') .
		navItem('#research', 'Research');

$SITE_COMMONNAV =
		navItem('#home', 'Home') .
		navItem('#aboutus', 'About Us') .
		navItem('#contactus', 'Contact Us') .
		navItem('#legal', 'Legal') .
		navItem('#partners', 'Partners');


// add site css
if (!isset($HEAD)) {
	$HEAD = '';
}
$HEAD = '<link rel="stylesheet" href="/css/index.css"/>' . $HEAD;

