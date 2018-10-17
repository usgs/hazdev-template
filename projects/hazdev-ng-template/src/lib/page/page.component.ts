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

  sdkStatus = false;

  constructor(public meta: Meta) {}

  /**
   * Get a description for the facebook share link
   */
  getDescription() {
    let value;

    if (this.meta.getTag('property="og:description"')) {
      value = this.meta.getTag('property="og:description"').content;
    } else if (document.querySelector('meta[name="description"]')) {
      value = document
        .querySelector('meta[name="description"]')
        .getAttribute('content');
    } else {
      value = '';
    }

    return value;
  }

  /**
   * Get meta tags that may have been set dynamically
   */
  getMetaTags() {
    return {
      description: this.getDescription(),
      title: this.getTitle(),
      url: window.location.href
    };
  }

  /**
   * Get a title for the facebook share link
   */
  getTitle() {
    let value;

    if (this.meta.getTag('property="og:title"')) {
      value = this.meta.getTag('property="og:title"').content;
    } else if (this.TITLE) {
      value = this.TITLE;
    } else {
      value = window.location.href;
    }

    return value;
  }

  getSocialHref(stub: string): string {
    return stub
      .replace('{URL}', encodeURIComponent(window.location.toString()))
      .replace('{TITLE}', this.TITLE)
      .replace('{CONTACT}', this.CONTACT);
  }

  /**
   * Load Facebook SDK
   */
  loadFacebookSdk() {
    // Initialize the facebook app
    window.fbAsyncInit = () => {
      FB.init({
        appId: '333236657410303',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v2.10'
      });
      this.sdkStatus = true;
      this.showFacebookSharePopup();
    };

    // Load the Facebook SDK
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
  }

  /**
   * Click handler for facebook sharing link
   *
   * @param e click event
   */
  onClick(e) {
    console.log(e);
    if (!e.target.classList.contains('facebook')) {
      return;
    }

    console.log(e);

    // Do not follow sharer link
    e.preventDefault();

    // called everytime after the SDK is loaded
    this.showFacebookSharePopup();

    // Load Facebook SDK
    this.loadFacebookSdk();
  }

  /**
   * Pop up "Share on facebook" dialog
   */
  showFacebookSharePopup() {
    // This will cause a "pop-up blocked" message to appear because
    // the FB.ui call is not in the initial onClick event loop
    if (this.sdkStatus) {
      const metaTags = this.getMetaTags();
      FB.ui({
        method: 'share_open_graph',
        action_type: 'og.shares',
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
}
