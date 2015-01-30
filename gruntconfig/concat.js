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
  }
};

module.exports = concat;
