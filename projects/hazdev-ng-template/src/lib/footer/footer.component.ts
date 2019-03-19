import { Component, Input } from '@angular/core';

@Component({
  selector: 'hazdev-template-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.scss']
})
export class FooterComponent {
  @Input()
  SITE_COMMONNAV: any[];

  @Input()
  SITE_INTERIORNAV: any[];

  @Input()
  SITE_SOCIAL: any[];
}
