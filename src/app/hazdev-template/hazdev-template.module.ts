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

import { HazdevTemplateComponent } from './hazdev-template.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { NavigationComponent } from './navigation/navigation.component';
import { PageComponent } from './page/page.component';
import { NavigationGroupComponent } from './navigation/navigation-group/navigation-group.component';
import { NavigationItemComponent } from './navigation/navigation-item/navigation-item.component';

import { MenuService } from '../menu.service';

@NgModule({
  declarations: [
    HazdevTemplateComponent,
    FooterComponent,
    HeaderComponent,
    NavigationComponent,
    PageComponent,
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
    HazdevTemplateComponent,
    NavigationGroupComponent,
    NavigationItemComponent
  ],
  providers: [
    MediaMatcher,
    MenuService
  ]
})
export class HazdevTemplateModule { }


