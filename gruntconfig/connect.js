'use strict';

var config = require('./config');


var rewriteRulesSnppet = require('grunt-connect-rewrite/lib/utils').rewriteRequest;

var connect = {
  options: {
    hostname: '*'
  },
  rules: [
    {
      from: '/theme',
      to: '/'
    }
  ],

  dev: {
    options: {
      base: [config.build + '/' + config.src + '/htdocs'],
      open: 'http://localhost:' + config.devPort + '/theme/index.php',
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
        middlewares.unshift(rewriteRulesSnppet);
        return middlewares;
      }
    }
  },


  test: {
    options: {
      base: [
        config.build + '/' + config.test,
        'node_modules'
      ],
      port: config.testPort,
      open: 'http://localhost:' + config.testPort + '/test.html',
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
    options: {
      base: [config.dist + '/htdocs'],
      port: config.distPort,
      open: 'http://localhost:' + config.distPort + '/theme/index.php',
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(
          require('gateway')(options.base[0], {
            '.php': 'php-cgi',
            'env': {
              'PHPRC': config.dist + '/conf/php.ini'
            }
          })
        );
        middlewares.unshift(rewriteRulesSnppet);
        return middlewares;
      }
    }
  }
};


module.exports = connect;
