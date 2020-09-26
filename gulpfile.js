var gulp = require('gulp');
var sass = require('gulp-sass');
var wait     = require('gulp-wait');
var sassGlob = require('gulp-sass-glob');
var uglify   = require('gulp-uglify');
var concat   = require('gulp-concat');


var paths = {
  scripts      : ['js/owl.carousel.min.js','js/main.js'],
  styles       : ['scss/**/*.scss', 'scss/style.scss'],
};

gulp.task('styles', function() {
  return gulp.src(paths.styles)
      .pipe(wait(200))
      .pipe(sassGlob())
      .pipe(sass({outputStyle: 'compressed'}))
      .on('error', sass.logError )
      .pipe(gulp.dest('css'));
});


gulp.task( 'scripts', function() {
  return gulp.src(paths.scripts)
      .pipe(uglify())
      .pipe(concat('main.min.js'))
      .pipe(gulp.dest('js'));
      
});


gulp.task('watch', function(){
   gulp.watch('scss/**/*.scss', gulp.series('styles'));
  gulp.watch( paths.scripts, gulp.series('scripts'));
});