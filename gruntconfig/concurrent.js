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
  ],
  test: [
    'browserify:test',
    'concat:bundle',
    'copy:test'
  ],
};

module.exports = concurrent;
