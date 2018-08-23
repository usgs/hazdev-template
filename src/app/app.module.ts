import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { RouterModule } from '@angular/router';
import { HazdevNgTemplateModule } from 'hazdev-ng-template';

import { AppComponent } from './app.component';
import { HazdevTemplateModule } from './hazdev-template/hazdev-template.module';

@NgModule({
  declarations: [AppComponent],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HazdevNgTemplateModule,
    HazdevTemplateModule,

    RouterModule.forRoot([])
  ],
  exports: [HazdevTemplateModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
