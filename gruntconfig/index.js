'use strict';

var gruntconfig = function (grunt) {

  var config = {
    config: require('./config'),

    clean: require('./clean'),
    compass: require('./compass'),
    concat: require('./concat'),
    concurrent: require('./concurrent'),
    copy: require('./copy'),
    cssmin: require('./cssmin'),
    jshint: require('./jshint'),
    requirejs: require('./requirejs'),
    uglify: require('./uglify'),

    tasks: [
      'grunt-concurrent',
      'grunt-contrib-clean',
      'grunt-contrib-compass',
      'grunt-contrib-concat',
      'grunt-contrib-copy',
      'grunt-contrib-cssmin',
      'grunt-contrib-jshint',
      'grunt-contrib-requirejs',
      'grunt-contrib-uglify'
    ]
  };

  // only configure development tasks if needed
  if (grunt.cli.tasks.length === 0 ||
      // build related tasks (concurrent tasks are separate grunt processes)
      [
        'build',
        'copy',
        'jshint:scripts',
        'compass:dev',
        'cssmin:dist',
        'uglify',
        'runpreinstall:dist'
      ].indexOf(grunt.cli.tasks[0]) === -1) {

    config.connect = require('./connect');
    config.watch = require('./watch');

    config.tasks.push(
      'grunt-contrib-connect',
      'grunt-contrib-watch',
      'grunt-mocha-phantomjs',
      'grunt-connect-proxy'
    );
  }

  return config;
};

module.exports = gruntconfig;