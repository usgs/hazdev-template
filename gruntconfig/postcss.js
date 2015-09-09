'use strict';

var autoprefixer = require('autoprefixer-core'),
    cssnano = require('cssnano'),
    each = require('postcss-each'),
    precss = require('precss');

var config = require('./config');

var postcss = {

  build: {
    options: {
      processors: [
        autoprefixer({'browsers': 'last 2 versions'}), // vendor prefix
      ]
    },
    files: {
      config.build + '/' + config.src + '/htdocs/css/alert.css':
          config.src + '/htdocs/css/alert.css',
      config.build + '/' + config.src + '/htdocs/css/flexible-grid.css':
          config.src + '/htdocs/css/flexible-grid.css',
      config.build + '/' + config.src + '/htdocs/css/jumplist.css':
          config.src + '/htdocs/css/jumplist.css',
      config.build + '/' + config.src + '/htdocs/css/references.css':
          config.src + '/htdocs/css/references.css',
      config.build + '/' + config.src + '/htdocs/css/responsive-table.css':
          config.src + '/htdocs/css/responsive-table.css',

      config.build + '/' + config.src + '/htdocs/site/default/index.css':
          config.src + '/htdocs/site/default/index.css',
      config.build + '/' + config.src + '/htdocs/site/earthquake/index.css':
          config.src + '/htdocs/site/earthquake/index.css',
      config.build + '/' + config.src + '/htdocs/site/geomag/index.css':
          config.src + '/htdocs/site/geomag/index.css',
      config.build + '/' + config.src + '/htdocs/site/landslides/index.css':
          config.src + '/htdocs/site/landslides/index.css',
    }
  },

  dist: {
    options: {
      processors: [
        cssnano({zindex: false}) // minify
      ]
    },
    files: {
      config.dist + '/htdocs/css/alert.css':
          config.build + '/' + config.src + '/htdocs/css/alert.css',
      config.dist + '/htdocs/css/flexible-grid.css':
          config.build + '/' + config.src + '/htdocs/css/flexible-grid.css',
      config.dist + '/htdocs/css/jumplist.css':
          config.build + '/' + config.src + '/htdocs/css/jumplist.css',
      config.dist + '/htdocs/css/references.css':
          config.build + '/' + config.src + '/htdocs/css/references.css',
      config.dist + '/htdocs/css/responsive-table.css':
          config.build + '/' + config.src + '/htdocs/css/responsive-table.css',

      config.dist + '/htdocs/site/default/index.css':
          config.build + '/' + config.src + '/htdocs/site/default/index.css',
      config.dist + '/htdocs/site/earthquake/index.css':
          config.build + '/' + config.src + '/htdocs/site/earthquake/index.css',
      config.dist + '/htdocs/site/geomag/index.css':
          config.build + '/' + config.src + '/htdocs/site/geomag/index.css',
      config.dist + '/htdocs/site/landslides/index.css':
          config.build + '/' + config.src + '/htdocs/site/landslides/index.css',
    }
  }
};

module.exports = postcss;
