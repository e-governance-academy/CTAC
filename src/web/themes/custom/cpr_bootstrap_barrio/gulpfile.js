var gulp          = require('gulp'),
  sass          = require('gulp-sass'),
  autoprefixer  = require('gulp-autoprefixer'),
  plumber       = require('gulp-plumber'),
  concat        = require('gulp-concat'),
  cleanCSS      = require('gulp-clean-css'),
  sourcemaps    = require('gulp-sourcemaps'),
  minify        = require('gulp-minify');

// Compile global .scss to .css
gulp.task('sass', function(){
  return gulp.src('scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(sass({errLogToConsole: true}))
    .on('error', catchErr)
    .pipe(autoprefixer({browsers: ['last 4 versions']}))
    .pipe(cleanCSS()).pipe(concat('style.css'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('css'))
});

// Minify global.js
gulp.task('compile-js', function(){
  return gulp.src('js/global.js')
    .pipe(minify({
      ext:{
        min:'.min.js'
      },
      ignoreFiles: ['.min.js'],
      noSource: true,
    }))
    .pipe(gulp.dest('js'))
});

// Watch for files .scss, .js and call compile functions
gulp.task('watch', function() {
  gulp.watch('scss/**/*.scss', gulp.series('sass'));
  gulp.watch('js/global.js', gulp.series('compile-js'));
});

// Default task for gulp
gulp.task('default', gulp.series([
    'sass',
    'compile-js',
    'watch',
  ], function() {}
));

function catchErr(e) {
  console.log(e);
  this.emit('end');
}
