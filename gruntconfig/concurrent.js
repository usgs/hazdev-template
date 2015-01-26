'use strict';

var concurrent = {
  scripts: ['jshint:scripts'],
  predist: [
    'jshint:scripts',
    'compass:dev',
    'copy'
  ],
  dist: [
    'cssmin:dist',
    'htmlmin:dist',
    'uglify',
    'runpreinstall:dist'
  ]
};

module.exports = concurrent;
