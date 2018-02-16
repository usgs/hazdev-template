import { Component, Input, OnInit, ViewEncapsulation } from '@angular/core';

import { NavigationItemComponent } from './navigation-item/navigation-item.component';
import { NavigationGroupComponent } from './navigation-group/navigation-group.component';

@Component({
  selector: 'app-navigation',
  templateUrl: './navigation.component.html',
  styleUrls: ['./navigation.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class NavigationComponent implements OnInit {
  @Input() NAVIGATION: any[];
  @Input() SITE_SITENAV: any[];
  @Input() SITE_URL: string;

  constructor() { }

  ngOnInit() {
  }

}
