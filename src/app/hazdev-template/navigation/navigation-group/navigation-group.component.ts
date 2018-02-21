import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-navigation-group',
  templateUrl: './navigation-group.component.html',
  styleUrls: ['./navigation-group.component.css']
})
export class NavigationGroupComponent implements OnInit {
  @Input() href: string;
  @Input() routerLink: string;
  @Input() display: string;

  constructor() { }

  ngOnInit() {
  }

}
