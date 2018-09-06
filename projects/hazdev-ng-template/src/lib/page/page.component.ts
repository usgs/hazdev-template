import { Component, Input } from '@angular/core';

@Component({
  selector: 'hazdev-template-page',
  templateUrl: './page.component.html',
  styleUrls: ['./page.component.scss']
})
export class PageComponent {
  @Input()
  CONTACT: string;
  @Input()
  SOCIAL: string;
  @Input()
  TITLE: string;

  getSocialHref(stub: string): string {
    return stub
      .replace('{URL}', encodeURIComponent(window.location.toString()))
      .replace('{TITLE}', this.TITLE)
      .replace('{CONTACT}', this.CONTACT);
  }
}
