/**
* Configuration.
*
* Project Configuration for gulp tasks.
*
* Edit the variables as per your project requirements.
*/

var project             = 'BHS'; // Name

var styleSRC            = './assets/scss/style.scss'; // Path to main .scss file
var styleDestination    = './assets/css/'; // Path to place the compiled CSS file
// Defualt set to root folder
var styleMapDestination    = './'; // Path to place the compiled CSS file
var venderStyleSRC = ['./node_modules/normalize.css/normalize.css', './node_modules/bootstrap/dist/css/bootstrap.css'];
var venderStyleDestination = './assets/css/';
var jsVendorSRC         = './node_modules/jquery/dist/jquery.js'; // Path to JS vendors folder
var jsVendorDestination = './assets/js/'; // Path to place the compiled JS vendors file
var jsVendorFile        = 'vendors'; // Compiled JS vendors file name
// Default set to vendors i.e. vendors.js


var jsCustomSRC         = './assets/js/custom/*.js'; // Path to JS custom scripts folder
var jsCustomDestination = './assets/js/'; // Path to place the compiled JS custom scripts file
var jsCustomFile        = 'custom'; // Compiled JS custom file name
// Default set to custom i.e. custom.js

var styleWatchFiles     = './assets/scss/**/*.scss'; // Path to all *.scss files inside css folder and inside them
//var vendorJSWatchFiles  = './assets/js/vendors/*.js'; // Path to all vendors JS files
var customJSWatchFiles  = './assets/js/custom/*.js'; // Path to all custom JS files

/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp         = require('gulp'), // Gulp of-course
    browserSync  = require('browser-sync'), // Asynchronous browser loading on .scss file changes

    // CSS related plugins.
    sass         = require('gulp-sass'), // Gulp pluign for Sass compilation
    autoprefixer = require('gulp-autoprefixer'), // Autoprefixing magic
    concatCss    = require('gulp-concat-css'), // concat css
    minifycss    = require('gulp-uglifycss'), // Minifies CSS files

    // JS related plugins.
    concat       = require('gulp-concat'), // Concatenates JS files
    uglify       = require('gulp-uglify'), // Minifies JS files

    // Utility related plugins.
    rename       = require('gulp-rename'), // Renames files E.g. style.css -> style.min.css
    sourcemaps   = require('gulp-sourcemaps'), // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css)
    notify       = require('gulp-notify'); // Sends message notification to you

/**
 * Browser Sync
 *
 * Asynchronous browser syncing of assets across multiple devices!! Watches for changes to js, image and php files
 * Although, I think this is redundant, since we have a watch task that does this already.
*/
gulp.task('browser-sync', function() {
    var files = [
            '**/*.php',
            '**/*.{png,jpg,gif}'
            ];
    browserSync.init(files, {

        // Read here http://www.browsersync.io/docs/options/
        proxy: 'http://localhost/politics',

        // port: 8080,

        // Tunnel the Browsersync server through a random Public URL
        // tunnel: true,

        // Attempt to use the URL "http://my-private-site.localtunnel.me"
        // tunnel: "ppress",

        // Inject CSS changes
        injectChanges: true

    });
});

/**
 * Task: styles
 *
 * Compiles Sass, Autoprefixes it and Minifies CSS.
 *
 * This task does the following:
 *      1. Gets the source scss file
 *      2. Compiles Sass to CSS
 *      3. Writes Sourcemaps for it
 *      4. Autoprefixes it and generates style.css
 *      5. Renames the CSS file with suffix .min.css
 *      6. Minifies the CSS file and generates style.min.css
 */
gulp.task('styles', function () {
    gulp.src( styleSRC )
        .pipe( sourcemaps.init() )
        .pipe( sass( {
            errLogToConsole: true,
            outputStyle: 'compact',
            //outputStyle: 'compressed',
            // outputStyle: 'nested',
            // outputStyle: 'expanded',
            precision: 10
        } ) )
        .pipe( sourcemaps.write( { includeContent: false } ) )
        .pipe( sourcemaps.init( { loadMaps: true } ) )
        .pipe( autoprefixer(
            'last 2 version',
            '> 1%',
            'safari 5',
            'ie 8',
            'ie 9',
            'opera 12.1',
            'ios 6',
            'android 4' ) )

        .pipe( sourcemaps.write ( styleMapDestination ) )
        .pipe( gulp.dest( styleDestination ) )


        .pipe( rename( { suffix: '.min' } ) )
        .pipe( minifycss( {
            maxLineLen: 10
        }))
        .pipe( gulp.dest( styleDestination ) )
        .pipe( notify( { message: 'TASK: "styles" Completed!', onLast: true } ) )
});

gulp.task('venderCss', function () {
    gulp.src( venderStyleSRC )
        .pipe( sass( {
            errLogToConsole: true,
            outputStyle: 'compact',
            //outputStyle: 'compressed',
            // outputStyle: 'nested',
            // outputStyle: 'expanded',
            precision: 10
        } ) )
        .pipe(concatCss("bundle.css"))

        .pipe( rename( { suffix: '.min' } ) )
        .pipe( minifycss( {
            maxLineLen: 10
        }))
        .pipe( gulp.dest( venderStyleDestination ) )
        .pipe( notify( { message: 'TASK: "vender styles" Completed!', onLast: true } ) )
});

/**
 * Task: vendorJS
 *
 * Concatenate and uglify vendor JS scripts.
 *
 * This task does the following:
 *      1. Gets the source folder for JS vendor files
 *      2. Concatenates all the files and generates vendors.js
 *      3. Renames the JS file with suffix .min.js
 *      4. Uglifes/Minifies the JS file and generates vendors.min.js
 */
gulp.task( 'vendorsJs', function() {
    gulp.src( jsVendorSRC )
        .pipe( concat( jsVendorFile + '.js' ) )
        .pipe( gulp.dest( jsVendorDestination ) )
        .pipe( rename( {
            basename: jsVendorFile,
            suffix: '.min'
        }))
        .pipe( uglify() )
        .pipe( gulp.dest( jsVendorDestination ) )
        .pipe( notify( { message: 'TASK: "vendorsJs" Completed!', onLast: true } ) );
});

/**
 * Task: customJS
 *
 * Concatenate and uglify custom JS scripts.
 *
 * This task does the following:
 *      1. Gets the source folder for JS custom files
 *      2. Concatenates all the files and generates custom.js
 *      3. Renames the JS file with suffix .min.js
 *      4. Uglifes/Minifies the JS file and generates custom.min.js
 */
gulp.task( 'customJS', function() {
    gulp.src( jsCustomSRC )
        .pipe( concat( jsCustomFile + '.js' ) )
        .pipe( gulp.dest( jsCustomDestination ) )
        .pipe( rename( {
            basename: jsCustomFile,
            suffix: '.min'
        }))
        .pipe( uglify() )
        .pipe( gulp.dest( jsCustomDestination ) )
        .pipe( notify( { message: 'TASK: "customJs" Completed!', onLast: true } ) );
});

/**
  * Watch Tasks.
  *
  * Watches for file changes and runs specific tasks.
  */

 gulp.task( 'default', [ 'styles', 'venderCss', 'vendorsJs', 'customJS', 'browser-sync' ], function () {
    gulp.watch( './assets/css/**/*.scss', [ 'styles' ] );
    gulp.watch( './assets/js/vendors/*.js', [ 'vendorsJs' ] );
    gulp.watch( './assets/js/custom/*.js', [ 'customJS', browserSync.reload ] );
 });
