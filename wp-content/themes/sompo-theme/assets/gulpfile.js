//npm install --save-dev gulp gulp-sass-glob gulp-autoprefixer gulp-sass gulp-plumber gulp-uglify gulp-concat gulp-rename

//Gulp

const gulp = require('gulp');

//Sass

const sassGlob = require('gulp-sass-glob')
const autoprefixer = require('gulp-autoprefixer');

const sass = require('gulp-sass')(require('sass'));

//JavaScript

const plumber  = require('gulp-plumber');

const uglify   = require('gulp-uglify');

const concat   = require('gulp-concat');

const rename   = require('gulp-rename');

//Sources

// Source Path

const js_src   = "./js/scripts/*.js";

const sass_src   = './stylesheets/**/*.scss';

const editor_src   = './stylesheets/editor/**/*.scss';



gulp.task('scripts', function() {

	return gulp.src(js_src)

        .pipe(plumber())

	    .pipe(uglify())

		.pipe(concat('scripts.js'))

		.pipe(rename({suffix: '.min'}))

		.pipe(gulp.dest('js/'));

});

gulp.task('css-application',function(){

	return gulp.src('./stylesheets/application.scss')
	.pipe(sassGlob())
	.pipe(sass({outputStyle: 'compressed'}))
	.pipe(autoprefixer())
	.pipe(gulp.dest('css/'));

});

gulp.task('css-editor',function(){

	return gulp.src('./stylesheets/editor-style.scss').pipe(sassGlob()).pipe(sass({outputStyle: 'compressed'})).pipe(gulp.dest('css/'));

});

gulp.task('observer', function() {

	//gulp.watch([js_src,sass_src],['teste']);

	gulp.watch([sass_src],gulp.series(['css-application'])); 

	gulp.watch([editor_src],gulp.series(['css-editor'])); 

	gulp.watch([js_src],gulp.series(['scripts'])); 

});













































