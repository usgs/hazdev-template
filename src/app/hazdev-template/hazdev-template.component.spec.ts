import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevTemplateComponent } from './hazdev-template.component';

describe('HazdevTemplateComponent', () => {
  let component: HazdevTemplateComponent;
  let fixture: ComponentFixture<HazdevTemplateComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevTemplateComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevTemplateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
