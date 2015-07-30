'use strict';

var autoprefixer = require('autoprefixer-core'),
    cssnano = require('cssnano');

var config = require('./config');

var postcss = {

  build: {
    options: {
      processors: [
        autoprefixer({'browsers': 'last 2 versions'}), // vendor prefix
      ]
    },
    src: config.build + '/' + config.src + '/**/*.css'
  },

  dist: {
    options: {
      processors: [
        cssnano({zindex: false, merge: false}) // minify
      ]
    },
    files: {
      // config.build + '/' + config.src + '/htdocs/css/alert.css':
      //     config.dist + '/' + '/htdocs/css/alert.css'
      'dist/htdocs/css/alert.css': '.build/src/htdocs/css/alert.css',
      'dist/htdocs/css/flexible-grid.css':
          '.build/src/htdocs/css/flexible-grid.css',
      'dist/htdocs/css/jumplist.css':'.build/src/htdocs/css/jumplist.css',
      'dist/htdocs/css/references.css': '.build/src/htdocs/css/references.css',
      'dist/htdocs/css/responsive-table.css':
          '.build/src/htdocs/css/responsive-table.css',

      'dist/htdocs/site/default/index.css':
          '.build/src/htdocs/site/default/index.css',
      'dist/htdocs/site/earthquake/index.css':
          '.build/src/htdocs/site/earthquake/index.css',
      'dist/htdocs/site/geomag/index.css':
          '.build/src/htdocs/site/geomag/index.css',
      'dist/htdocs/site/landslides/index.css':
          '.build/src/htdocs/site/landslides/index.css',
    }
  }
};

module.exports = postcss;
