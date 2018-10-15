import { BehaviorSubject } from 'rxjs';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class HazdevTemplateService {
  mobileEmitter = new BehaviorSubject(null);

  emitClickEvent(isMobile: boolean) {
    this.mobileEmitter.next(isMobile);
  }
}
