/* global LinkUpdater, OffCanvas */
'use strict';

// make the site footer offcanvas
var siteFooter = document.querySelector('.site-footer');

if (siteFooter) {
  siteFooter.classList.add('offcanvas');
}
// initialize offcanvas
OffCanvas.getOffCanvas();

// initialize link updater
LinkUpdater();
