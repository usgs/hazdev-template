import { Component, Input } from '@angular/core';
import { Cooperator } from '../cooperator';

@Component({
  selector: 'hazdev-template-cooperator',
  styleUrls: ['./cooperator.component.scss'],
  templateUrl: './cooperator.component.html'
})
export class CooperatorComponent {
  @Input()
  cooperator: Cooperator;
}
