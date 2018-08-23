import { NgModule } from '@angular/core';
import { HazdevNgTemplateComponent } from './hazdev-ng-template.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { NavigationComponent } from './navigation/navigation.component';
import { PageComponent } from './page/page.component';
import { SidenavComponent } from './sidenav/sidenav.component';

@NgModule({
  imports: [
  ],
  declarations: [HazdevNgTemplateComponent, FooterComponent, HeaderComponent, NavigationComponent, PageComponent, SidenavComponent],
  exports: [HazdevNgTemplateComponent]
})
export class HazdevNgTemplateModule { }
