import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevNgTemplateComponent } from './hazdev-ng-template.component';

describe('HazdevNgTemplateComponent', () => {
  let component: HazdevNgTemplateComponent;
  let fixture: ComponentFixture<HazdevNgTemplateComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevNgTemplateComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevNgTemplateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
