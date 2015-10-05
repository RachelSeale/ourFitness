//Taken from http://andy-carter.com/blog/a-beginners-guide-to-the-task-runner-gulp
// Include gulp
var gulp = require('gulp');
 // Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
 // Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('js/*.js')
      .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('build/js'));
});

var sass = require('gulp-ruby-sass');
 gulp.task('sass', function() {
    return sass('css/index.scss', {style: 'compressed'})
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('build/css'));
});

var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
 gulp.task('images', function() {
  return gulp.src('images/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest('build/img'));
});

gulp.task('watch', function() {
   // Watch .js files
  gulp.watch('js/*.js', ['scripts']);
   // Watch .scss files
  gulp.watch('scss/*.scss', ['sass']);
   // Watch image files
  gulp.watch('images/**/*', ['images']);
 });

// Default Task
gulp.task('default', ['scripts', 'sass', 'images', 'watch']);
