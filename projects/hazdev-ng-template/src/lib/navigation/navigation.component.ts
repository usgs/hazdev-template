import { Component, Input, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'hazdev-template-navigation',
  templateUrl: './navigation.component.html',
  styleUrls: ['./navigation.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class NavigationComponent {
  @Input()
  NAVIGATION: any[];
  @Input()
  SITE_SITENAV: any[];
  @Input()
  SITE_URL: string;
}
