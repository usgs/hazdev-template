import { MediaMatcher } from '@angular/cdk/layout';
import { NO_ERRORS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { MockComponent } from 'ng2-mock-component';

import { HazdevTemplateComponent } from './hazdev-ng-template.component';

describe('HazdevTemplateComponent', () => {
  let component: HazdevTemplateComponent;
  let fixture: ComponentFixture<HazdevTemplateComponent>;
  let mediaMatcherStub: any;

  beforeEach(async(() => {
    mediaMatcherStub = {
      matchMedia: () => {
        return {
          addListener: () => {}
        };
      }
    };

    TestBed.configureTestingModule({
      declarations: [
        HazdevTemplateComponent,

        MockComponent({ selector: 'app-hazdev-template-header' }),
        MockComponent({
          selector: 'app-hazdev-template-page',
          inputs: ['CONTACT', 'SOCIAL', 'TITLE']
        }),
        MockComponent({ selector: 'app-hazdev-template-navigation' }),

        MockComponent({
          selector: 'mat-sidenav',
          inputs: ['mode', 'fixedInViewport', 'fixedTopGap', 'opened']
        }),
        MockComponent({ selector: 'mat-sidenav-container' }),
        MockComponent({ selector: 'mat-sidenav-content' })
      ],
      schemas: [NO_ERRORS_SCHEMA],
      providers: [{ provide: MediaMatcher, useValue: mediaMatcherStub }]
    }).compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HazdevTemplateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  describe('mobileQueryListener', () => {
    it('calls detectChanges', () => {
      spyOn(component.changeDetectorRef, 'detectChanges');
      component.mobileQueryListener();
      expect(component.changeDetectorRef.detectChanges).toHaveBeenCalled();
    });
  });
});
