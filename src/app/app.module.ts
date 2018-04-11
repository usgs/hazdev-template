import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { AppComponent } from './app.component';
import { HazdevTemplateModule } from './hazdev-template/hazdev-template.module';
import { RouterModule } from '@angular/router';


@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HazdevTemplateModule,

    RouterModule.forRoot([])
  ],
  exports: [
    HazdevTemplateModule
  ],
  providers: [
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
