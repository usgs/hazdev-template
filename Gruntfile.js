'use strict';

module.exports = function (grunt) {

  // Load build dependencies
  var gruntConfig = require('./gruntconfig')(grunt),
      config = gruntConfig.config,
      child_process = require('child_process'),
      path = require('path'),
      fs = require('fs');

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

  gruntConfig.tasks.forEach(loadNpmTasks);
  grunt.initConfig(gruntConfig);



  grunt.event.on('watch', function (action, filepath) {
    // Only lint the file that actually changed
    grunt.config(['jshint', 'scripts'], filepath);
  });

  grunt.registerTask('runpreinstall', function (dir) {
    var done = this.async();

    child_process.exec('php ' + dir + '/lib/pre-install.php',
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

  // build for dev
  grunt.registerTask('build', [
    'clean',
    'copy:build',
    'compass:build',
    'concurrent:build',
    'runpreinstall:' + config.build + '/' + config.src
  ]);

  // build distribution
  grunt.registerTask('builddist', [
    'build',
    'copy:dist',
    'concurrent:dist',
    'runpreinstall:' + config.dist
  ]);

  // preview the distribution
  grunt.registerTask('dist', [
    'builddist',
    'configureProxies:dist',
    'connect:distTemplate',
    'connect:dist'
  ]);

  // develop
  grunt.registerTask('default', [
    'build',
    'configureProxies:dev',
    'connect:devTemplate',
    'connect:dev',
    'watch'
  ]);

};
