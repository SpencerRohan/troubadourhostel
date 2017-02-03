var gulp      = require('gulp'),
  bower       = require('gulp-bower'),
  concat      = require('gulp-concat'),
  gutil       = require('gulp-util'),
  // less        = require('gulp-less'),
  sass        = require('gulp-sass'),
  maps        = require('gulp-sourcemaps'),
  minifyCSS   = require('gulp-cssnano'),
  prefixer    = require('gulp-autoprefixer'),
  uglify      = require('gulp-uglify'),

  src = { 
    // less: {
    //   base: 'src/less',
    //   app: 'src/less/app.less',
    // },
    sass: {
      base: 'src/sass',
      app: 'src/sass/app.scss',
    },
    js: {
      base: 'src/js',
      dist: 'src/js'
    },
    vendor: {
    	base: 'src/vendor',
   		// materialize: 'src/vendor/Materialize',
      bootstrap: 'src/vendor/bootstrap',
      tether: 'src/vendor/tether',
   		jquery: 'src/vendor/jquery'
   	}
  },
  dest = { 
    css: 'assets/css',
    js: 'assets/js'
  };

/**
 * tasks
 */
gulp.task('bower', function() {
  return bower();
});

// gulp.task('less', function () {
//   compileLess(src.less.app, dest.css);
// });

gulp.task('sass', function () {
  compileSass(src.sass.app, dest.css);
});

gulp.task('js', function() {
  compileJS(
    'app.js', 
    [
  		src.vendor.jquery+'/dist/jquery.js',
      src.vendor.tether+'/dist/js/tether.min.js',
      // src.vendor.materialize+'/dist/js/materialize.js',
      src.vendor.bootstrap+'/dist/js/bootstrap.min.js',
      src.js.base+'/parallax.js',
      src.js.base+'/app.js',
    ], 
    dest.js
  );

  // compileJS(
  //   'admin.js', 
  //   [
  //     src.js.base+'admin.js',
  //   ], 
  //   dest.js
  // );
});

gulp.task('watch', function() {
  // gulp.watch(src.less.base + '/**/*.less', ['less']);
  gulp.watch(src.sass.base + '/**/*.scss', ['sass']);
  gulp.watch(src.js.base + '/**/*.js', ['js']);
});

gulp.task('default', ['sass', 'js']);

/**
 * compile less files
 * @param  {string} source
 * @param  {string} destination
 */
// var compileLess = function(source, destination) {
//   gutil.log('Compiling LESS: ' + source + ' ==> ' + destination);

//   gulp.src(source)
//     .pipe(maps.init({loadMaps: true}))
//     .pipe(
//       less().on('error', function(err) {
//         gutil.log(err);
//         this.emit('end');
//       })
//     )
//     .pipe(prefixer({browsers: ['last 2 versions'], cascade: false}))
//     .pipe(minifyCSS())
//     .pipe(maps.write())
//     .pipe(gulp.dest(destination));
// }

var compileSass = function(source, destination) {
  gutil.log('Compiling SASS: ' + source + ' ==> ' + destination);

  gulp.src(source)
    .pipe(maps.init({loadMaps: true}))
    .pipe(
      sass().on('error', function(err) {
        gutil.log(err);
        this.emit('end');
      })
    )
    .pipe(prefixer())
    .pipe(minifyCSS())
    .pipe(maps.write())
    .pipe(gulp.dest(destination));
};

/**
 * compile JavaScript files
 * @param {string} filename
 * @param {array} source
 * @param {string} destination
 */
var compileJS = function(filename, source, destination) {
  source.forEach(function(item) {
    gutil.log('Compiling JS: ' + item + ' ==> ' + destination + '/' + filename);
  });

  gulp.src(source)
    .pipe(maps.init({loadMaps: true}))
    .pipe(concat(filename))
    .pipe(uglify().on('error', function(err) {
      gutil.log(err);
      this.emit('end');
    }))
    .pipe(maps.write())
    .pipe(gulp.dest(destination));
};