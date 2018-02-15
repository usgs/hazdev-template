import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevAngularTemplateComponent } from './hazdev-angular-template.component';

describe('HazdevAngularTemplateComponent', () => {
  let component: HazdevAngularTemplateComponent;
  let fixture: ComponentFixture<HazdevAngularTemplateComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevAngularTemplateComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevAngularTemplateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
