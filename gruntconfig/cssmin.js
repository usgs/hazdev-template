'use strict';

var config = require('./config');

var cssmin = {
  dist: {
    expand: true,
    cwd: config.tmp,
    src: [
      '**/*.css'
    ],
    dest: config.dist + '/htdocs'
  }
};

module.exports = cssmin;
