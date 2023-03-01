const { series, watch, parallel } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const csso = require('gulp-csso');

function Sass(){
    return gulp.src('./view/style/scss/**/*.scss')
        .pipe(sass())
        .pipe(csso())
        .pipe(gulp.dest('./view/style/css'))
}

function WatchTask(){
    watch('./view/style/scss/**/*.scss',
    series(Sass))
}

exports.default = series(
    parallel(Sass),
    WatchTask
)