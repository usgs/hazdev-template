'use strict';

var config = require('./config');

var watch = {
  scripts: {
    files: [config.src + '/**/*.js'],
    tasks: ['concurrent:scripts']
  },
  scss: {
    files: [config.src + '/**/*.scss'],
    tasks: ['compass:dev']
  },
  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**.js'
    ],
    tasks: ['jshint:gruntfile']
  },
  php: {
    files: ['**/*.php'],
    tasks: ['copy:build']
  },
  reload: {
    files: [config.build + '/**/*'],
    options: {
      livereload: true
    }
  }
};

module.exports = watch;
