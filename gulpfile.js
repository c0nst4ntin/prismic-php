/**
 * ----------------------------------------------------------------------
 *  Set Project Paths
 * ----------------------------------------------------------------------
 */

const srcPath                       = './resources/'
const distPath                      = './public/'


/**
 * ----------------------------------------------------------------------
 *  Require and Initialize all Modules
 * ----------------------------------------------------------------------
 */

let { src, dest, watch, series }    = require('gulp')
let rename                          = require('gulp-rename')
let sass                            = require('gulp-sass')
let uglify                          = require('gulp-uglify')


/**
 * ----------------------------------------------------------------------
 *  Tasks
 * ----------------------------------------------------------------------
 */

function buildScss() {
    return src(srcPath + 'scss/**/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest(distPath + 'css/'))
}

function buildJS() {
    return src(srcPath + 'js/**/*.js')
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest(distPath + 'js/'))
}

function buildViews() {
    return src(srcPath + 'views/**/*.php')
        .pipe(dest(distPath))
}

/**
 * ----------------------------------------------------------------------
 *  Define exports/tasks
 * ----------------------------------------------------------------------
 */

exports.default = () => {
    watch(srcPath + 'js/**/*.js', buildJS)
    watch(srcPath + 'scss/**/*.scss', buildScss)
    watch(srcPath + 'views/**/*.php', buildViews)
}

exports.build = series([
    buildJS,
    buildScss,
    buildViews
])
