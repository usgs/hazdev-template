'use strict';

var config = require('./config');

var svgmin = {
  options: {
    plugins: [
      {removeViewBox: false},
      {removeUselessStrokeAndFill: false}
    ]
  },
  dist: {
    files: {
    }
  }
};

// minify from build into dist
[
  'htdocs/images/usgs-logo.svg'
].forEach(function (file) {
  svgmin.dist.files[config.dist + '/' + file] =
      config.build + '/' + config.src + '/' + file;
});

module.exports = svgmin;
