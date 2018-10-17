import { inject, TestBed } from '@angular/core/testing';

import { HazdevTemplateService } from './hazdev-template.service';

describe('HazdevTemplateService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [HazdevTemplateService]
    });
  });

  it('should be created', inject(
    [HazdevTemplateService],
    (service: HazdevTemplateService) => {
      expect(service).toBeTruthy();
    }
  ));
});
