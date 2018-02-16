import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-page',
  templateUrl: './page.component.html',
  styleUrls: ['./page.component.css']
})
export class PageComponent implements OnInit {
  @Input() CONTACT: string;
  @Input() SOCIAL: string;
  @Input() TITLE: string;

  constructor() { }

  ngOnInit() {
  }

  getSocialHref (stub: string): string {
    return (stub
      .replace('{URL}', encodeURIComponent(window.location.toString()))
      .replace('{TITLE}', this.TITLE)
      .replace('{CONTACT}', this.CONTACT)
    );
  }
}
