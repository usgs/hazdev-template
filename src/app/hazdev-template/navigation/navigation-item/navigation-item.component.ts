import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-navigation-item',
  templateUrl: './navigation-item.component.html',
  styleUrls: ['./navigation-item.component.css']
})
export class NavigationItemComponent implements OnInit {
  @Input() href: string;
  @Input() title: string;

  constructor() { }

  ngOnInit() {
  }

}
