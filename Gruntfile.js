module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
      },
      dist: {
        options: {
          outputStyle: 'compressed',
          sourceMap: true,
        },
        files: {
          'public/css/uthsc.css': 'resources/assets/scss/uthsc.scss'
        }
      }
    },

    copy: {
      main: {
        files: [

          //copy foundation scss
          {
            cwd: 'vendor/bower_components/foundation/scss/',
            expand: true,
            src: ['**'],
            dest: 'resources/assets/scss/'
          },

          //copy foundation js
          {
            expand: true,
            cwd: 'vendor/bower_components/foundation/js/',
            src: ['**'],
            dest: 'resources/assets/js/'
          },

          //copy uthsc scss
          {
            expand: true,
            cwd: 'vendor/bower_components/uthsc/scss/',
            src: ['**'],
            dest: 'resources/assets/scss/'
          },

          //copy uthsc js
          {
            expand: true,
            cwd: 'vendor/bower_components/uthsc/js/',
            src: ['**'],
            dest: 'resources/assets/js/'
          },

          //copy vendor js to public
          {
            expand: true,
            cwd: 'resources/assets/js/vendor',
            src: ['**'],
            dest: 'public/js'
          },

          //copy uthsc js to public
          {
            expand: true,
            cwd: 'resources/assets/js/dist',
            src: ['**'],
            dest: 'public/js'
          },

          //copy css to public
          {
            expand: true,
            cwd: 'vendor/bower_components/uthsc/css/',
            src: ['**'],
            dest: 'public/css'
          },

          //copy fontawesome css to public
          {
            expand: true,
            cwd: 'vendor/bower_components/fontawesome/css/',
            src: ['**'],
            dest: 'public/css'
          },

          //copy fonts to public
          {
            expand: true,
            cwd: 'vendor/bower_components/fontawesome/fonts',
            src: ['**'],
            dest: 'public/fonts'
          },

          //copy images to public
          {
            expand: true,
            cwd: 'vendor/bower_components/uthsc/images/',
            src: ['**'],
            dest: 'public/images'
          },

        ],
      },
    },

    uglify: {
      my_target: {
        files: [{
          expand: true,
          cwd: 'resources/assets/js/scripts/',
          src: '**.js',
          dest: 'resources/assets/js/uthsc.js'
        }]
      }
    },

    watch: {
      grunt: {
        options: {
          reload: true
        },
        files: ['Gruntfile.js']
      },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['build','watch']);
}
