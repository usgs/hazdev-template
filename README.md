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

3. Preview in a browser

    `grunt`


### Example usage

The `test` directory shows an example usage of the template:

* css/index.scss defines css variables, and includes the template sass partial
* _config.inc.php configures site wide settings
* _navigation.inc.php configures left navigation
* index.php includes the template



## Embedding the hazdev-template in another project

<pre><code>npm install grunt-connect-rewrite --save-dev
npm install git+https://github.com/usgs/hazdev-template.git --save-dev</code></pre>


### Gruntfile configuration


Configure php include path, by updating the mountPHP middleware function:

<pre><code>var mountPHP = function (dir, options) {
	<strong>options = options || {
		'.php': 'php-cgi',
		'env': {
			'PHPRC': process.cwd() + '/node_modules/hazdev-template/src/conf/php.ini'
		}
	};</strong>
	return gateway(require('path').resolve(dir), options);
};
</code></pre>

#### Configure grunt-connect-rewrite module:

In each grunt task that uses connect, add configureRewriteRules task before any connect:

<pre><code>grunt.registerTask('default', [
    'clean:dist',
    'compass:dev',
    <strong>'configureRewriteRules',</strong>
    'connect:test',
    'connect:dev',
    'open:test',
    'open:dev',
    'watch'
]);
</code></pre>

At top of Gruntfile, add this:

<pre><code><strong>var rewriteRulesSnippet = require('grunt-connect-rewrite/lib/utils').rewriteRequest;</strong>
</code></pre>


In the connect section, add a rules property to configure template rewrites; add the rewriteRulesSnippet middleware and mount the node_modules folder

<pre><code>connect: {
    options: {
            hostname: 'localhost'
    },
    <strong>rules: [
            {from:'^/theme/(.*)$', to: '/hazdev-template/src/htdocs/$1'}
    ],</strong>
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
                                    <strong>rewriteRulesSnippet,
                                    mountFolder(connect, 'node_modules')</strong>
                            ];
                    }
            }
    }
 }
</code></pre>


