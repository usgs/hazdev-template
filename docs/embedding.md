Embedding the hazdev-template in another project
================================================


<pre><code>npm install grunt-connect-rewrite --save-dev
npm install git+https://github.com/usgs/hazdev-template.git --save-dev</code></pre>


## Gruntfile configuration

NOTE: Plus (+) characters are added to the beginning of lines to highlight lines being added to the gruntfile, but are not part of the content that should be added.

Configure php include path, by updating the mountPHP middleware function:

<pre><code>var mountPHP = function (dir, options) {<strong>
+	options = options || {
+	  '.php': 'php-cgi',
+	  'env': {
+	    'PHPRC': process.cwd() + '/node_modules/hazdev-template/src/conf/php.ini'
+	  }
+ };</strong>
	return gateway(require('path').resolve(dir), options);
};
</code></pre>

#### Configure grunt-connect-rewrite module:

In each grunt task that uses connect, add configureRewriteRules task before any connect:

<pre><code>grunt.registerTask('default', [
    'clean:dist',
    'compass:dev',<strong>
+   'configureRewriteRules',</strong>
    'connect:test',
    'connect:dev',
    'open:test',
    'open:dev',
    'watch'
]);
</code></pre>

At top of Gruntfile, add this:

<pre><code><strong>+ var rewriteRulesSnippet = require('grunt-connect-rewrite/lib/utils').rewriteRequest;</strong>
</code></pre>


In the connect section, add a rules property to configure template rewrites; add the rewriteRulesSnippet middleware and mount the node_modules folder

<pre><code>connect: {
    options: {
            hostname: 'localhost'
    },<strong>
+   rules: {
+           '^/template/(.*)$': '/hazdev-template/src/htdocs/$1'
+   },</strong>
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
                                    mountFolder(connect, options.base),<strong>
+                                   rewriteRulesSnippet,
+                                   mountFolder(connect, 'node_modules')</strong>
                            ];
                    }
            }
    }
 }
</code></pre>


## Site configuration

See [Site Configuration](siteConfiguration.md) for information on configuring a template theme and site.  The effective DOCUMENT_ROOT is often `src/htdocs`, for `_config.inc.php`, but may vary.

