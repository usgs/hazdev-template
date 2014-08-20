'use strict';

var LIVE_RELOAD_PORT = 35729;
var lrSnippet = require('connect-livereload')({port: LIVE_RELOAD_PORT});
var proxyRequest = require('grunt-connect-proxy/lib/utils').proxyRequest;
var gateway = require('gateway');
var child_process = require('child_process');


var mountFolder = function (connect, dir) {
	return connect.static(require('path').resolve(dir));
};

var mountPHP = function (dir, options) {
	options = options || {
		'phpini': '/src/conf/php.ini'
	};
	var gatewayOptions = {
		'.php': 'php-cgi',
		'env': {
			'PHPRC': process.cwd() + options.phpini
		}
	};

	return gateway(require('path').resolve(dir), gatewayOptions);
};

module.exports = function (grunt) {

	// Load grunt tasks
	require('matchdep').filterAll('grunt-*').forEach(grunt.loadNpmTasks);

	// App configuration, used throughout
	var appConfig = {
		src: 'src',
		dist: 'dist',
		example: 'example',
		tmp: '.tmp'
	};

	grunt.initConfig({
		app: appConfig,
		watch: {
			scripts: {
				files: ['<%= app.src %>/htdocs/js/**/*.js'],
				tasks: ['concurrent:scripts'],
				options: {
					livereload: LIVE_RELOAD_PORT
				}
			},
			scss: {
				files: [
					'<%= app.src %>/htdocs/**/*.scss',
					'<%= app.example %>/**/*.scss'
				],
				tasks: ['compass:dev', 'compass:example']
			},
			examples: {
				files: ['<%= app.example %>/*.html', '<%= app.example %>/**/*.js'],
				tasks: ['concurrent:examples']
			},
			livereload: {
				options: {
					livereload: LIVE_RELOAD_PORT
				},
				files: [
					'<%= app.src %>/htdocs/**/*.html',
					'<%= app.src %>/**/*.php',
					'<%= app.example %>/**/*.html',
					'<%= app.example %>/**/*.php',
					'<%= app.src %>/htdocs/css/**/*.css',
					'<%= app.src %>/htdocs/images/**/*.{png,jpg,jpeg,gif}',
					'.tmp/css/**/*.css'
				]
			},
			gruntfile: {
				files: ['Gruntfile.js'],
				tasks: ['jshint:gruntfile']
			}
		},
		concurrent: {
			scripts: ['jshint:scripts'],
			examples: ['jshint:examples'],
			predist: [
				'jshint:scripts',
				'jshint:examples',
				'compass',
				'copy'
			],
			dist: [
				'cssmin:dist',
				'htmlmin:dist',
				'uglify',
				'runpreinstall:dist'
			]
		},
		connect: {
			options: {
				hostname: '0.0.0.0'
			},
			dev: {
				options: {
					base: '<%= app.src %>/htdocs',
					port: 8080,
					middleware: function (connect, options) {
						return [
							mountPHP(options.base),
							mountFolder(connect, options.base),

							mountFolder(connect, '.tmp')
						];
					}
				}
			},
			exampleDev: {
				proxies: [{
					context: '/theme',
					host: 'localhost',
					https: false,
					port: '<%= connect.dev.options.port %>',
					chnageOrigin: false,
					xforward: false,
					rewrite: {'/theme': ''}
				}],
				options: {
					base: '<%= app.example %>',
					port: 8081,
					middleware: function (connect, options) {
						return [
							lrSnippet,
							proxyRequest,
							mountPHP(options.base),
							mountFolder(connect, options.base),

							mountFolder(connect, '.tmp'),
							mountFolder(connect, 'node_modules')
						];
					}
				}
			},

			dist: {
				options: {
					base: '<%= app.dist %>/htdocs',
					port: 8082,
					middleware: function (connect, options) {
						return [
							mountPHP(options.base, {phpini: '/dist/conf/php.ini'}),
							mountFolder(connect, options.base)
						];
					}
				}
			},
			exampleDist: {
				proxies: [{
					context: '/theme',
					host: 'localhost',
					https: false,
					port: '<%= connect.dist.options.port %>',
					chnageOrigin: false,
					xforward: false,
					rewrite: {'/theme': ''}
				}],
				options: {
					base: '<%= app.example %>',
					port: 8083,
					middleware: function (connect, options) {
						return [
							lrSnippet,
							proxyRequest,
							mountPHP(options.base),
							mountFolder(connect, options.base),

							mountFolder(connect, '.tmp'),
							mountFolder(connect, 'node_modules')
						];
					}
				}
			}
		},
		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			gruntfile: ['Gruntfile.js'],
			scripts: ['<%= app.src %>/htdocs/js/**/*.js'],
			examples: ['<%= app.example %>/**/*.js']
		},
		compass: {
			dev: {
				options: {
					sassDir: '<%= app.src %>/htdocs/css',
					cssDir: '<%= app.tmp %>/css',
					environment: 'development'
				}
			},
			example: {
				options: {
					sassDir: '<%= app.example %>/css',
					cssDir: '<%= app.tmp %>/css',
					environment: 'development'
				}
			}
		},
		requirejs: {
			dist: {
				options: {
					appDir: appConfig.src + '/htdocs',
					baseUrl: 'js',
					dir: appConfig.dist + '/htdocs',
					useStrict: true,
					wrap: false,
					fileExclusionRegExp: /^(\.|.*\.scss)/,
					optimize: 'none',

					// for bundling require library in to index.js
					paths: {
						requireLib: '../../../node_modules/requirejs/require',
						theme: '.'
					},

					modules: [
						{
							name: 'index',
							include: ['requireLib']
						}
						// the index module is enough to compile all other scripts
					]
				}
			}
		},
		cssmin: {
			dist: {
				expand: true,
				cwd: '<%= app.tmp %>',
				src: [
					'**/*.css'
				],
				dest: '<%= app.dist %>/htdocs'
			}
		},
		htmlmin: {
			dist: {
				options: {
					collapseWhitespace: true
				},
				files: [{
					expand: true,
					cwd: '<%= app.src %>',
					src: '**/*.html',
					dest: '<%= app.dist %>'
				}]
			}
		},
		uglify: {
			options: {
				mangle: {
					except: ['require']
				},
				compress: true,
				report: 'gzip'
			},
			dist: {
				files: {
					'<%= app.dist %>/htdocs/js/uglified.js':
							['<%= app.dist %>/htdocs/js/index.js'],
					'<%= app.dist %>/htdocs/js/classList.js':
							['<%= app.dist %>/htdocs/js/classList.js']
				}
			}
		},
		copy: {
			app: {
				expand: true,
				cwd: '<%= app.src %>/htdocs',
				dest: '<%= app.dist %>/htdocs',
				src: [
					'images/**/*.{png,gif,jpg,jpeg}',
					'**/*.php',
					'js/classList.js'
				]
			},
			lib: {
				expand: true,
				cwd: '<%= app.src %>/lib',
				dest: '<%= app.dist %>/lib',
				src: [
					'**/*'
				],
				options: {
					mode: true
				}
			}
		},
		open: {
			exampleDev: {
				path: 'http://localhost:<%= connect.exampleDev.options.port %>'
			},
			exampleDist: {
				path: 'http://localhost:<%= connect.exampleDist.options.port %>'
			}
		},
		clean: {
			dist: ['<%= app.dist %>'],
			dev: ['<%= app.tmp %>', '.sass-cache']
		}
	});

	grunt.event.on('watch', function (action, filepath) {
		// Only lint the file that actually changed
		grunt.config(['jshint', 'scripts'], filepath);
	});

	grunt.registerTask('runpreinstall:dev', function () {
		var done = this.async();
		child_process.exec('php src/lib/pre-install.php',
				function (error, stdout, stderr) {
					if (error !== null) {
						grunt.log.error(stderr);
						done(false);
					} else {
						grunt.log.write(stdout);
						done();
					}
				});
	});

	grunt.registerTask('runpreinstall:dist', function () {
		var done = this.async();
		child_process.exec('php dist/lib/pre-install.php',
				function (error, stdout, stderr) {
					if (error !== null) {
						grunt.log.error(error);
						grunt.log.error(stdout);
						grunt.log.error(stderr);
						done(false);
					} else {
						grunt.log.write(stdout);
						done();
					}
				});
	});

	// build the distribution
	grunt.registerTask('build', [
		'clean:dist',
		'concurrent:predist',
		'requirejs:dist',
		'concurrent:dist'
	]);

	// preview the distribution
	grunt.registerTask('dist', [
		'build',
		'configureProxies:exampleDist',
		'connect:dist',
		'connect:exampleDist',
		'open:exampleDist',
		'watch'
	]);

	// develop
	grunt.registerTask('default', [
		'clean',
		'runpreinstall:dev',
		'compass:dev',
		'compass:example',
		'configureProxies:exampleDev',
		'connect:dev',
		'connect:exampleDev',
		'open:exampleDev',
		'watch'
	]);

};
