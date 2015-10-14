/* global chai, describe, it, OffCanvas */
'use strict';


var expect = chai.expect;

describe('Unit tests for the OffCanvas Class', function () {
  describe('Constructor', function(){
    it('exists', function() {
      /* jshint -W030 */
      expect(OffCanvas).not.to.be.undefined;
      /* jshint +W030 */
    });
    it('Can be Instantiated with getOffCanvas', function () {
      var singleton = OffCanvas.getOffCanvas();
      /* jshint -W030 */
      expect(singleton).not.to.be.undefined;
      /* jshint +W030 */
    });
  });

  /* Note order is important in these tests. If one fails, the following
   * can fail as well.
   */
  describe('Functions', function () {
    var offCanvas = OffCanvas.getOffCanvas();
    var after_toggle,
        before_toggle,
        button,
        enabled;

    it('Can be disabled', function () {
      offCanvas.disable();
      enabled = document.querySelector('.offcanvas-enabled');
      /* jshint -W030 */
      expect(enabled).to.equal(null);
      /* jshint +W030 */
    });
    it('Can be enabled', function () {
      offCanvas.enable();
      enabled = document.querySelector('.offcanvas-enabled');
      /* jshint -W030 */
      expect(enabled).to.not.equal(null);
      /* jshint +W030 */
    });
    it('Can be toggled', function () {
      offCanvas.enable();
      before_toggle = document.querySelector('.offcanvas-almost-active');
      offCanvas.toggle();
      after_toggle = document.querySelector('.offcanvas-almost-active');
      /* jshint -W030 */
      expect(before_toggle).to.not.be.equal(after_toggle);
      /* jshint +W030 */
    });
    it('Can be destroyed', function() {
      offCanvas.destroy();
      enabled = document.querySelector('.offcanvas-enabled');
      button = document.querySelector('button');
      /* jshint -W030 */
      expect(enabled).to.equal(null);
      expect(button).to.equal(null);
      /* jshint +W030 */
    });
  });
});
