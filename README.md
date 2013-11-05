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

    `npm install git+https://github.com/jmfee-usgs/hazdev-template.git#initial_import --save-dev`


### Gruntfile configuration


Configure php include path, by updating the mountPHP middleware function:

<pre><code>
var mountPHP = function (dir, options) {
	<strong>options = options || {
		'.php': 'php-cgi',
		'env': {
			'PHPRC': process.cwd() + '/node_modules/hazdev-template/src/conf/php.ini'
		}
	};
	return gateway(require('path').resolve(dir), options);
};
</code></pre>

#### Configure grunt-connect-rewrite module:

In each grunt task that uses connect, add configureRewriteRules task before any connect:

    grunt.registerTask('default', [
        'clean:dist',
        'compass:dev',
        **'configureRewriteRules',**
        'connect:test',
        'connect:dev',
        'open:test',
        'open:dev',
        'watch'
    ]);

At top of Gruntfile, add this:

    **var rewriteRulesSnippet = require('grunt-connect-rewrite/lib/utils').rewriteRequest;**


In the connect section, add a rules property to configure template rewrites; add the rewriteRulesSnippet middleware and mount the node_modules folder

    connect: {
        options: {
                hostname: 'localhost'
        },
        **rules: {**
                **'^/template/(.*)$': '/hazdev-template/src/htdocs/$1'**
        **},**
        dev: {
                options: {
                        base: '<%= app.src %>/htdocs',
                        port: 8080,
                        components: bowerConfig.directory,
                        middleware: function (connect, options) {
                                return [
                                        lrSnippet,
                                        mountFolder(connect, '.tmp'),
                                        mountFolder(connect, 'bower_components'),
                                        mountPHP(options.base),
                                        mountFolder(connect, options.base),
                                        **rewriteRulesSnippet,**
                                        **mountFolder(connect, 'node_modules')**
                                ];
                        }
                }
        }
     }



