'use strict';

var autoprefixer = require('autoprefixer'),
    cssnano = require('cssnano'),
    calc = require('postcss-calc'),
    precss = require('precss');

var config = require('./config');

var postcss = {

  build: {
    options: {
      map: true,
      processors: [
        precss(),
        calc(),
        autoprefixer({'browsers': 'last 3 versions'})
      ]
    },
    expand: true,
    cwd: config.src + '/htdocs',
    src: [
      '**/*.scss',
      '!**/_*.scss'
    ],
    dest: config.build + '/' + config.src + '/htdocs',
    ext: '.css',
    extDot: 'last'
  },

  dist: {
    options: {
      processors: [
        cssnano({zindex: false})
      ]
    },
    expand: true,
    cwd: config.build + '/' + config.src + '/htdocs',
    src: [
      '**/*.css'
    ],
    dest: config.dist + '/htdocs'
  }
};

module.exports = postcss;
