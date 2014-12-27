module.exports = function(grunt) {
    grunt.initConfig({

        imageoptim: {
            myPngs: {
                options: {
                    jpegMini: false,
                    imageAlpha: true,
                    quitAfter: true
                },
                src: ['img/gallery/*']
            },
            myJpgs: {
                options: {
                    jpegMini: true,
                    imageAlpha: false,
                    quitAfter: true
                },
                src: ['img/gallery']
            }
        }

    });
    grunt.loadNpmTasks('grunt-imageoptim');
};