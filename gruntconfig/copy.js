'use strict';

var config = require('./config');

var copy = {
  app: {
    expand: true,
    cwd: config.src + '/htdocs',
    dest: config.dist + '/htdocs',
    src: [
      'images/**/*.{png,gif,jpg,jpeg}',
      '**/*.php',
      'js/classList.js'
    ]
  },
  lib: {
    expand: true,
    cwd: config.src + '/lib',
    dest: config.dist + '/lib',
    src: [
      '**/*'
    ],
    options: {
      mode: true
    }
  }
};

module.exports = copy;
