import { inject, TestBed } from '@angular/core/testing';

import { HazdevNgTemplateService } from './hazdev-template.service';

describe('HazdevNgTemplateService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [HazdevNgTemplateService]
    });
  });

  it('should be created', inject(
    [HazdevNgTemplateService],
    (service: HazdevNgTemplateService) => {
      expect(service).toBeTruthy();
    }
  ));
});
