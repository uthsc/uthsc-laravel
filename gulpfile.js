var gulp = require('gulp');
var $ = require('gulp-load-plugins')();

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
 |--------------------------------------------------------------------------
 | Copy
 |--------------------------------------------------------------------------
 */

//Copy fonts
gulp.task('copy-fonts', function() {
	gulp.src('vendor/bower_components/font-awesome/fonts/**/*.{ttf,woff,woff2,eof,svg}')
		.pipe(gulp.dest('public/assets/fonts'));
	gulp.src('vendor/bower_components/font-awesome/css/**/*.{css,css.map}')
		.pipe(gulp.dest('public/assets/css'));
});

//Copy images
gulp.task('copy-images', function() {
	gulp.src('resources/assets/images/*')
		.pipe(gulp.dest('public/assets/images'));
});

//Copy vendor js
gulp.task('copy-vendor-js', function() {
	gulp.src('vendor/bower_components/jquery/dist/*')
		.pipe(gulp.dest('public/assets/js'));

	gulp.src('vendor/bower_components/foundation-sites/dist/*.js')
		.pipe(gulp.dest('public/assets/js'));
});

/*
 |--------------------------------------------------------------------------
 | Sass
 |--------------------------------------------------------------------------
 */

var sassPaths = [
	'vendor/bower_components/uthsc/scss',
	'vendor/bower_components/foundation-sites/scss',
	'vendor/bower_components/motion-ui/src'
];

//Output unminified css and map
gulp.task('sass', function () {
	gulp.src('resources/assets/sass/app.scss')
		.pipe($.rename('uthsc.scss'))
		.pipe($.sourcemaps.init())
		.pipe($.sass({
			//outputStyle: 'compressed',
			includePaths: sassPaths
		})
		.on('error', $.sass.logError))
		.pipe($.autoprefixer({
			browsers: ['last 2 versions', 'ie >= 9']
		}))
		.pipe($.sourcemaps.write('../css'))
		.pipe(gulp.dest('public/assets/css'));
});

//Output minified sylesheet
gulp.task('sass-dist', function () {
	gulp.src('resources/assets/sass/app.scss')
		.pipe($.sass({
			outputStyle: 'compressed',
			includePaths: sassPaths
		}))
		.on('error', $.sass.logError)
		.pipe($.rename('uthsc.min.css'))
		.pipe(gulp.dest('public/assets/css'));
});

/*
 |--------------------------------------------------------------------------
 | Js
 |--------------------------------------------------------------------------
 */

gulp.task('build-js', function() {
	gulp.src ([
		//'vendor/bower_components/foundation-sites/dist/foundation.js',
		'resources/assets/js/app.js',
		'resources/assets/js/partials/**/*.js'
	])
	.pipe($.concat('uthsc.js'))
	.pipe(gulp.dest('public/assets/js'))
	.pipe($.uglify())
	.pipe($.rename('uthsc.min.js'))
	.pipe(gulp.dest('public/assets/js'));
});

gulp.task('build', ['sass-dist']);

gulp.task('default', ['sass'], function () {
	gulp.watch(['resources/assets/sass/**/*.scss'], ['sass']);
});