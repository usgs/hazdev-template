hazdev-template
===============

Lightweight php template framework



## Working on the hazdev-template project:

### Dependencies:

1. Node, NPM
2. Sass, Compass
3. PHP-CGI 5.4+

### Getting Started:

1. Install NPM dependencies

    `npm install`

2. Install Bower dependencies

    `bower install`

3. Configure the project (do this any time the path to the project changes)

    `php src/lib/pre-install.php`

4. Preview in a browser

    `grunt`


### Example usage

The `test` directory shows an example usage of the template:

* css/index.scss defines css variables, and includes the template sass partial
* _config.inc.php configures site wide settings
* _navigation.inc.php configures left navigation
* index.php includes the template



## Embedding the hazdev-template in another project

Same dependencies as above.

### Gruntfile configuration

Customize your mountPHP connect middleware, so src/lib/php.ini is read by php-cgi, for example:

    var gateway = require('gateway');
    var mountPHP = function (dir, options) {
    	options = options || {
    		'.php': 'php-cgi',
    		'env': {
    			'PHPRC': process.cwd() + '/node_modules/hazdev-template/src/conf/php.ini'
    		}
    	};
    	return gateway(require('path').resolve(dir), options);
    };


