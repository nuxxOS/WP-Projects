var gulp = require('gulp');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglifyjs');
//var sass = require('gulp-sass');
var compass = require('gulp-compass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');


gulp.task('imagemin', function () {
   return gulp.src('./img/*')
       .pipe(imagemin({
           progressive: true,
           svgoPlugins: [{removeViewBox: false}],
           use: [pngquant()]
       }))
       .pipe(gulp.dest('./images'));
});


gulp.task('compass', function() {
  gulp.src('./sass/*.scss')
    .pipe(compass({
      config_file: './config.rb',
      css: 'stylesheets',
      sass: 'sass'
    }))
    .pipe(gulp.dest('./'));
});


gulp.task('uglify', function() {
 gulp.src('lib/*.js')
   .pipe(uglify('olympos.min.js'))
   .pipe(gulp.dest('js'))
});

gulp.task('watch', function(){
   livereload.listen();
   gulp.watch('./sass/**/*.scss', ['compass']);
   gulp.watch('lib/*.js', ['uglify']);
   gulp.watch(['style.css', '*.php', './js/*.js', './parts/**/*.php'], function (files){
       livereload.changed(files)
   });
});