import gulp from 'gulp';
import browserify from 'browserify';
import source from 'vinyl-source-stream';
import browserSync from 'browser-sync';
import watchify from 'watchify';
import babelify from 'babelify';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';


watchify.args.debug = true;

const sync = browserSync.create();

// Input file.
watchify.args.debug = true;
var bundler = browserify('src/containers/app.js', watchify.args);

// Babel transform
bundler.transform(babelify.configure({
  sourceMapRelative: 'src'
}));

gulp.task('default', ['styles']);

gulp.task('styles', function () {
  gulp.src(['./wp-content/themes/astrid_childtheme/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 5 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./wp-content/themes/astrid_childtheme'))
});

gulp.task('watch', [], () => {
  gulp.watch('./wp-content/themes/astrid_childtheme/*.scss', ['styles']);
});
