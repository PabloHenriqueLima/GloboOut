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
            options:{
                mangle:false
            },
            my_target: {
                files: {
                    'dist/js/built.min.js': [
                        'src/js/vendor/jquery.js',
                        'src/js/vendor/bootstrap.min.js',
                        'src/js/plugins/least.min.js',
                        'src/js/plugins/jquery.lazyload.min.js',
                        'src/js/plugins/gmaps.js',
                        'src/js/plugins/jquery.easing.min.js',
                        'src/js/plugins/classie.js',
                        'src/js/plugins/cbpAnimatedHeader.js',
                        'src/js/plugins/jqBootstrapValidation.js',
                        'src/js/plugins/contact_me.js',
                        'src/js/plugins/alertify.js',
                        'src/js/plugins/freelancer.js'

                    ]
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