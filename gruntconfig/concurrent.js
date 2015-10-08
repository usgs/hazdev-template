'use strict';

var concurrent = {
  scripts: [
    'jshint:scripts',
    'concat:scripts'
  ],
  build: [
    'concurrent:scripts',
  ],
  dist: [
    'postcss:dist',
    'uglify:dist'
  ]
};

module.exports = concurrent;
