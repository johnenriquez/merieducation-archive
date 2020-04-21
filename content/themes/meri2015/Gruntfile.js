// Gruntfile.js
module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.log.write( '\n\n!!! dont forget JS & image tasks !!!\n\n' );
    grunt.initConfig({

      pkg: grunt.file.readJSON('package.json'),

      // Watch task config
      watch: {
        sass: {
          files: [ 'scss/**/*.scss' ],
          tasks: [ 'sass', 'autoprefixer', 'cssmin' ]
        },
        //js: {
        //  files: [ 'js/*.js' ],
        //  tasks: [ 'jshint' ]
        //}
      },

      // Sass task Config
      sass: {
        dev: {
          options: {
            style: 'expanded',
            sourcemap: 'none'
          },
          files: {
            "style.css" : "scss/style.scss"
          }
        }
      },

      // autoprefixer config
      autoprefixer: {
        options: {
          browsers: [ 'last 2 versions', 'ie 9', 'ios 6', 'android 4', '> 1%' ],
        },
        dist: {
          files: {
            'style.css' : 'style.css'
          },
        }
      },

      // css min config
      cssmin: {
        options: {
          keepSpecialComments: 1
        },
        dev: {
          src: 'style.css',
          dest: 'style.css'
        }
      },

      // jshint

    });

    grunt.registerTask( 'default', 'watch' );

};