var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cssnano     = require('gulp-cssnano'),
    rename      = require('gulp-rename'),
    concat      = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify      = require('gulp-uglifyjs'); // Подключаем gulp-uglifyjs (для сжатия JS)
gulp.task('sass-fr', function(){
    return gulp.src('frontend/web/sass/main.sass')
        .pipe(sass())
        .pipe(gulp.dest('frontend/web/css/main2'))
});

gulp.task('sass-bk', function(){
    return gulp.src('backend/web/sass/main.sass')
        .pipe(sass())
        .pipe(gulp.dest('backend/web/css/main2'))
});

gulp.task('mincss-fr', function() {
    return gulp.src('frontend/web/css/main2/main.css')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('frontend/web/css/main2'));
});

gulp.task('mincss-bk', function() {
    return gulp.src('backend/web/css/main2/main.css')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('backend/web/css/main2'));
});
gulp.task('scripts-fr', function() {
    return gulp.src([
        'frontend/web/js/main.js',
        'frontend/web/js/fancy_conf.js',
        'frontend/web/js/admin.js'
        ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('frontend/web/js/'));
});
gulp.task('scripts-bk', function() {
    return gulp.src([

        'backend/web/js/admin.js'
        ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('backend/web/js/'));
});
