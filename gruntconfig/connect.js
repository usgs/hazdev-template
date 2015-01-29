'use strict';

var config = require('./config');


var connect = {
  options: {
    hostname: '*'
  },
  dev: {
    proxies: [{
      context: '/theme',
      host: 'localhost',
      port: '<%= connect.devTemplate.options.port %>',
      rewrite: {'/theme': ''}
    }],
    options: {
      base: [config.example],
      port: 8000,
      open: 'http://localhost:8000/',
      livereload: true,
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(
          require('grunt-connect-proxy/lib/utils').proxyRequest,
          require('gateway')(options.base[0], {
            '.php': 'php-cgi',
            'env': {
              'PHPRC': config.build + '/' + config.src + '/conf/php.ini'
            }
          })
        );
        return middlewares;
      }
    }
  },

  devTemplate: {
    options: {
      base: [config.build + '/' + config.src + '/htdocs'],
      port: 8003,
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(
          require('gateway')(options.base[0], {
            '.php': 'php-cgi',
            'env': {
              'PHPRC': config.build + '/' + config.src + '/conf/php.ini'
            }
          })
        );
        return middlewares;
      }
    }
  },

  dist: {
    proxies: [{
      context: '/theme',
      host: 'localhost',
      port: '<%= connect.distTemplate.options.port %>',
      rewrite: {'/theme': ''}
    }],
    options: {
      base: [config.example],
      port: 8002,
      open: 'http://localhost:8002/',
      keepalive: true,
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(
          require('grunt-connect-proxy/lib/utils').proxyRequest,
          require('gateway')(options.base[0], {
            '.php': 'php-cgi',
            'env': {
              'PHPRC': config.dist + '/conf/php.ini'
            }
          })
        );
        return middlewares;
      }
    }
  },

  distTemplate: {
    options: {
      base: [config.dist + '/htdocs'],
      port: 8003,
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(
          require('gateway')(options.base[0], {
            '.php': 'php-cgi',
            'env': {
              'PHPRC': config.dist + '/conf/php.ini'
            }
          })
        );
        return middlewares;
      }
    }
  }

};


module.exports = connect;
