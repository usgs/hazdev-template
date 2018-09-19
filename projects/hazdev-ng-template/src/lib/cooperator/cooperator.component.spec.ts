import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CooperatorComponent } from './cooperator.component';

describe('CooperatorComponent', () => {
  let component: CooperatorComponent;
  let fixture: ComponentFixture<CooperatorComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CooperatorComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CooperatorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
