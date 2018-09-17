import { Component, OnInit, Input } from '@angular/core';
import { CooperatorService } from '../cooperator.service';

@Component({
  selector: 'hazdev-template-cooperator',
  templateUrl: './cooperator.component.html',
  styleUrls: ['./cooperator.component.scss']
})
export class CooperatorComponent implements OnInit {

  @Input()
  cooperator: string;

  constructor(public service: CooperatorService) { }

  ngOnInit() {
  }

}
