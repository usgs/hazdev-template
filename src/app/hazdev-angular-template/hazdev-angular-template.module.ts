import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MediaMatcher } from '@angular/cdk/layout';

import {
  MatButtonModule,
  MatDialogModule,
  MatFormFieldModule,
  MatInputModule,
  MatListModule,
  MatSidenavModule
} from '@angular/material';

import { HazdevAngularTemplateComponent } from './hazdev-angular-template.component';
import { HazdevAngularTemplateFooterComponent } from './hazdev-angular-template-footer/hazdev-angular-template-footer.component';
import { HazdevAngularTemplateHeaderComponent } from './hazdev-angular-template-header/hazdev-angular-template-header.component';
import { HazdevAngularTemplateNavigationComponent } from './hazdev-angular-template-navigation/hazdev-angular-template-navigation.component';
import { HazdevAngularTemplatePageComponent } from './hazdev-angular-template-page/hazdev-angular-template-page.component';
import { NavigationGroupComponent } from './hazdev-angular-template-navigation/navigation-group/navigation-group.component';
import { NavigationItemComponent } from './hazdev-angular-template-navigation/navigation-item/navigation-item.component';

import { MenuService } from '../menu.service';

@NgModule({
  declarations: [
    HazdevAngularTemplateComponent,
    HazdevAngularTemplateFooterComponent,
    HazdevAngularTemplateHeaderComponent,
    HazdevAngularTemplateNavigationComponent,
    HazdevAngularTemplatePageComponent,
    NavigationGroupComponent,
    NavigationItemComponent
  ],
  imports: [
    CommonModule,
    MatButtonModule,
    MatDialogModule,
    MatFormFieldModule,
    MatInputModule,
    MatListModule,
    MatSidenavModule
  ],
  exports: [
    HazdevAngularTemplateComponent,
    NavigationGroupComponent,
    NavigationItemComponent
  ],
  providers: [
    MediaMatcher,
    MenuService
  ]
})
export class HazdevAngularTemplateModule { }


