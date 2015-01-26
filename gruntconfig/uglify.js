'use strict';

var config = require('./config');

var filesToUglify = {};
filesToUglify[config.dist + '/htdocs/js/uglified.js'] =
    config.dist + '/htdocs/js/index.js';
filesToUglify[config.dist + '/htdocs/js/classList.js'] =
    config.dist + '/htdocs/js/classList.js';


var uglify = {
  options: {
    mangle: {
      except: ['require']
    },
    compress: true,
    report: 'gzip'
  },
  dist: {
    files: filesToUglify
  }
};

module.exports = uglify;
