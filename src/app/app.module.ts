import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';
import { MediaMatcher } from '@angular/cdk/layout';

import { AppComponent } from './app.component';

import { HazdevTemplateModule } from './hazdev-template/hazdev-template.module';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HazdevTemplateModule
  ],
  exports: [
    HazdevTemplateModule
  ],
  providers: [
    MediaMatcher
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
