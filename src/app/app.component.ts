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


  SITE_COMMONNAV = [
    {
      navHrefLink: 'https://www.doi.gov/',
      display: 'U.S. Department of the Interior'
    },
    {
      navHrefLink: 'https://www.doioig.gov/',
      display: 'DOI Inspector General'
    },
    {
      navHrefLink: 'https://www.whitehouse.gov/',
      display: 'White House'
    },
    {
      navHrefLink: 'https://www.whitehouse.gov/omb/management/egov/',
      display: 'E-gov'
    },
    {
      navHrefLink: 'https://www.doi.gov/pmb/eeo/no-fear-act',
      display: 'No Fear Act'
    },
    {
      navHrefLink: 'https://www2.usgs.gov/foia',
      display: 'FOIA'
     }
  ];

  SITE_INTERIORNAV = [
    {
      navHrefLink: 'https://www.doi.gov/privacy',
      display: 'DOI Privacy Policy'
    },
    {
      navHrefLink: 'https://www.usgs.gov/laws/policies_notices.html',
      display: 'Legal'
    },
    {
      navHrefLink: 'https://www2.usgs.gov/laws/accessibility.html',
      display: 'Accessibility'
    },
    {
      navHrefLink: 'https://www.usgs.gov/sitemap.html',
      display: 'Site Map'
    },
    {
      navHrefLink: 'https://answers.usgs.gov/',
      display: 'Contact USGS'
    }
  ];

  SITE_SITENAV = [
    { navHrefLink: '/earthquakes/', display: 'Earthquakes' },
    { navHrefLink: '/hazards/', display: 'Hazards' },
    { navHrefLink: '/data/', display: 'Data & Products' },
    { navHrefLink: '/learn/', display: 'Learn' },
    { navHrefLink: '/monitoring/', display: 'Monitoring' },
    { navHrefLink: '/research/', display: 'Research' }
  ];

  SITE_SOCIAL = [
    { navHrefLink: 'https://twitter.com/usgs', display: 'Twitter', class: 'fa fa-twitter-square' },
    { navHrefLink: 'https://facebook.com/usgeologicalsurvey', display: 'Facebook', class: 'fa fa-facebook-square' },
    { navHrefLink: 'https://github.com/usgs', display: 'GitHub', class: 'fa fa-github' },
    { navHrefLink: 'https://flickr.com/usgeologicalsurvey', display: 'Flickr', class: 'fa fa-flickr' },
    { navHrefLink: 'http://youtube.com/usgs', display: 'YouTube', class: 'fa fa-youtube-play' },
    { navHrefLink: 'https://instagram.com/usgs', display: 'Instagram', class: 'fa fa-instagram' },
  ];
}
