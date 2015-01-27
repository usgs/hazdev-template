'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    dest: config.build,
    src: [
      '**/*',
      '!conf',
      '!**/*.js',
      '!**/*.scss'
    ],
    options: {
      mode: true
    }
  },
  dist: {
    expand: true,
    cwd: config.build,
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
