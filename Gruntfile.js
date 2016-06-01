module.exports = function(grunt) {
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        watch: {
            files: ['src/MagicWordBundle/Resources/public/js/*', 'src/MagicWordBundle/Resources/public/css/*'],
            tasks: ['uglify', 'less'],
          },
        less: {
            dist: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "web/css/main.css": [
                        "bower_components/bootstrap/dist/css/bootstrap.css",
                        "bower_components/font-awesome/css/font-awesome.css",
                        'src/MagicWordBundle/Resources/public/css/main.css',
                        "bower_components/FlipClock/compiled/flipclock.css",
                        'src/MagicWordBundle/Resources/public/css/play.css',
                    ]
                }
            }
        },
        uglify: {
            options: {
                mangle: false,
                sourceMap: true
            },
            dist: {
                files: {
                    'web/js/main.js': [
                        "bower_components/jquery/dist/jquery.min.js",
                        "bower_components/bootstrap/dist/js/bootstrap.min.js",
                        'web/bundles/fosjsrouting/js/router.js',
                        'src/MagicWordBundle/Resources/public/js/main.js',
                    ],
                    'web/js/grid_creation.js': [
                        "src/MagicWordBundle/Resources/public/js/bologne.js",
                        "src/MagicWordBundle/Resources/public/js/grid_create.js"
                    ],
                    'web/js/play.js': [
                        "bower_components/FlipClock/compiled/flipclock.min.js",
                        "src/MagicWordBundle/Resources/public/js/play.js"
                    ]

                }
            }
        },
        copy: {
            // customisation to add font files from CSS libraries:
            fonts: {
                expand: true,
                flatten: true,
                cwd: '',
                dest: 'web/fonts/',
                src: ['bower_components/font-awesome/fonts/*']
            }
        },

    });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.registerTask('default', ["less", "uglify", "copy:fonts", "watch"]);
};