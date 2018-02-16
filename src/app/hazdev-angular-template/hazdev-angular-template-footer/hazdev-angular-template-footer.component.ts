import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-hazdev-angular-template-footer',
  templateUrl: './hazdev-angular-template-footer.component.html',
  styleUrls: ['./hazdev-angular-template-footer.component.css']
})
export class HazdevAngularTemplateFooterComponent implements OnInit {
  @Input() SITE_COMMONNAV: any[];

  constructor() { }

  ngOnInit() {
  }

}
