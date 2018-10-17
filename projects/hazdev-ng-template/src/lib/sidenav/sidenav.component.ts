import { HazdevTemplateService } from './../hazdev-template.service';
import { Component, Input, OnDestroy, OnInit } from '@angular/core';
import { Subscription } from 'rxjs';
import { NavigationGroupComponent } from './../navigation-group/navigation-group.component';

@Component({
  selector: 'hazdev-template-sidenav',
  templateUrl: './sidenav.component.html',
  styleUrls: ['./sidenav.component.scss']
})
export class SidenavComponent implements OnInit, OnDestroy {
  navGroupSub: Subscription;
  @Input()
  opened: boolean;

  constructor(public hazdevService: HazdevTemplateService) {}

  ngOnDestroy() {
    this.navGroupSub.unsubscribe();
    this.navGroupSub = null;
  }

  ngOnInit() {
    this.navGroupSub = this.hazdevService.mobileEmitter.subscribe(
      (isMobile: boolean) => {
        if (isMobile) {
          this.toggle();
        }
      }
    );
  }

  toggle() {
    this.opened = !this.opened;
  }
}
