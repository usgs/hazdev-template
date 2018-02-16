import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-hazdev-angular-template-page',
  templateUrl: './hazdev-angular-template-page.component.html',
  styleUrls: ['./hazdev-angular-template-page.component.css']
})
export class HazdevAngularTemplatePageComponent implements OnInit {
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
