/* global mocha */

// PhantomJS is missing native bind support,
//     https://github.com/ariya/phantomjs/issues/10522
// Polyfill from:
//     https://developer.mozilla.org
//         /en-US/docs/Web/JavaScript/Reference/Global_Objects/Function/bind
if (!Function.prototype.bind) {
  Function.prototype.bind = function (oThis) {
  'use strict';
    if (typeof this !== 'function') {
      // closest thing possible to the ECMAScript 5 internal IsCallable
      throw new TypeError('object to be bound is not callable');
    }

    var aArgs = Array.prototype.slice.call(arguments, 1),
        fToBind = this,
        FNOP = function () {},
        fBound;

    fBound = function () {
      return fToBind.apply(
          (this instanceof FNOP && oThis ? this : oThis),
          aArgs.concat(Array.prototype.slice.call(arguments)));
    };

    FNOP.prototype = this.prototype;
    fBound.prototype = new FNOP();

    return fBound;
  };
}

(function () {
  'use strict';

  mocha.ui('bdd');
  mocha.reporter('html');

  // Add each test class here as they are implemented
  require('./spec/OffCanvasTest');
  require('./spec/LinkUpdaterTest');

  if (window.mochaPhantomJS) {
      window.mochaPhantomJS.run();
  } else {
    mocha.run();
  }
})(this);
