'use strict';

var config = require('./config');

var compass = {
  build: {
    options: {
      sassDir: config.src + '/htdocs',
      cssDir: config.build + '/src/htdocs',
      environment: 'development'
    }
  }
};

module.exports = compass;
