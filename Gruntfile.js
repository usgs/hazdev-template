'use strict';

var LIVE_RELOAD_PORT = 35729;
var lrSnippet = require('connect-livereload')({port: LIVE_RELOAD_PORT});
var rewriteRulesSnippet = require('grunt-connect-rewrite/lib/utils').rewriteRequest;
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
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// App configuration, used throughout
	var appConfig = {
		src: 'src',
		dist: 'dist',
		test: 'test',
		tmp: '.tmp'
	};

	// TODO :: Read this from .bowerrc
	var bowerConfig = {
		directory: 'bower_components'
	};

	grunt.initConfig({
		app: appConfig,
		bower: bowerConfig,
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
					'<%= app.test %>/**/*.scss'
				],
				tasks: ['compass:dev', 'compass:test']
			},
			tests: {
				files: ['<%= app.test %>/*.html', '<%= app.test %>/**/*.js'],
				tasks: ['concurrent:tests']
			},
			livereload: {
				options: {
					livereload: LIVE_RELOAD_PORT
				},
				files: [
					'<%= app.src %>/htdocs/**/*.html',
					'<%= app.src %>/htdocs/css/**/*.css',
					'<%= app.src %>/htdocs/img/**/*.{png,jpg,jpeg,gif}',
					'.tmp/css/**/*.css'
				]
			},
			gruntfile: {
				files: ['Gruntfile.js'],
				tasks: ['jshint:gruntfile']
			}
		},
		concurrent: {
			scripts: ['jshint:scripts', 'mocha_phantomjs'],
			tests: ['jshint:tests', 'mocha_phantomjs'],
			predist: [
				'jshint:scripts',
				'jshint:tests',
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
				hostname: 'localhost'
			},
			rules: {
				'^/theme/(.*)$': '/$1'
			},
			dev: {
				options: {
					base: '<%= app.src %>/htdocs',
					port: 8080,
					components: bowerConfig.directory,
					middleware: function (connect, options) {
						return [
							lrSnippet,
							rewriteRulesSnippet,
							mountFolder(connect, '.tmp'),
							mountFolder(connect, options.components),
							mountPHP(options.base),
							mountFolder(connect, options.base)
						];
					}
				}
			},
			dist: {
				options: {
					base: '<%= app.dist %>/htdocs',
					port: 8081,
					middleware: function (connect, options) {
						return [
							rewriteRulesSnippet,
							mountPHP(appConfig.test, {phpini: '/dist/conf/php.ini'}),
							mountFolder(connect, appConfig.test),
							mountFolder(connect, options.base)
						];
					}
				}
			},
			test: {
				options: {
					base: '<%= app.test %>',
					components: bowerConfig.directory,
					port: 8000,
					middleware: function (connect, options) {
						return [
							rewriteRulesSnippet,
							mountFolder(connect, '.tmp'),
							mountFolder(connect, 'bower_components'),
							mountFolder(connect, 'node_modules'),
							mountPHP(options.base),
							mountFolder(connect, options.base),
							mountFolder(connect, appConfig.src + '/htdocs')
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
			tests: ['<%= app.test %>/**/*.js']
		},
		compass: {
			dev: {
				options: {
					sassDir: '<%= app.src %>/htdocs/css',
					cssDir: '<%= app.tmp %>/css',
					environment: 'development'
				}
			},
			test: {
				options: {
					sassDir: '<%= app.test %>/css',
					cssDir: '<%= app.tmp %>/css',
					environment: 'development'
				}
			}
		},
		mocha_phantomjs: {
			all: {
				options: {
					urls: [
						'http://localhost:<%= connect.test.options.port %>/index.html'
					]
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

					// for bundling require library in to index.js
					paths: {
						requireLib: '../../../bower_components/requirejs/require'
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
				files: {
					'<%= app.dist %>/htdocs/css/index.css': [
						'<%= app.src %>/htdocs/css/**/*.css',
						'.tmp/css/**/*.css'
					]
				}
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
							['<%= app.dist %>/htdocs/js/index.js']
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
					'**/*.php'
				]
			},
			lib: {
				expand: true,
				cwd: '<%= app.src %>/lib',
				dest: '<%= app.dist %>/lib',
				src: [
					'**/*'
				]
			}
		},
		replace: {
			dist: {
				src: [
					'<%= app.dist %>/htdocs/index.html',
					'<%= app.dist %>/**/*.php'
				],
				overwrite: true,
				replacements: [
					{
						from: 'html5shiv-dist/html5shiv.js',
						to: 'lib/html5shiv/html5shiv.js'
					}
				]
			}
		},
		open: {
			dev: {
				path: 'http://localhost:<%= connect.dev.options.port %>'
			},
			test: {
				path: 'http://localhost:<%= connect.test.options.port %>'
			},
			dist: {
				path: 'http://localhost:<%= connect.dist.options.port %>'
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

	grunt.registerTask('test', [
		'clean:dist',
		'configureRewriteRules',
		'connect:test',
		'mocha_phantomjs'
	]);

	grunt.registerTask('build', [
		'clean:dist',
		'concurrent:predist',
		'requirejs:dist',
		'concurrent:dist',
		'replace',
		'configureRewriteRules',
		'connect:dist',
		'open:dist',
		'watch'
	]);

	grunt.registerTask('default', [
		'clean:dist',
		'runpreinstall:dev',
		'compass:dev',
		'configureRewriteRules',
		'connect:test',
		'open:test',
		'watch'
	]);

};
