import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { MediaMatcher } from '@angular/cdk/layout';
import {
  MatButtonModule,
  MatDialogModule,
  MatFormFieldModule,
  MatInputModule,
  MatListModule
} from '@angular/material';
import { RouterModule } from '@angular/router';

import { FooterComponent } from './footer/footer.component';
import { HazdevTemplateComponent } from './hazdev-template.component';
import { HeaderComponent } from './header/header.component';
import { NavigationComponent } from './navigation/navigation.component';
import { NavigationGroupComponent } from './navigation/navigation-group/navigation-group.component';
import { NavigationItemComponent } from './navigation/navigation-item/navigation-item.component';
import { PageComponent } from './page/page.component';
import { SidenavComponent } from './sidenav/sidenav.component';


@NgModule({
  declarations: [
    HazdevTemplateComponent,
    FooterComponent,
    HeaderComponent,
    NavigationComponent,
    PageComponent,
    NavigationGroupComponent,
    NavigationItemComponent,
    SidenavComponent
  ],
  imports: [
    CommonModule,
    MatButtonModule,
    MatDialogModule,
    MatFormFieldModule,
    MatInputModule,
    MatListModule,
    RouterModule
  ],
  exports: [
    HazdevTemplateComponent,
    NavigationGroupComponent,
    NavigationItemComponent
  ],
  providers: [
    MediaMatcher
  ]
})
export class HazdevTemplateModule { }


