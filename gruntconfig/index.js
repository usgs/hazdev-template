'use strict';

var gruntconfig = function (grunt) {

  var config = {
    config: require('./config'),

    clean: require('./clean'),
    concat: require('./concat'),
    copy: require('./copy'),
    jshint: require('./jshint'),
    mocha_phantomjs: require('./mocha_phantomjs'),
    uglify: require('./uglify'),
    postcss: require('./postcss'),

    tasks: [
      'grunt-connect-rewrite',
      'grunt-contrib-clean',
      'grunt-contrib-concat',
      'grunt-contrib-copy',
      'grunt-contrib-jshint',
      'grunt-contrib-uglify',
      'grunt-mocha-phantomjs',
      'grunt-postcss'
    ]
  };

  // only configure development tasks if needed
  if (grunt.cli.tasks.length === 0 ||
      // build related tasks
      [
        'build',
        'builddist',
        'postcss:build',
        'concat:scripts',
        'copy',
        'copy:build',
        'copy:dist',
        'postcss:dist',
        'imagemin:dist',
        'jshint:scripts',
        'runpreinstall:' + config.build + '/' + config.src,
        'runpreinstall:dist',
        'uglify:dist'
      ].indexOf(grunt.cli.tasks[0]) === -1) {

    config.browserify = require('./browserify');
    config.connect = require('./connect');
    config.watch = require('./watch');

    config.tasks.push(
      'grunt-browserify',
      'grunt-contrib-connect',
      'grunt-contrib-watch'
    );
  }

  return config;
};

module.exports = gruntconfig;
