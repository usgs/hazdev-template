import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevAngularTemplateHeaderComponent } from './hazdev-angular-template-header.component';

describe('HazdevAngularTemplateHeaderComponent', () => {
  let component: HazdevAngularTemplateHeaderComponent;
  let fixture: ComponentFixture<HazdevAngularTemplateHeaderComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevAngularTemplateHeaderComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevAngularTemplateHeaderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
