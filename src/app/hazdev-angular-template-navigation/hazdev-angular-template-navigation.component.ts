import { Component, Input, OnInit, ViewEncapsulation } from '@angular/core';

import { NavigationItemComponent } from './navigation-item/navigation-item.component';
import { NavigationGroupComponent } from './navigation-group/navigation-group.component';

@Component({
  selector: 'app-hazdev-angular-template-navigation',
  templateUrl: './hazdev-angular-template-navigation.component.html',
  styleUrls: ['./hazdev-angular-template-navigation.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class HazdevAngularTemplateNavigationComponent implements OnInit {
  @Input() NAVIGATION: any[];
  @Input() SITE_SITENAV: any[];
  @Input() SITE_URL: string;

  constructor() { }

  ngOnInit() {
  }

}
