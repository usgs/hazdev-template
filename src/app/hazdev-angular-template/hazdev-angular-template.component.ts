import { ChangeDetectorRef, Component, Input, OnDestroy, OnInit, ViewEncapsulation } from '@angular/core';
import { MediaMatcher } from '@angular/cdk/layout';

import { environment } from '../../environments/environment';
import { MenuService } from '../menu.service';

@Component({
  selector: 'app-hazdev-angular-template',
  templateUrl: './hazdev-angular-template.component.html',
  styleUrls: ['./hazdev-angular-template.component.css'],
  encapsulation: ViewEncapsulation.None
})
export class HazdevAngularTemplateComponent implements OnInit, OnDestroy {

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
  @Input() SITE_COMMONNAV: any[];
  @Input() SITE_SITENAV: any[];
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
