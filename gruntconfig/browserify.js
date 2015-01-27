'use strict';

var config = require('./config');

var browserify = {
  options: {
    browserifyOptions: {
      debug: true,
      paths: [
        process.cwd() + '/' + config.src
      ]
    }
  }
};

// bundles
[
  'js/index',
  'js/classList'
].forEach(function (bundle) {
  var targetFile = config.build + '/htdocs/' + bundle + '.js';
  var sourceFile = config.src + '/htdocs/' + bundle + '.js';

  browserify[bundle] = {files: {}};
  browserify[bundle].files[targetFile] = [sourceFile];
});

module.exports = browserify;
