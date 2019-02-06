import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  COOPERATOR = {
    linkUrl: 'https://earthquake.usgs.gov/data/comcat/contributor/ci/',
    imageUrl: 'https://earthquake.usgs.gov/data/comcat/logos/ci.svg',
    description:
      'California Integrated Seismic Network: Southern California Seismic Network (Caltech, USGS Pasadena, and Partners)'
  };

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
    { navRouterLink: '/', display: 'Working Router Link' }
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
    // { navHrefLink: '/', display: 'Home' },
    // { navHrefLink: '/aboutus/', display: 'About Us' },
    // { navHrefLink: '/contactus/', display: 'Contacts' },
    // { navHrefLink: '/legal.php', display: 'Legal' }
    {
      navHrefLink: 'https://www.doi.gov/privacy',
      display: 'DOI Privacy Policy'
    },
    {
      navHrefLink: 'https://www.usgs.gov/policies-and-notices',
      display: 'Legal'
    },
    {
      navHrefLink:
        'https://www.usgs.gov/accessibility-and-us-geological-survey',
      display: 'Accessibility'
    },
    { navHrefLink: 'https://www.usgs.gov/sitemap', display: 'Site Map' },
    { navHrefLink: 'https://answers.usgs.gov/', display: 'Contact USGS' }
  ];
}
