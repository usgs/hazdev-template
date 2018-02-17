import { TestBed, async } from '@angular/core/testing';
import { AppComponent } from './app.component';

import { MockComponent } from 'ng2-mock-component';

describe('AppComponent', () => {
  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
        AppComponent,

        MockComponent({selector: 'app-hazdev-template', inputs: ['TITLE', 'NAVIGATION', 'SITE_SITENAV', 'SITE_COMMONNAV']}),
      ],
    }).compileComponents();
  }));
  it('should create the app', async(() => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.debugElement.componentInstance;
    expect(app).toBeTruthy();
  }));
});
