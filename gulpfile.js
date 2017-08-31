// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var jscs = require('gulp-jscs');
var browserSync = require('browser-sync');


// Lint Task
gulp.task('lint', function () {
    return gulp.src('JS/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function () {
    return gulp.src('Dev/Sources/Scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('Prod/CSS'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

// Concatenate & Minify JS
gulp.task('scripts', function () {
    return gulp.src('JS/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('comp/js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('comp/js'));
});

// Watch Files For Changes
gulp.task('watch', ['browserSync', 'sass'], function () {
    gulp.watch('JS/*.js', ['lint', 'scripts']);
    gulp.watch('Dev/Sources/Scss/**/*.scss', ['sass']);
    gulp.watch('Dev/*.html', browserSync.reload);
    gulp.watch('Dev/Sources/JS/**/*.js', browserSync.reload);
});

// refresh navigateur
gulp.task('browserSync', function () {
    browserSync({
        server: {
            baseDir: 'Dev'
        },
    })
})

// Default Task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);