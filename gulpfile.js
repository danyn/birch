var gulp         = require('gulp'),
    gutil        = require('gulp-util'),
    sass         = require('gulp-sass'),
    gulpif       = require('gulp-if'),
    uglify       = require('gulp-uglify'),
    concat       = require('gulp-concat'),
    postcss      = require('gulp-postcss'),
    sourcemaps   = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer');

var env,
    jsSources,
    sassSources,
    outputDir,
    sassStyle;

env = 'development';

if (env==='development') {
  outputDir = '../birch-compiled-1.0.0/';
  sassStyle = 'expanded';
} else {
  // outputDir = '../birch-production/';
  // sassStyle = 'compressed';
}

//add as many scripts to this array they will be concatenated
// js task must be called when adding new files 
jsSources = [
	'./scripts/polyfills.js',
	'./node_modules/enquire.js/dist/enquire.min.js',
  './scripts/script.js'
	];

//process Sass files from here
sassSources = './sass/**/*.scss';

//process Sass files for the theme extesions like the heading slider and heading image
sassThemeSources = './sass_theme_extensions/**/*.scss';

//copy over all files to be at the root  \ of the theme and deeper using glob *
rootDir = ['./root/**/*'];



gulp.task('sassTheme', function () {
 return gulp.src(sassThemeSources)
  .pipe(sourcemaps.init())
  .pipe(sass({
    outputStyle:sassStyle,
    includePaths:['node_modules/susy/sass']
  }).on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest(outputDir + 'hooked-templates/'));
});




gulp.task('root',function(){
  return gulp.src(rootDir)
  .pipe(gulp.dest(outputDir))
});

gulp.task('js', function() {
 return gulp.src(jsSources)
    .pipe(concat('script.js'))
    .on('error', gutil.log)
    .pipe(gulpif(env === 'production', uglify()))
    .pipe(gulp.dest(outputDir + 'js'));
});




gulp.task('sass', function () {
 return gulp.src(sassSources)
  .pipe(sourcemaps.init())
  .pipe(sass({
    outputStyle:sassStyle,
    includePaths:['node_modules/susy/sass']
  }).on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest(outputDir));
});



gulp.task('watch', function() {
  gulp.watch(jsSources, ['js']);
  gulp.watch(['./sass/*.scss', './sass/*/*.scss'], ['sass']);
  gulp.watch(rootDir, ['root']);
  gulp.watch(sassThemeSources, ['sassTheme']);
});


//run prefix as its own task when ready to go to production or create a production task for this
//it is messing with the source maps a bit.  Could just be a config issue but this will work.
//this task  is not in the defualt task
gulp.task('prefix', function () {
   

    return gulp.src(outputDir + 'style.css')
        .pipe(postcss([ autoprefixer() ]))
        .pipe(gulp.dest(outputDir));
});


gulp.task('default', ['js','root','sass','sassTheme', 'watch']);


