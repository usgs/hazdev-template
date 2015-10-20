'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [
      config.src + '/**/*.js',
      config.test + '/**/*.js'
    ],
    tasks: [
      'jshint:scripts',
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
      config.test + '/**/*.js'
    ],
    tasks: [
      'jshint:tests',
      'mocha_phantomjs'
    ]
  },
  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**.js'
    ],
    tasks: [
      'jshint:gruntfile'
    ]
  },
  php: {
    files: [
      '**/*.php'
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
      livereload: true
    }
  }
};

module.exports = watch;
