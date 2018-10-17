import { NgModule } from '@angular/core';
import {
  MatButtonModule,
  MatFormFieldModule,
  MatInputModule,
  MatListModule
} from '@angular/material';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { RouterModule } from '@angular/router';

import { FooterComponent } from './footer/footer.component';
import { HazdevTemplateComponent } from './hazdev-template.component';
import { HeaderComponent } from './header/header.component';
import { NavigationGroupComponent } from './navigation-group/navigation-group.component';
import { NavigationItemComponent } from './navigation-item/navigation-item.component';
import { NavigationComponent } from './navigation/navigation.component';
import { PageComponent } from './page/page.component';
import { SidenavComponent } from './sidenav/sidenav.component';
import { CooperatorComponent } from './cooperator/cooperator.component';
import { HazdevTemplateService } from './hazdev-template.service';

@NgModule({
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MatButtonModule,
    MatFormFieldModule,
    MatInputModule,
    MatListModule,
    RouterModule.forRoot([])
  ],
  declarations: [
    CooperatorComponent,
    FooterComponent,
    HazdevTemplateComponent,
    HeaderComponent,
    NavigationComponent,
    NavigationGroupComponent,
    NavigationItemComponent,
    PageComponent,
    SidenavComponent
  ],
  exports: [
    HazdevTemplateComponent,
    NavigationGroupComponent,
    NavigationItemComponent
  ],
  providers: [{ provide: 'Window', useValue: window }, HazdevTemplateService]
})
export class HazdevTemplateModule {}
