import { Component, Input } from '@angular/core';
import { Meta } from '@angular/platform-browser';

declare let window: any;
declare let FB: any;

@Component({
  selector: 'hazdev-template-page',
  templateUrl: './page.component.html',
  styleUrls: ['./page.component.scss']
})
export class PageComponent {
  @Input()
  CONTACT: string;
  @Input()
  SOCIAL: string;
  @Input()
  TITLE: string;

  constructor(private meta: Meta) {}

  getSocialHref(stub: string): string {
    return stub
      .replace('{URL}', encodeURIComponent(window.location.toString()))
      .replace('{TITLE}', this.TITLE)
      .replace('{CONTACT}', this.CONTACT);
  }

  onClick(e) {
    if (!e.target.classList.contains('facebook')) {
      return;
    }

    // Do not follow sharer link
    e.preventDefault();

    // Load Facebook SDK
    window.fbAsyncInit = function() {
      FB.init({
        appId: '124285848214697',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v2.10'
      });
    };

    (function(d, s, id) {
      let js;
      const fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) {
        return;
      }

      js = d.createElement(s);
      js.id = id;
      js.src = '//connect.facebook.net/en_US/sdk.js';
      fjs.parentNode.insertBefore(js, fjs);
    })(document, 'script', 'facebook-jssdk');

    // Set facebook meta tags
    const metaTags = this.getMetaTags();
    if (window && window.FB && metaTags) {
      FB.ui({
        method: 'share_open_graph',
        action_type: 'og.likes',
        action_properties: JSON.stringify({
          object: {
            'og:description': metaTags.description,
            'og:title': metaTags.title,
            'og:url': metaTags.url
          }
        })
      });
    }
  }

  /**
   * Get meta tags that may have been set dynamicall
   */
  getMetaTags() {
    const description = this.meta.getTag('property="og:description"');
    const title = this.meta.getTag('property="og:title"');

    return {
      description: description ? description.content : null,
      title: title ? description.title : null,
      url: window.location.href
    };
  }
}
