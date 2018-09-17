import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  COOPERATOR = 'ci';

  TITLE = 'Hazdev Angular Template';

  NAVIGATION = [
    {
      header: { display: 'Geoserve Web Services' },
      links: [
        { navHrefLink: '/ws/geoserve/places.php', display: 'Places Service' },
        { navHrefLink: '/ws/geoserve/regions.php', display: 'Regions Service' },
        { navHrefLink: '/ws/geoserve/layers.php', display: 'Layers Service' }
      ]
    },
    { navHrefLink: '/', display: 'Interactive Interface' },
    { navRouterLink: '/any/link/anywhere', display: 'Working Router Link' }
  ];

  SITE_SITENAV = [
    { navHrefLink: '/earthquakes/', display: 'Earthquakes' },
    { navHrefLink: '/hazards/', display: 'Hazards' },
    { navHrefLink: '/data/', display: 'Data & Products' },
    { navHrefLink: '/learn/', display: 'Learn' },
    { navHrefLink: '/monitoring/', display: 'Monitoring' },
    { navHrefLink: '/research/', display: 'Research' }
  ];

  SITE_COMMONNAV = [
    { navHrefLink: '/', display: 'Home' },
    { navHrefLink: '/aboutus/', display: 'About Us' },
    { navHrefLink: '/contactus/', display: 'Contacts' },
    { navHrefLink: '/legal.php', display: 'Legal' }
  ];
}
