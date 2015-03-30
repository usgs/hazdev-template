'use strict';

var config = require('./config');

var copy = {
  build: {
    expand: true,
    cwd: config.src,
    src: [
      '**/*',
      '!conf',
      '!**/*.js',
      '!**/*.scss'
    ],
    dest: config.build + '/' + config.src,
    options: {
      mode: true
    }
  },
  analytics: {
    expand: true,
    src: 'node_modules/dap-gov-wide-ga-code/Universal-Federated-Analytics.1.0.js',
    dest: config.build + '/' + config.src + '/htdocs/js/analytics.js'
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
  }
};

module.exports = copy;
