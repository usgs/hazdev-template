'use strict';

var config = require('./config');

var compass = {
  build: {
    options: {
      sassDir: config.src + '/htdocs',
      cssDir: config.build + '/htdocs',
      environment: 'development'
    }
  }
};

module.exports = compass;
