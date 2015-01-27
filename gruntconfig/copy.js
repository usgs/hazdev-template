'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    dest: config.build + '/src',
    src: [
      '**/*',
      '!conf',
      '!**/*.js',
      '!**/*.scss',
      'htdocs/js/classList.js'
    ],
    options: {
      mode: true
    }
  },
  dist: {
    expand: true,
    cwd: config.build + '/src',
    dest: config.dist,
    src: [
      '**/*',
      '!conf',
      '!**/*.js',
      '!**/*.css'
    ]
  }
};

module.exports = copy;
