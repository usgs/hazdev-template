import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PageComponent } from './page.component';

declare let window: any;
declare let FB: any;

describe('PageComponent', () => {
  let component: PageComponent;
  let fixture: ComponentFixture<PageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [PageComponent]
    }).compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  describe('getMetaTags', () => {
    it('get call all required methods', () => {
      const value = '';
      spyOn(component, 'getDescription').and.returnValue(value);
      spyOn(component, 'getTitle').and.returnValue(value);

      const metaTags = component.getMetaTags();

      expect(metaTags.description).toBe(value);
      expect(metaTags.title).toBe(value);
    });
  });

  describe('showFacebookSharePopup', () => {
    it('calls all required methods', () => {
      window.FB = {
        ui: jasmine.createSpy().and.returnValue(null)
      };

      spyOn(component, 'getMetaTags').and.returnValue({
        description: '',
        title: '',
        url: ''
      });

      component.sdkStatus = true;
      component.showFacebookSharePopup();

      expect(component.getMetaTags).toHaveBeenCalled();
      expect(window.FB.ui).toHaveBeenCalled();
    });
  });

  describe('getDescription', () => {
    it('gets description from meta tag', () => {
      let value;
      const content = 'test';

      spyOn(component.meta, 'getTag').and.returnValue({ content: content });
      value = component.getDescription();
      expect(value).toBe(content);
    });
    it('gets description from page description', () => {
      let value;
      const content = 'test';

      spyOn(document, 'querySelector').and.returnValue({ content: content });
      value = component.getDescription();
      expect(value).toBe(content);
    });
    it('falls back to empty string', () => {
      let value;
      const content = '';

      spyOn(component.meta, 'getTag').and.returnValue(null);
      spyOn(document, 'querySelector').and.returnValue(null);
      value = component.getDescription();
      expect(value).toBe(content);
    });
  });

  describe('getMetaTags', () => {
    it('calls all required methods', () => {
      spyOn(component, 'getDescription');
      spyOn(component, 'getTitle');

      component.getMetaTags();

      expect(component.getDescription).toHaveBeenCalled();
      expect(component.getTitle).toHaveBeenCalled();
    });
  });

  describe('getTitle', () => {
    it('gets title from meta tag', () => {
      let value;
      const content = 'test';

      spyOn(component.meta, 'getTag').and.returnValue({ content: content });
      value = component.getTitle();
      expect(value).toBe(content);
    });
    it('gets title from page title', () => {
      let value;
      const content = 'test';

      spyOn(component.meta, 'getTag').and.returnValue(null);
      component.TITLE = content;
      value = component.getTitle();
      expect(value).toBe(content);
    });
    it('falls back to url', () => {
      let value;
      const content = window.location.href;

      spyOn(component.meta, 'getTag').and.returnValue(null);
      component.TITLE = null;
      value = component.getTitle();
      expect(value).toBe(content);
    });
  });

  describe('onClick', () => {
    it('calls all sub methods', () => {
      const spy = jasmine.createSpy('preventDefault');
      const link = document.createElement('a');
      link.className = 'facebook';
      const click = {
        target: link,
        preventDefault: spy
      };
      spyOn(component, 'showFacebookSharePopup');
      spyOn(component, 'loadFacebookSdk');

      component.onClick(click);

      expect(spy).toHaveBeenCalled();
      expect(component.loadFacebookSdk).toHaveBeenCalled();
      expect(component.showFacebookSharePopup).toHaveBeenCalled();
    });
  });
});
