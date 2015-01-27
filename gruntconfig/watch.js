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
  examples: {
    files: [config.example + '/*.html'],
    tasks: ['concurrent:examples']
  },
  livereload: {
    options: {
      livereload: config.liveReloadPort
    },
    files: [
      config.src + '/htdocs/**/*.html',
      config.src + '/**/*.php',
      config.example + '/**/*.html',
      config.example + '/**/*.php',
      config.src + '/htdocs/css/**/*.css',
      config.src + '/htdocs/images/**/*.{png,jpg,jpeg,gif}',
      config.build + '/**/*'
    ]
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
