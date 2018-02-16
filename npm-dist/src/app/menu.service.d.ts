import { Observable } from 'rxjs/Observable';
export declare class MenuService {
    private _open;
    readonly open: Observable<boolean>;
    constructor();
    setState(state: boolean): void;
}
