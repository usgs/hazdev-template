import { NgModule } from '@angular/core';
import { HazdevNgTemplateComponent } from './hazdev-ng-template.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { NavigationComponent } from './navigation/navigation.component';
import { PageComponent } from './page/page.component';
import { SidenavComponent } from './sidenav/sidenav.component';
import { NavigationItemComponent } from './navigation-item/navigation-item.component';
import { NavigationGroupComponent } from './navigation-group/navigation-group.component';

@NgModule({
  imports: [
  ],
  declarations: [HazdevNgTemplateComponent, FooterComponent, HeaderComponent, NavigationComponent, PageComponent, SidenavComponent, NavigationItemComponent, NavigationGroupComponent],
  exports: [HazdevNgTemplateComponent]
})
export class HazdevNgTemplateModule { }
