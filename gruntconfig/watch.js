'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [config.src + '/htdocs/js/**/*.js'],
    tasks: ['concurrent:scripts'],
    options: {
      livereload: config.liveReloadPort
    }
  },
  scss: {
    files: [config.src + '/htdocs/**/*.scss'],
    tasks: ['compass:dev']
  },
  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**.js'
    ],
    tasks: ['jshint:gruntfile']
  }
};

module.exports = watch;
