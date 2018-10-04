import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NavigationGroupComponent } from './navigation-group.component';
import { HazdevNgTemplateService } from '../hazdev-template.service';

describe('NavigationGroupComponent', () => {
  let component: NavigationGroupComponent;
  let fixture: ComponentFixture<NavigationGroupComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [NavigationGroupComponent],
      providers: [{ provide: HazdevNgTemplateService }]
    }).compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NavigationGroupComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
