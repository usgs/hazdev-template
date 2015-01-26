
require.config({
  baseUrl: '.',
  paths: {
    theme: '/theme/js'
  }
});

require([
  'theme/OffCanvas'
], function (
  OffCanvas
) {
  'use strict';

  // make the site footer offcanvas
  document.querySelector('.site-footer').classList.add('offcanvas');

  // initialize offcanvas
  OffCanvas.getOffCanvas();

});
