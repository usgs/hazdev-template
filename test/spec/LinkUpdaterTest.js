/* global chai, describe, it, LinkUpdater */
'use strict';


var expect = chai.expect;

describe('Unit tests for the LinkUpdater Class', function () {
  describe('Constructor', function(){
    it('exists', function() {
      /* jshint -W030 */
      expect(LinkUpdater).not.to.be.undefined;
      /* jshint +W030 */
    });
  });
});
