'use strict';

var config = require('./config');

var svgmin = {
  options: {
    plugins: [
      {reviewViewBox: false},
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
  svgmin.dist.files[config.dist + '/' + file] = config.build + '/src/' + file;
});

module.exports = svgmin;
