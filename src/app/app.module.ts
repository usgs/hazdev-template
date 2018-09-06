import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { RouterModule } from '@angular/router';
import { HazdevTemplateModule } from 'hazdev-ng-template';

import { AppComponent } from './app.component';

@NgModule({
  declarations: [AppComponent],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HazdevTemplateModule,

    RouterModule.forRoot([])
  ],
  exports: [HazdevTemplateModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
