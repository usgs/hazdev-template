'use strict';

var config = require('./config'),
    path = require('path');


var getProxy = function () {
  var proxy = require('grunt-connect-proxy/lib/utils');
  return proxy.proxyRequest;
};

var mountFolder = function (connect, dir) {
  return connect.static(path.resolve(dir));
};

var mountPHP = function (dir, options) {
  options = options || {
    'phpini': config.src + '/conf/php.ini'
  };
  var gateway = require('gateway');
  var gatewayOptions = {
    '.php': 'php-cgi',
    'env': {
      'PHPRC': process.cwd() + '/' + options.phpini
    }
  };

  return gateway(path.resolve(dir), gatewayOptions);
};


var connect = {
  options: {
    hostname: '*'
  },
  dev: {
    proxies: [{
      context: '/theme',
      host: 'localhost',
      https: false,
      port: '<%= connect.devTemplate.options.port %>',
      changeOrigin: false,
      xforward: false,
      rewrite: {'/theme': ''}
    }],
    options: {
      base: config.example,
      port: 8000,
      open: 'http://localhost:8000/',
      livereload: true,
      middleware: function (connect, options) {
        return [
          getProxy(),
          mountPHP(options.base[0], {
            phpini: config.build + '/' + config.src + '/conf/php.ini'
          }),
          mountFolder(connect, options.base[0])
        ];
      }
    }
  },

  devTemplate: {
    options: {
      base: config.build + '/' + config.src + '/htdocs',
      port: 8003,
      middleware: function (connect, options) {
        return [
          mountPHP(options.base[0], {
            phpini: config.build + '/' + config.src + '/conf/php.ini'
          }),
          mountFolder(connect, options.base[0])
        ];
      }
    }
  },

  dist: {
    proxies: [{
      context: '/theme',
      host: 'localhost',
      https: false,
      port: '<%= connect.distTemplate.options.port %>',
      changeOrigin: false,
      xforward: false,
      rewrite: {'/theme': ''}
    }],
    options: {
      base: config.example,
      port: 8002,
      open: 'http://localhost:8002/',
      keepalive: true,
      middleware: function (connect, options) {
        return [
          getProxy(),
          mountPHP(options.base[0], {phpini: config.dist + '/conf/php.ini'}),
          mountFolder(connect, options.base[0])
        ];
      }
    }
  },

  distTemplate: {
    options: {
      base: config.dist + '/htdocs',
      port: 8003,
      middleware: function (connect, options) {
        return [
          mountPHP(options.base[0], {phpini: config.dist + '/conf/php.ini'}),
          mountFolder(connect, options.base[0])
        ];
      }
    }
  }

};


module.exports = connect;
