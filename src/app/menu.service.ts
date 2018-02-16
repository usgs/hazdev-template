import { Injectable } from '@angular/core';

import { Observable } from 'rxjs/Observable';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';

@Injectable()
export class MenuService {

  private _open = new BehaviorSubject<boolean>(null);
  public readonly open = this._open.asObservable();

  constructor() { }

  setState (state: boolean): void {
    this._open.next(state);
  }
}
