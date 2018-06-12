const gulp = require('gulp');
const sass = require('gulp-ruby-sass');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');

const paths = {
    styles: {
        src: 'frontend/web/sass/',
        dest: 'frontend/web/css2/'
    },
    scripts: {
        src: 'frontend/web/js/',
        dest: 'frontend/web/js/'
    }
};

let NODE_ENV = 'development';

/**
 *  Compile styles
 */
function styles() {

    if (NODE_ENV === 'development') {
        return sass(paths.styles.src + 'main.sass', {style: 'expanded'})
            .on('error', (err) => {
                console.error('Error', err.message);
            })
            .pipe(gulp.dest(paths.styles.dest))
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(cleanCSS())
            .pipe(gulp.dest(paths.styles.dest))
    }

    return sass(paths.styles.src + 'main.sass', {style: 'compressed'})
        .on('error', (err) => {
            console.error('Error', err.message);
        })
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.styles.dest))

}

/**
 *  Minify and concat all JS files
 */
function scripts() {
    return gulp.src([paths.scripts.src + 'main.js', `!${paths.scripts.src}*.min.js`, `!${paths.scripts.src}admin.js`])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.scripts.dest))
}

/**
 *  Watch changes
 */
function watch() {
    gulp.watch(paths.styles.src + '**/*.sass', styles);
    gulp.watch([paths.scripts.src + 'main.js', `!${paths.scripts.src}*.min.js`, `!${paths.scripts.src}admin.js`], gulp.series(scripts));
}

let build = gulp.series(gulp.parallel(styles, scripts));

/*
 * Define build task to build our scripts and styles for Production
 */
gulp.task('build', build);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', gulp.series(build, watch));
