import { Component, Input, OnInit } from '@angular/core';
import { RouterLink } from '@angular/router';


@Component({
  selector: 'app-navigation-item',
  templateUrl: './navigation-item.component.html',
  styleUrls: ['./navigation-item.component.css']
})
export class NavigationItemComponent implements OnInit {
  @Input() navHrefLink: string;
  @Input() navRouterLink: any[] | string;
  @Input() display: string;


  constructor() {}

  ngOnInit() {
  }

}
