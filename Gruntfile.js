module.exports = function(grunt) {

    grunt.initConfig({
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['src/*.js'],
                dest: 'dist/built.js'
            }
        },
        htmlcompressor: {
            compile: {
                files: {
                    'dist/index.html': 'src/index.html'
                },
                options: {
                    type: 'html',
                    preserveServerScript: true
                }
            }
        },
        uglify: {
            my_target: {
                files: {
                    'dist/js/built.min.js': ['src/js/*.js']
                }
            }
        },
        cssmin: {
            target: {
                files: {
                    'dist/css/built.min.css': ['src/css/*.css']
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-htmlcompressor');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
};