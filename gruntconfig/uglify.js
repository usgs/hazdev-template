'use strict';

var config = require('./config');

var uglify = {
  options: {
    mangle: {
      except: ['require']
    },
    compress: {},
    report: 'gzip'
  },
  dist: {
    files: {}
  }
};

// uglify from build into dist
[
  'htdocs/js/index.js'
].forEach(function (file) {
  uglify.dist.files[config.dist + '/' + file] =
      config.build + '/' + config.src + '/' + file;
});

module.exports = uglify;
