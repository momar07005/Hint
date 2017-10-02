var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync').create();

gulp.task('browser-sync', function() {
  connect.server({}, function (){
    browserSync.init({
      proxy: '127.0.0.1:8000'
    });
  });  
});

gulp.task('html.twig', function() {
  gulp.watch('./**/*.html.twig').on('change', function () {
    browserSync.reload();
  }); 
});

gulp.task('css', function() {
  gulp.watch('./**/*.css').on('change', function () {
    browserSync.reload();
  }); 
});

gulp.task('php', function() {
   gulp.watch('./**/*.php').on('change', function () {
    browserSync.reload();
  }); 
});
