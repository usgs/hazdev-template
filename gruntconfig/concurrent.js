'use strict';

var concurrent = {
  scripts: [
    'jshint:scripts',
    'concat:scripts'
  ],
  build: [
    'compass:build',
    'concurrent:scripts',
  ],
  dist: [
    'cssmin:dist',
    'uglify:dist',
    'svgmin:dist'
  ]
};

module.exports = concurrent;
