import { Component, Input } from '@angular/core';

@Component({
  selector: 'hazdev-template-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent {

  @Input()
  cooperator: string;
}
