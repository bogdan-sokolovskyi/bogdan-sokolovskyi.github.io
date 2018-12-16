let syntax        = 'scss';

let gulp          = require('gulp'),
		sass          = require('gulp-sass'),
		browserSync   = require('browser-sync'),
		htmlminify    = require('gulp-html-minify'),
		concat        = require('gulp-concat'),
		babel         = require('gulp-babel'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		del         	= require('del'),
		notify        = require("gulp-notify");

gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: 'app'
		},
		notify: false
	})
});

gulp.task('styles', function() {
	return gulp.src('app/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.stream())
});

gulp.task('js', function() {
	return gulp.src([
        'app/libs/jquery-3.3.1.min.js',
		'app/js/main.js',
		'app/js/spread.js',
		])
	.pipe(concat('scripts.min.js'))
	.pipe(babel({
		presets: ['env']
	}))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('app/js'))
	.pipe(browserSync.reload({ stream: true }))
});

gulp.task('clean', function() {
	return del.sync('build');
});

gulp.task('build', ['clean', 'styles', 'js'], function() {

	let buildCss = gulp.src([
		'app/fonts/Font-awesome/css/font-awesome.min.css',
		'app/css/bootstrap.min.css',
		'app/css/jquery.mCustomScrollbar.css',
		'app/css/intlTelInput.min.css',
		'app/css/aos.css',
		'app/css/main.min.css'
	])
		.pipe(gulp.dest('build/css'))

	let buildFonts = gulp.src('app/fonts/**/*')
		.pipe(gulp.dest('build/fonts'))

	let buildImg = gulp.src('app/img/**/*')
		.pipe(gulp.dest('build/img'))

    let buildJsLib = gulp.src('app/libs/**/*')
        .pipe(gulp.dest('build/libs'))

	let buildJs = gulp.src('app/js/**/*')
		.pipe(gulp.dest('build/js'))

	let buildHtml = gulp.src('app/*.html')
		/*.pipe(htmlminify())*/
		.pipe(gulp.dest('build'));

});


gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('app/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'app/js/main.js'], ['js']);
	gulp.watch('app/*.html', browserSync.reload)
});

gulp.task('default', ['watch', 'build']);
