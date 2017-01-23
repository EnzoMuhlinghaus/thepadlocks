var gulp = require('gulp'),
    cleanCSS = require('gulp-clean-css'),
    less = require('gulp-less'),
    uglify = require('gulp-uglify'),
    filter = require('gulp-filter'),
    useref = require('gulp-useref'),
    imagemin = require('gulp-imagemin'),
    clean = require('gulp-clean'),
    zip = require('gulp-zip'),
    plumber = require('gulp-plumber'),
    livereload  = require('gulp-livereload');

var jsFilter = filter('**/*.js');
var cssFilter = filter('**/*.css');


// Compile LESS files from /less into /css
gulp.task('less', function() {
    // return gulp.src('less/agency.less')
    //     .pipe(less())
    //     .pipe(header(banner, { pkg: pkg }))
    //     .pipe(gulp.dest('css'))
    //     .pipe(browserSync.reload({
    //         stream: true
    //     }))
});

// Minify compiled CSS
gulp.task('minify-css', ['less'], function() {
    // return gulp.src('css/agency.css')
    //     .pipe(cleanCSS({ compatibility: 'ie8' }))
    //     .pipe(rename({ suffix: '.min' }))
    //     .pipe(gulp.dest('css'))
    //     .pipe(browserSync.reload({
    //         stream: true
    //     }))
});

// Clean dist folder
gulp.task('clean', function () {
    return gulp.src('dist', {read:false})
        .pipe(clean())
});

// Minify JS
gulp.task('minify-js', function() {
    // return gulp.src('js/agency.js')
    //     .pipe(uglify())
    //     .pipe(header(banner, { pkg: pkg }))
    //     .pipe(rename({ suffix: '.min' }))
    //     .pipe(gulp.dest('js'))
    //     .pipe(browserSync.reload({
    //         stream: true
    //     }))
});

// Run everything
gulp.task('default', ['less', 'minify-css', 'minify-js', 'clean'], function () {
    gulp.src('img/*.*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'));
    return gulp.src('*.html')
        .pipe(useref.assets())
        .pipe(jsFilter)
        .pipe(uglify())
        .pipe(jsFilter.restore())
        .pipe(cssFilter)
        .pipe(cleanCSS())
        .pipe(cssFilter.restore())
        .pipe(useref.restore())
        .pipe(useref())
        .pipe(gulp.dest('dist'))
});

// Check events
gulp.task('watch', function () {
    var server = livereload();
    gulp.watch(['*.html', 'js/*.js', 'css/*.css']).on('change', function (event) {
        console.log(event);
        livereload.changed(event.path);
    });
    // detecter les changements
});