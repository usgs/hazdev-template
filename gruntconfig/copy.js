'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    src: [
      '**/*',
      '!conf',
      '!**/*.eps',
      '!**/*.js',
      '!**/*.scss'
    ],
    dest: config.build + '/' + config.src,
    options: {
      mode: true
    }
  },
  dist: {
    expand: true,
    cwd: config.build + '/' + config.src,
    src: [
      '**/*',
      '!conf',
      // cssmin
      '!**/*.css',
      // uglify
      '!**/*.js'
    ],
    dest: config.dist,
    options: {
      mode: true
    }
  },
  test: {
    expand: true,
    cwd: config.test,
    src: [
      '**/*',
      '!conf',
      '!**/*.js',
      '!**/*.scss'
    ],
    dest: config.build + '/' + config.test,
    options: {
      mode: true
    }
  },
};

module.exports = copy;
