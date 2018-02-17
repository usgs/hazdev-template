import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { MockComponent } from 'ng2-mock-component';

import { NavigationGroupComponent } from './navigation-group.component';

describe('NavigationGroupComponent', () => {
  let component: NavigationGroupComponent;
  let fixture: ComponentFixture<NavigationGroupComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
        NavigationGroupComponent,

        MockComponent({selector: 'app-navigation-item', inputs: ['href', 'routerLink', 'title']}),
      ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NavigationGroupComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
