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
      port: config.devPort,
      rewrite: {'/theme': ''}
    }],
    options: {
      base: [config.example],
      port: config.examplePort,
      open: 'http://localhost:' + config.examplePort + '/',
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
      port: config.devPort,
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
      port: config.devPort,
      rewrite: {'/theme': ''}
    }],
    options: {
      base: [config.example],
      port: config.distPort,
      open: 'http://localhost:' + config.distPort + '/',
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
      port: config.devPort,
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
  },

  test: {
    proxies: [{
      context: '/theme',
      host: 'localhost',
      port: config.devPort,
      rewrite: {'/theme': ''}
    }],
    options: {
      base: [
        config.build + '/' + config.test,
        'node_modules'
      ],
      port: config.testPort,
      open: 'http://localhost:' + config.testPort + '/test.html',
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

};


module.exports = connect;
