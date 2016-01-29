/*
*  Altair Admin (AngularJS)
*  Automated tasks ( http://gulpjs.com/ )
*/

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*', '*'],
        replaceString: /\bgulp[\-.]/
    });

// browser sync
var bs_angular = require('browser-sync').create('altair_angular');

// chalk error
var chalk = require('chalk');
var chalk_error = chalk.bold.red;

// get altair version
var pjson = require('./package.json');
var version = pjson.version;

// 1. -------------------- MINIFY/CONCATENATE JS FILES --------------------

// commmon
gulp.task('common_js', function () {
    return gulp.src([
        "bower_components/jquery/dist/jquery.js",
        "bower_components/modernizr/modernizr.js",
        // moment
        "bower_components/moment/moment.js",
        // fastclick (touch devices)
        "bower_components/fastclick/lib/fastclick.js",
        // custom scrollbar
        "bower_components/jquery.scrollbar/jquery.scrollbar.js",
        // create easing functions from cubic-bezier co-ordinates
        "bower_components/jquery-bez/jquery.bez.min.js",
        // Get the actual width/height of invisible DOM elements with jQuery
        "bower_components/jquery.actual/jquery.actual.js",
        // waypoints
        "bower_components/waypoints/lib/jquery.waypoints.js",
        // velocityjs (animation)
        "bower_components/velocity/velocity.js",
        "bower_components/velocity/velocity.ui.js",
        // advanced cross-browser ellipsis
        "bower_components/jQuery.dotdotdot/src/js/jquery.dotdotdot.js",
        // hammerjs
        "bower_components/hammerjs/hammer.js",
        // scrollbar width
        "assets/js/custom/jquery.scrollbarWidth.js",
        // jquery.debouncedresize
        "bower_components/jquery.debouncedresize/js/jquery.debouncedresize.js",
        // screenfull
        "bower_components/screenfull/dist/screenfull.js"
    ])
        .pipe(plugins.concat('common.js'))
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('common.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// cutom uikit
gulp.task('uikit_js', function () {
    return gulp.src([
        // uikit core
        "bower_components/uikit/js/uikit.js",
        // uikit components
        "bower_components/uikit/js/components/accordion.js",
        "bower_components/uikit/js/components/autocomplete.js",
        "assets/js/custom/uikit_datepicker.js",
        "bower_components/uikit/js/components/form-password.js",
        "bower_components/uikit/js/components/form-select.js",
        "bower_components/uikit/js/components/grid.js",
        "bower_components/uikit/js/components/lightbox.js",
        "bower_components/uikit/js/components/nestable.js",
        "bower_components/uikit/js/components/notify.js",
        "bower_components/uikit/js/components/sortable.js",
        "assets/js/custom/uikit_sticky.js",
        "bower_components/uikit/js/components/tooltip.js",
        "assets/js/custom/uikit_timepicker.js",
        "bower_components/uikit/js/components/upload.js",
        "assets/js/custom/uikit_beforeready.js"
    ])
        .pipe(plugins.concat('uikit_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('uikit_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// common/custom functions
gulp.task('custom_js_minify', function () {
    return gulp.src([
        'assets/js/custom/*.js',
        '!assets/js/**/*.min.js'
    ])
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename({
            extname: ".min.js"
        }))
        .pipe(gulp.dest(function(file) {
            return file.base;
        }));
});

// -------------------- LESS TO CSS --------------------

// main styles
gulp.task('less_main', function() {
    return gulp.src('assets/less/main.less')
        .pipe(plugins.less())
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(bs_angular.stream())
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('main.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// -------------------- MINIFY JSON --------------------

gulp.task('json_minify', function() {
    return gulp.src([
            'data/*.json',
            '!data/*.min.json'
        ])
        .pipe(plugins.jsonminify())
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(plugins.rename({
            extname: ".min.json"
        }))
        .pipe(gulp.dest('data/'));
});

// -------------------- BROWSER SYNC http://www.browsersync.io/docs/ --------------------
gulp.task('browser-sync', function() {

    bs_angular.init({
        // http://www.browsersync.io/docs/options/#option-host
        host: "10.0.0.188",
        // http://www.browsersync.io/docs/options/#option-proxy
        proxy: "altair_app.local",
        // http://www.browsersync.io/docs/options/#option-port
        port: 3022,
        // http://www.browsersync.io/docs/options/#option-notify
        notify: true,
        ui: {
            port: 3021
        }
    });

    gulp.watch([
        'assets/less/**/*.less',
        '!assets/less/pages/error_page.less',
        '!assets/less/pages/login_page.less'
    ],['less_main']);

    gulp.watch([
        'index.html',
        'app/**/*',
        '!app/**/*.min.js'
    ]).on('change', bs_angular.reload);

});

// -------------------- DEFAULT TASK ----------------------
gulp.task('default', function(callback) {
    return plugins.runSequence(
        ['common_js','custom_js_minify','uikit_js','less_main','json_minify'],
        callback
    );
});