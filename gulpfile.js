const { series, watch, parallel } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const csso = require('gulp-csso');

function Sass(){
    return gulp.src('./public/style/scss/**/*.scss')
        .pipe(sass())
        .pipe(csso())
        .pipe(gulp.dest('./public/style/css'))
}

function WatchTask(){
    watch('./public/style/scss/**/*.scss',
    series(Sass))
}

exports.default = series(
    parallel(Sass),
    WatchTask
)