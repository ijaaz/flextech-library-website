module.exports = function(grunt) {
  grunt.initConfig({
    stylus: {
      compile: {
        options: {
          compress: false,
          paths: ['source/stylus', 'build/css']
        },
        files: {
          'build/style.css': 'source/stylus/main.styl'
        }
      }
    },

    autoprefixer: {
      compile: {
        files: {
          'build/style.css': 'build/style.css'
        },
      },
    },

    cssmin: {
      clean: {
        files: {
          'build/style.css': 'build/style.css'
        }
      }
    },

    jade: {
      compile: {
        files: [{
          expand: true,
          cwd: "source/jade",
          src: "*.jade",
          dest: "build",
          ext: ".html"
        }]
      }
    },

    watch: {
      stylus: {
        files: [ 'source/stylus/*.styl' ],
        tasks: ['stylus', 'autoprefixer', 'cssmin']
      },
      jade: {
        files: [ 'source/jade/*.jade' ],
        tasks: ['jade']
      }
    },

    express: {
      all: {
        options: {
          bases: 'build',
          livereload: true,
          open: 'http://localhost:3000'
        }
      }
    },

  });

  grunt.registerTask('start', ['express', 'watch']);

  // Load grunt plugins.
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-jade');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-express');

};
