'use strict';

var config = require('./config'),
    path = require('path'),
    fs = require('fs'),
    localModules = process.cwd() + path.sep + 'node_modules';

var requirejs = {
  dist: {
    options: {
      appDir: config.src + '/htdocs',
      baseUrl: 'js',
      dir: config.dist + '/htdocs',
      useStrict: true,
      wrap: false,
      fileExclusionRegExp: /(^\.|\.scss$)/,
      optimize: 'none',

      // for bundling require library in to index.js
      paths: {
        requireLib: (
            fs.existsSync(localModules + path.sep + 'requirejs') ?
            '' : '../../') + '../../../node_modules/requirejs/require',
        theme: '.'
      },

      modules: [
        {
          name: 'index',
          include: ['requireLib']
        }
        // the index module is enough to compile all other scripts
      ]
    }
  }
};

module.exports = requirejs;
