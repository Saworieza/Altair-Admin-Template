/*
*  Altair Admin
*  Automated tasks ( http://gulpjs.com/ )
*
*  1. minify/concatenate js files
*  2. less to css
*  3. minify json
*  4. browser sync http://www.browsersync.io/docs/
*  5. process all js
*  6. process all less
*  7. default task
*  8. build release folder
*  9. helpers
*
*/

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*', '*'],
        replaceString: /\bgulp[\-.]/
    });

// browser sync
var bs_html = require('browser-sync').create('bs_html');

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
            // retina images
            "bower_components/dense/src/dense.js",
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
            "bower_components/jquery.dotdotdot/src/js/jquery.dotdotdot.js",
            // iCheck
            "bower_components/jquery-icheck/icheck.js",
            // selectize
            "bower_components/selectize/dist/js/standalone/selectize.js",
            // switchery
            "bower_components/switchery/dist/switchery.js",
            // prism syntax highlighter
            "bower_components/prism/prism.js",
            "bower_components/prism/components/prism-php.js",
            "bower_components/prism/plugins/line-numbers/prism-line-numbers.js",
            // textarea-autosize
            "bower_components/autosize/dist/autosize.js",
            // hammerjs
            "bower_components/hammerjs/hammer.js",
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

// uikit htmleditor
gulp.task('uikit_htmleditor_js', function () {
    return gulp.src([
            // htmleditor
            "bower_components/codemirror/lib/codemirror.js",
            "bower_components/codemirror/mode/markdown/markdown.js",
            "bower_components/codemirror/addon/mode/overlay.js",
            "bower_components/codemirror/mode/javascript/javascript.js",
            "bower_components/codemirror/mode/php/php.js",
            "bower_components/codemirror/mode/gfm/gfm.js",
            "bower_components/codemirror/mode/xml/xml.js",
            "bower_components/marked/lib/marked.js",
            "bower_components/uikit/js/components/htmleditor.js"
        ])
        .pipe(plugins.concat('uikit_htmleditor_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }).on('error', function(e) {
            console.log('\x07',e.message); return this.end();
        }))
        .pipe(plugins.rename('uikit_htmleditor_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// custom kendoui
gulp.task('kendoui_js', function () {
    // js
    return  gulp.src([
            "bower_components/kendo-ui/src/js/kendo.core.js",
            "bower_components/kendo-ui/src/js/kendo.color.js",
            "bower_components/kendo-ui/src/js/kendo.data.js",
            "bower_components/kendo-ui/src/js/kendo.calendar.js",
            "bower_components/kendo-ui/src/js/kendo.popup.js",
            "bower_components/kendo-ui/src/js/kendo.datepicker.js",
            "bower_components/kendo-ui/src/js/kendo.timepicker.js",
            "bower_components/kendo-ui/src/js/kendo.datetimepicker.js",
            "bower_components/kendo-ui/src/js/kendo.list.js",
            "bower_components/kendo-ui/src/js/kendo.fx.js",
            "bower_components/kendo-ui/src/js/kendo.userevents.js",
            "bower_components/kendo-ui/src/js/kendo.menu.js",
            "bower_components/kendo-ui/src/js/kendo.draganddrop.js",
            "bower_components/kendo-ui/src/js/kendo.slider.js",
            "bower_components/kendo-ui/src/js/kendo.mobile.scroller.js",
            "bower_components/kendo-ui/src/js/kendo.autocomplete.js",
            "bower_components/kendo-ui/src/js/kendo.combobox.js",
            "bower_components/kendo-ui/src/js/kendo.dropdownlist.js",
            "bower_components/kendo-ui/src/js/kendo.colorpicker.js",
            "bower_components/kendo-ui/src/js/kendo.combobox.js",
            "bower_components/kendo-ui/src/js/kendo.maskedtextbox.js",
            "bower_components/kendo-ui/src/js/kendo.multiselect.js",
            "bower_components/kendo-ui/src/js/kendo.numerictextbox.js",
            "bower_components/kendo-ui/src/js/kendo.toolbar.js",
            "bower_components/kendo-ui/src/js/kendo.panelbar.js",
            "bower_components/kendo-ui/src/js/kendo.window.js"
        ])
        .pipe(plugins.concat('kendoui_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('kendoui_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));

});

// common/page specific functions
gulp.task('page_specific_js', function () {
    return gulp.src([
        'assets/js/altair_admin_common.js',
        'assets/js/pages/*.js',
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

// 2. -------------------- LESS TO CSS --------------------

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
        .pipe(bs_html.stream())
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('main.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// error page
gulp.task('less_error_page', function() {
    return gulp.src('assets/less/pages/error_page.less')
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
        .pipe(bs_html.stream())
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('error_page.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// login page
gulp.task('less_login_page', function() {
    return gulp.src('assets/less/pages/login_page.less')
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
        .pipe(bs_html.stream())
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('login_page.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// 3. -------------------- MINIFY JSON --------------------

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
        .pipe(gulp.dest('data'));
});

// 4. -------------------- BROWSER SYNC http://www.browsersync.io/docs/ --------------------

gulp.task('browser-sync', function() {
    bs_html.init({
        // http://www.browsersync.io/docs/options/#option-host
        host: "10.0.0.188",
        // http://www.browsersync.io/docs/options/#option-proxy
        proxy: "altair_html.local",
        // http://www.browsersync.io/docs/options/#option-port
        port: '3011',
        // http://www.browsersync.io/docs/options/#option-notify
        notify: false,
        ui: {
            port: 3010
        }
    });

    gulp.watch([
        'assets/less/**/*.less',
        '!assets/less/pages/error_page.less',
        '!assets/less/pages/login_page.less'
    ],['less_main']);
    gulp.watch('assets/less/pages/error_page.less',['less_error_page']);
    gulp.watch('assets/less/pages/login_page.less',['less_login_page']);

    gulp.watch([
        '*.php',
        '*.html',
        'php/**/*.php',
        'assets/js/**/*.js',
        '!assets/js/**/*.min.js'
    ]).on('change', bs_html.reload);
});


// 5. -------------------- PROCESS ALL JS --------------------

gulp.task('all_js', ['common_js','uikit_js','uikit_htmleditor_js','kendoui_js','page_specific_js']);

// 6. -------------------- PROCESS ALL LESS ------------------

gulp.task('all_less', ['less_main','less_error_page','less_login_page']);


// 7. -------------------- DEFAULT TASK ----------------------

gulp.task('default', function(callback) {
    return plugins.runSequence(
        ['all_less','all_js','json_minify'],
        callback
    );
});


// 8. -------------------- RELEASE --------------------------

var release_dir = '../../_release/'+version+'/',
    release_doc_dir = release_dir + '/altair_v'+version+'/documentation/',
    release_dist_dir = release_dir + '/altair_v'+version+'/admin/html/dist/',
    release_angular_dir = release_dir + '/altair_v'+version+'/admin/angular/',
    release_src_dir = release_dir + '/altair_v'+version+'/admin/html/src/';
    release_demo_dir = release_dir + '_demo_site/';

// clean release folder
gulp.task('release_clean', function() {
    return plugins.del.sync(
        [release_dir+'**/*'],
        { force: true },
        function (err, paths) {}
    );
});

// copy files from /src
gulp.task('release_dist_copy',function() {
    // copy favicon
    var root_files = gulp.src(['favicon.ico'])
        .pipe(gulp.dest(release_dist_dir));

    // copy bower_components
    var bower_files = gulp.src([
            'bower_components/**',
            '!bower_components/{autosize,autosize/**}',
            '!bower_components/{dense,dense/**}',
            '!bower_components/{fastclick,fastclick/**}',
            '!bower_components/{hammerjs,hammerjs/**}',
            '!bower_components/{jquery,jquery/**}',
            '!bower_components/{jquery.actual,jquery.actual/**}',
            '!bower_components/{jquery.dotdotdot,jquery.dotdotdot/**}',
            '!bower_components/{jquery.scrollbar,jquery.scrollbar/**}',
            '!bower_components/{jquery-bez,jquery-bez/**}',
            '!bower_components/{jquery-icheck,jquery-icheck/**}',
            '!bower_components/{kendo-ui,kendo-ui/**}',
            '!bower_components/{marked,marked/**}',
            '!bower_components/{modernizr,modernizr/**}',
            '!bower_components/{prism,prism/**}',
            '!bower_components/{selectize,selectize/**}',
            '!bower_components/{switchery,switchery/**}',
            '!bower_components/{velocity,velocity/**}',
            '!bower_components/{waypoints,waypoints/**}'
        ])
        .pipe(gulp.dest(release_dist_dir+'bower_components/'));

    // copy kendo-ui styles/images
    var bower_kendoui_css = gulp.src([
            'bower_components/kendo-ui/styles/kendo.common-material.min.css',
            'bower_components/kendo-ui/styles/kendo.material.min.css'
        ])
        .pipe(gulp.dest(release_dist_dir+'bower_components/kendo-ui/styles/'));
    var bower_kendoui_img = gulp.src([
            'bower_components/kendo-ui/styles/Material/**'
        ])
        .pipe(gulp.dest(release_dist_dir+'bower_components/kendo-ui/styles/Material/'));

    // copy assets
    var assets_files = gulp.src([
            'assets/**',
            '!assets/{less,less/**}'
        ])
        .pipe(gulp.dest(release_dist_dir+'assets/'));

    // copy data
    var json_files = gulp.src(['data/**/*.json','data/**/*.php'])
         .pipe(gulp.dest(release_dist_dir+'data/'));

    // copy codemirror files
    var codemirror_files = gulp.src('data/codemirror/*')
        .pipe(gulp.dest(release_dist_dir+'data/codemirror/'));

    return plugins.mergeStream(root_files,bower_files,bower_kendoui_css,bower_kendoui_img,assets_files,json_files,codemirror_files);

});

// copy files from /angular
gulp.task('release_angular_copy',function() {

    var angular_directory = '../angular/';

    var app_files = gulp.src([angular_directory+'app/**'])
        .pipe(gulp.dest(release_angular_dir+'app/'));

    // copy files
    var root_files = gulp.src([
            angular_directory+'bower.json',
            angular_directory+'favicon.ico',
            angular_directory+'gulpfile.js',
            angular_directory+'index.html',
            angular_directory+'package.json'

        ])
        .pipe(gulp.dest(release_angular_dir));

    // copy bower_components
    var bower_files = gulp.src([
            angular_directory+'bower_components/**',
            angular_directory+'!bower_components/{fastclick,fastclick/**}',
            angular_directory+'!bower_components/{hammerjs,hammerjs/**}',
            angular_directory+'!bower_components/{jquery,jquery/**}',
            angular_directory+'!bower_components/{jquery.dotdotdot,jquery.dotdotdot/**}',
            angular_directory+'!bower_components/{jquery.scrollbar,jquery.scrollbar/**}',
            angular_directory+'!bower_components/{jquery-bez,jquery-bez/**}',
            angular_directory+'!bower_components/{modernizr,modernizr/**}',
            angular_directory+'!bower_components/{velocity,velocity/**}',
            angular_directory+'!bower_components/{waypoints,waypoints/**}'
        ])
        .pipe(gulp.dest(release_angular_dir+'bower_components/'));

    // copy assets
    var assets_files = gulp.src([angular_directory+'assets/**'])
        .pipe(gulp.dest(release_angular_dir+'assets/'));

    // copy data
    var data_files = gulp.src([angular_directory+'data/**'])
        .pipe(gulp.dest(release_angular_dir+'data/'));

    return plugins.mergeStream(app_files,root_files,bower_files,assets_files,data_files);

});

// generate demo html
gulp.task('release_html_demo',function() {
    return gulp.src(release_dist_dir+'/**')
        .pipe(gulp.dest(release_dir+'_demo_site/html/'));
});

// generate demo angularjs
gulp.task('release_app_demo',function() {
    return gulp.src(release_angular_dir+'/**')
        .pipe(gulp.dest(release_dir+'_demo_site/app/'));
});

// generate all pages from php to html (/dist)
/*gulp.task('release_dist_generate_pages', function(){
    var os  = require('os-utils');
    var browser = os.platform() === 'linux' ? 'firefox' : (
        os.platform() === 'darwin' ? 'google chrome' : (
            os.platform() === 'win32' ? 'chrome' : 'firefox'));
    var options = {
        uri: 'http://10.0.0.188/tf/altair/admin/src/helpers/generate_pages/',
        app: browser
    };
    return gulp.src(__filename)
        .pipe(
            plugins.open(options)
        );
});*/

gulp.task('release_dist_generate_pages', plugins.shell.task([
    'php helpers/generate_pages/index.php'
]));

// copy documentation
gulp.task('release_doc_copy', function() {
    var release_doc = gulp.src([
            '../../documentation/**/*',
            '!../../documentation/node_modules/',
            '!../../documentation/node_modules/**',
            '!../../documentation/bower_components/**',
            '!../../documentation/package.json',
            '!../../documentation/bower.json',
            '!../../documentation/gulpfile.js'
        ])
        .pipe(gulp.dest(release_doc_dir));

    var release_doc_uikit = gulp.src('../../documentation/bower_components/uikit/**')
        .pipe(gulp.dest(release_doc_dir+'bower_components/uikit/'));

    return plugins.mergeStream(release_doc,release_doc_uikit);
});

// copy admin /src
gulp.task('release_src_copy', function() {
    // admin /src
    gulp.src([
        '../src/**',
        '!../src/.gitignore',
        '!../src/.idea/',
        '!../src/.idea/**',
        '!../src/bower_components/',
        '!../src/bower_components/**',
        '!../src/node_modules/',
        '!../src/node_modules/**'
    ],{ dot: true })
        .pipe(gulp.dest(release_src_dir));
});

// copy admin /src
gulp.task('release_cleanup', function() {
    // remove redundant plugins/files from /dist
    return plugins.del(
        [
            release_dist_dir+'bower.json',
            release_demo_dir+'bower.json'
        ],
        { force: true },
        function (err, paths) {}
    );
});

// replace images (distribution)
gulp.task('release_replace_images', function() {
    var replace_dist_img =  gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_dist_dir+'assets/img/'));

    var replace_src_img =  gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_src_dir+'assets/img/'));

    var replace_angular_img =  gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_angular_dir+'assets/img/'));

    return plugins.mergeStream(replace_dist_img,replace_src_img,replace_angular_img);

});

// add info banner to files
var project_name = pjson.name;
gulp.task('release_header_js', function(callback) {
    return gulp.src([
        release_src_dir+'assets/js/pages/*.js',
        '!'+release_src_dir+'assets/js/pages/*.min.js'
    ])
        .pipe(plugins.wrapper({
            header: function(file) {
                var file_name_js = file.path.replace(file.base, '');

                if(file_name_js == 'dashbord.js') {
                    var file_name_html = 'index.html';
                } else if(file_name_js == 'kendoui.js')  {
                    var file_name_html = 'kendoui_*.html';
                } else {
                    var file_name_html = file_name_js.replace('.js','.html');
                }

                return '/*\n' +
                    '*  ' + project_name.replace("_", " ") + '\n' +
                    '*  @version v' + pjson.version + '\n' +
                    '*  @author ' + pjson.author + '\n' +
                    '*  @license ' + pjson.license + '\n' +
                    '*  ' + file_name_js +
                    ' - ' +  file_name_html + '\n' +
                    '*/\n' +
                    '\n'
            }
        }))
        .pipe(gulp.dest(release_src_dir+'assets/js/pages/'));
});

gulp.task('release',function(callback){
    plugins.runSequence(
        ['default','release_clean'],
        ['release_dist_copy','release_angular_copy','release_src_copy','release_doc_copy'],
        ['release_html_demo','release_app_demo'],
        ['release_replace_images','release_cleanup','release_header_js'],
        'release_dist_generate_pages',
        callback
    );
});

// 9. -------------------- HELPERS --------------------------

// concatenate codemirror themes
gulp.task('codemirror_themes', function() {
    return gulp.src('bower_components/codemirror/theme/*.css')
        .pipe(plugins.concat('codemirror_themes.css'))
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('codemirror_themes.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// generate jtable skin
gulp.task('jtable_skin', function() {
    return gulp.src('assets/skins/jtable/jtable.less')
        .pipe(plugins.less())
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/skins/jtable/'))
        .pipe(bs_html.stream())
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('jtable.min.css'))
        .pipe(gulp.dest('assets/skins/jtable/'));
});

// generate my theme
gulp.task('less_my_theme', function() {
    return gulp.src('assets/less/themes/my_theme.less')
        .pipe(plugins.less())
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css/'))
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('my_theme.min.css'))
        .pipe(gulp.dest('assets/css/'));
});