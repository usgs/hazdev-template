'use strict';

var config = require('./config');

var uglify = {
  options: {
    mangle: {
      except: ['require']
    },
    compress: true,
    report: 'gzip'
  },
  dist: {
    files: {}
  }
};

// uglify from build into dist
[
  'htdocs/js/index.js',
  'htdocs/js/classList.js'
].forEach(function (file) {
  uglify.dist.files[config.dist + '/' + file] = config.build + '/' + file;
});

module.exports = uglify;
