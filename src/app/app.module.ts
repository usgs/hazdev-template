import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';
import { MediaMatcher } from '@angular/cdk/layout';

import { AppComponent } from './app.component';

import { HazdevAngularTemplateModule } from './hazdev-angular-template/hazdev-angular-template.module';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HazdevAngularTemplateModule
  ],
  exports: [
    HazdevAngularTemplateModule
  ],
  providers: [
    MediaMatcher
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
