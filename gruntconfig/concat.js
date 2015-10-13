'use strict';

var config = require('./config');

var concat = {
  scripts: {
    src: [
      config.src + '/htdocs/js/OffCanvas.js',
      config.src + '/htdocs/js/index.js'
    ],
    dest: config.build + '/' + config.src + '/htdocs/js/index.js',
    sourceMapStyle: 'inline'
  },
  bundle: {
    src: [
      config.src + '/htdocs/js/OffCanvas.js',
      config.src + '/htdocs/js/LinkUpdater.js'
    ],
    dest: config.build + '/' + config.test + '/bundle.js',
    sourceMapStyle: 'inline'
  }
};

module.exports = concat;
