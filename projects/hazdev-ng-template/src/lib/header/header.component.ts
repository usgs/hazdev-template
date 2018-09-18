import { Component, Input } from '@angular/core';
import { Cooperator } from '../cooperator';

@Component({
  selector: 'hazdev-template-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent {

  @Input()
  cooperator: Cooperator;
}
