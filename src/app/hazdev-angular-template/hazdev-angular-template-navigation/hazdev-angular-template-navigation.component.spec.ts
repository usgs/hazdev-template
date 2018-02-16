import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevAngularTemplateNavigationComponent } from './hazdev-angular-template-navigation.component';

describe('HazdevAngularTemplateNavigationComponent', () => {
  let component: HazdevAngularTemplateNavigationComponent;
  let fixture: ComponentFixture<HazdevAngularTemplateNavigationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevAngularTemplateNavigationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevAngularTemplateNavigationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
