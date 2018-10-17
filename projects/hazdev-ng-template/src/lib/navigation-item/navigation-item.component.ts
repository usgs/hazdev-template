import { Component, Input, Inject } from '@angular/core';
import { HazdevTemplateService } from '../hazdev-template.service';

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

  constructor(
    @Inject('Window') private window: any,
    public hazdevService: HazdevTemplateService
  ) {}

  /**
   * Function to get width of client browser
   *
   * @returns
   *      Boolean value of size of client browser compared to a breakpoint
   */
  checkForMobile(): boolean {
    try {
      return this.window.screen.width < 768;
    } catch (e) {
      return false;
    }
  }

  /**
   * Click listener function on hazdev navigation group items
   *
   * @param event
   *      The click event target
   */
  onClick(event: any): void {
    try {
      if (event.target.className === 'mat-list-item-content') {
        this.hazdevService.emitClickEvent(this.checkForMobile());
      }
    } catch (e) {
      // Ignore click
    }
  }
}
