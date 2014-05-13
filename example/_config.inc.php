<?php

$SITE_URL = 'earthquake.usgs.gov';

$SITE_SITENAV =
		navItem('#earthquakes', 'Earthquakes') .
		navItem('#hazards', 'Hazards') .
		navItem('#data', 'Data') .
		navItem('#learn', 'Learn') .
		navItem('/flexible-grid.php', 'Monitoring') .
		navItem('#research', 'Research');

$SITE_COMMONNAV =
		navItem('#home', 'Home') .
		navItem('#aboutus', 'About Us') .
		navItem('#contactus', 'Contact Us') .
		navItem('#legal', 'Legal') .
		navItem('#partners', 'Partners');

$HEAD = 
		// site theme
		'<link rel="stylesheet" href="/css/index.css"/>' .

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

