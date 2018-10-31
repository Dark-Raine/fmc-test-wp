const gulp = require('gulp');
const sass = require('gulp-sass');
const watch = require('gulp-watch');
const autoprefixer = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const browserSync = require('browser-sync');

gulp.task('browser-sync', ['styles'], () => {
  browserSync.init({
    proxy: 'http://www.digitaldentistryshow.loc/',
  });

  gulp.watch('scss/**/*.scss', ['styles']);
  gulp.watch('**.php').on('change', browserSync.reload);
});

gulp.task('styles', () =>
  gulp.src('scss/style.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(cssnano())
  .pipe(autoprefixer({
      browsers: [
        'last 4 versions'
      ]
  }))
  .pipe(gulp.dest('./css/'))
  .pipe(browserSync.stream())
);

gulp.task('default',function() {
    gulp.watch('scss/**/*.scss',['styles']);
});
