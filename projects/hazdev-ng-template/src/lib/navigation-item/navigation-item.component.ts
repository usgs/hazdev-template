import { Component, Input } from '@angular/core';

@Component({
  selector: 'hazdev-template-navigation-item',
  templateUrl: './navigation-item.component.html',
  styleUrls: ['./navigation-item.component.scss']
})
export class NavigationItemComponent {
  @Input()
  navHrefLink: string;
  @Input()
  navRouterLink: any[] | string;
  @Input()
  display: string;
}
