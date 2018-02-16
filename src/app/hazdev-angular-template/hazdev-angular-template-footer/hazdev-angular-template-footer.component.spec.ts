import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HazdevAngularTemplateFooterComponent } from './hazdev-angular-template-footer.component';

describe('HazdevAngularTemplateFooterComponent', () => {
  let component: HazdevAngularTemplateFooterComponent;
  let fixture: ComponentFixture<HazdevAngularTemplateFooterComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HazdevAngularTemplateFooterComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevAngularTemplateFooterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
