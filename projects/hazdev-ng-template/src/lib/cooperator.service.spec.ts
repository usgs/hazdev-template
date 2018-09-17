import { TestBed, inject } from '@angular/core/testing';

import { CooperatorService } from './cooperator.service';

describe('CooperatorServiceService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [CooperatorServiceService]
    });
  });

  it('should be created', inject([CooperatorServiceService], (service: CooperatorServiceService) => {
    expect(service).toBeTruthy();
  }));
});
