'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [
      config.src + '/**/*.js'
    ],
    tasks: [
      'jshint:scripts',
      'concat:bundle',
      'concat:scripts'
    ]
  },
  scss: {
    files: [
      config.src + '/**/*.scss'
    ],
    tasks: [
      'postcss:build'
    ]
  },
  tests: {
    files: [
      config.test + '/**/*'
    ],
    tasks: [
      'copy:test',
      'jshint:tests',
      'browserify:test'
    ]
  },
  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**.js'
    ],
    options: {
      reload: true
    },
    tasks: [
      'jshint:gruntfile'
    ]
  },
  static: {
    files: [
      config.src + '/**/*',
      '!' + config.src + '/**/*.js',
      '!' + config.src + '/**/*.scss'
    ],
    tasks: [
      'copy:build'
    ]
  },
  livereload: {
    files: [
      config.build + '/**/*'
    ],
    options: {
      livereload: config.liveReloadPort
    }
  }
};

module.exports = watch;
