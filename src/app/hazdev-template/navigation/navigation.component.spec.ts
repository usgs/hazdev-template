import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { MockComponent } from 'ng2-mock-component';

import { NavigationComponent } from './navigation.component';

describe('NavigationComponent', () => {
  let component: NavigationComponent;
  let fixture: ComponentFixture<NavigationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
        NavigationComponent,

        MockComponent({selector: 'app-navigation-group', inputs: ['href', 'routerLink', 'title']}),
        MockComponent({selector: 'app-navigation-item', inputs: ['href', 'routerLink', 'title']}),
        MockComponent({selector: 'mat-nav-list'}),
        MockComponent({selector: 'mat-form-field'})
      ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NavigationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
