'use strict';

var config = require('./config');

var concat = {
  scripts: {
    dest: config.build + '/htdocs/js/index.js',
    src: [
      config.src + '/htdocs/js/OffCanvas.js',
      config.src + '/htdocs/js/index.js'
    ],
    sourceMapStyle: 'inline'
  }
};

module.exports = concat;
