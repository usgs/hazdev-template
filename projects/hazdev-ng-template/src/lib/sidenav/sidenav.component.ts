import { Component, Input } from '@angular/core';

@Component({
  selector: 'hazdev-template-sidenav',
  templateUrl: './sidenav.component.html',
  styleUrls: ['./sidenav.component.scss']
})
export class SidenavComponent {
  @Input()
  opened: boolean;

  toggle() {
    this.opened = !this.opened;
  }
}
