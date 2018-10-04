import { HazdevNgTemplateService } from './../hazdev-template.service';
import { Component, Inject } from '@angular/core';

import { BehaviorSubject } from 'rxjs';

@Component({
  selector: 'hazdev-template-navigation-group',
  templateUrl: './navigation-group.component.html',
  styleUrls: ['./navigation-group.component.scss']
})
export class NavigationGroupComponent {
  constructor(
    @Inject('Window') private window: any,
    public hazdevService: HazdevNgTemplateService
  ) {}

  /**
   * Function to get width of client browser
   *
   * @returns
   *      Boolean value of size of client browser compared to a breakpoint
   */
  getViewPortWidth(): boolean {
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
  onMobileCheck(event: any): void {
    try {
      if (event.target.className === 'mat-list-item-content') {
        this.hazdevService.emitMobileEvent(this.getViewPortWidth());
      }
    } catch (e) {
      // Ignore click
    }
  }
}
