import { ChangeDetectorRef, OnDestroy, OnInit } from '@angular/core';
import { MediaMatcher } from '@angular/cdk/layout';
import { MenuService } from '../menu.service';
export declare class HazdevAngularTemplateComponent implements OnInit, OnDestroy {
    menuService: MenuService;
    mobileQuery: MediaQueryList;
    private _mobileQueryListener;
    href: string;
    TITLE: string;
    CONTACT: string;
    SOCIAL: any[];
    NAVIGATION: any[];
    SITE_COMMONNAV: any[];
    SITE_SITENAV: any[];
    SITE_URL: string;
    constructor(changeDetectorRef: ChangeDetectorRef, media: MediaMatcher, menuService: MenuService);
    ngOnDestroy(): void;
    ngOnInit(): void;
    onSideNavChange(event: any): void;
}
