import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevAngularTemplatePageComponent } from './hazdev-angular-template-page.component';

describe('HazdevAngularTemplatePageComponent', () => {
  let component: HazdevAngularTemplatePageComponent;
  let fixture: ComponentFixture<HazdevAngularTemplatePageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevAngularTemplatePageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevAngularTemplatePageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
