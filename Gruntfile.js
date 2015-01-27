'use strict';

var gruntconfig = require('./gruntconfig'),
    child_process = require('child_process'),
    path = require('path'),
    fs = require('fs');


module.exports = function (grunt) {

  // Load build dependencies

  // check if being run as another project's dependency:
  // when npm installs as another projects dependency, npm doesn't reinstall
  // shared (used by parent) dependencies locally, so they must be loaded
  // from parent node modules directory instead.
  var loadNpmTasks = grunt.loadNpmTasks,
      cwd = process.cwd(),
      localModules = cwd + path.sep + 'node_modules',
      parentModules = path.dirname(cwd);
  if (path.basename(parentModules) === 'node_modules') {
    var parentDir = path.dirname(parentModules);

    loadNpmTasks = function (name) {
      if (!fs.existsSync(localModules + path.sep + name)) {
        process.chdir(parentDir);
        grunt.loadNpmTasks(name);
        process.chdir(cwd);
      } else {
        grunt.loadNpmTasks(name);
      }
    };
  }

  var config = gruntconfig(grunt);
  config.tasks.forEach(loadNpmTasks);

  grunt.initConfig(config);



  grunt.event.on('watch', function (action, filepath) {
    // Only lint the file that actually changed
    grunt.config(['jshint', 'scripts'], filepath);
  });

  grunt.registerTask('runpreinstall', function (dir) {
    var done = this.async();
    child_process.exec('php ' + config.config[dir] + '/lib/pre-install.php',
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
    'clean',
    'copy:build',
    'concurrent:build',
    'runpreinstall:build'
  ]);

  // preview the distribution
  grunt.registerTask('dist', [
    'build',
    'copy:dist',
    'concurrent:dist',
    'runpreinstall:dist',
    'configureProxies:exampleDist',
    'connect:dist',
    'connect:exampleDist',
    'watch'
  ]);

  // develop
  grunt.registerTask('default', [
    'build',
    'configureProxies:exampleDev',
    'connect:dev',
    'connect:exampleDev',
    'watch'
  ]);

};
