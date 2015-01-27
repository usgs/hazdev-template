'use strict';

var OffCanvas = require('./OffCanvas');

// make the site footer offcanvas
document.querySelector('.site-footer').classList.add('offcanvas');

// initialize offcanvas
OffCanvas.getOffCanvas();
