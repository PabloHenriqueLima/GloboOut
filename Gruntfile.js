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
                    'dist/index.php': 'index.php'
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
                    'dist/js/built.min.js': ['src/js/jquery.js','src/js/bootstrap.min.js','src/js/least.min.js','src/js/jquery.lazyload.min.js','src/js/*.js']
                }
            }
        },
        cssmin: {
            target: {
                files: {
                    'dist/css/built.min.css': ['src/css/*.css','src/css/themes/semantic.css']
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-htmlcompressor');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
};