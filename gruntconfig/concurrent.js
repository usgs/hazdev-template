'use strict';

var concurrent = {
  scripts: [
    'jshint:scripts',
    'browserify'
  ],
  build: [
    'compass:build',
    'concurrent:scripts',
  ],
  dist: [
    'cssmin:dist',
    'uglify'
  ]
};

module.exports = concurrent;
