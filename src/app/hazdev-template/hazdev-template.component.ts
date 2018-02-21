import { ChangeDetectorRef, Component, Input, OnDestroy, OnInit, ViewEncapsulation } from '@angular/core';
import { MediaMatcher } from '@angular/cdk/layout';

import { environment } from '../../environments/environment';
import { MenuService } from '../menu.service';

@Component({
  selector: 'app-hazdev-template',
  templateUrl: './hazdev-template.component.html',
  styleUrls: ['./hazdev-template.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class HazdevTemplateComponent implements OnInit, OnDestroy {

  mobileQuery: MediaQueryList;
  private _mobileQueryListener: () => void;
  public href = '';

  @Input() TITLE: string;
  @Input() CONTACT = 'mailto:noreply@example.com';
  @Input() SOCIAL: any[] = [
    {
      display: 'Facebook',
      href: 'https://www.facebook.com/sharer.php?u={URL}',
      class: 'facebook'
    },
    {
      display: 'Twitter',
      href: 'https://twitter.com/intent/tweet?url={URL}&text=USGS%20%7C%20{TITLE}',
      class: 'twitter'
    },
    {
      display: 'Google',
      href: 'https://plusone.google.com/_/+1/confirm?url={URL}',
      class: 'google-plus'
    },
    {
      display: 'Email',
      href: '{CONTACT}?to=&subject={TITLE}&body={URL}',
      class: 'email'
    }
  ];
  @Input() NAVIGATION: any[] = [];
  @Input() SITE_COMMONNAV: any[] = [
    {navHrefLink: '/', display: 'Home'},
    {navHrefLink: '/aboutus/', display: 'About Us'},
    {navHrefLink: '/contactus/', display: 'Contacts'},
    {navHrefLink: '/legal.php', display: 'Legal'}
  ];
  @Input() SITE_SITENAV: any[] = [
    {navHrefLink: '/earthquakes/', display: 'Earthquakes'},
    {navHrefLink: '/hazards/', display: 'Hazards'},
    {navHrefLink: '/data/', display: 'Data & Products'},
    {navHrefLink: '/learn/', display: 'Learn'},
    {navHrefLink: '/monitoring/', display: 'Monitoring'},
    {navHrefLink: '/research/', display: 'Research'}
  ];
  @Input() SITE_URL = environment.siteUrl;

  constructor (
    changeDetectorRef: ChangeDetectorRef,
    media: MediaMatcher,
    public menuService: MenuService
  ) {
    this.mobileQuery = media.matchMedia('(max-width: 768px)');
    this._mobileQueryListener = () => changeDetectorRef.detectChanges();
    this.mobileQuery.addListener(this._mobileQueryListener);
  }

  ngOnDestroy(): void {
    try {
      this.mobileQuery.removeListener(this._mobileQueryListener);
    } catch (e) {
      // Ignore
    }
  }

  ngOnInit() {
  }

  onSideNavChange(event: any): void {
    // pass true or false indicating the state of the menu
    this.menuService.setState(event);
  }
}
