var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var jade        = require('jade');
var gulpjade    = require('gulp-jade');
var prefix      = require('gulp-autoprefixer');
var sass        = require ('gulp-sass');

jade.filters.code = function( block ) {
    return block
        .replace( /&/g, '&amp;'  )
        .replace( /</g, '&lt;'   )
        .replace( />/g, '&gt;'   )
        .replace( /"/g, '&quot;' )
        .replace( /#/g, '&#35;'  )
        .replace( /\\/g, '\\\\'  );
};


// Static Server + watching sass/html files
gulp.task('watch', ['css', 'templates'], function() {
    browserSync.init({
        server: "."
    });
    gulp.watch("./assets/sass/**/*.scss", ['css']);
    gulp.watch("./assets/jade/**/*.jade", ['templates']);
});

gulp.task('css', function() {
    gulp.src('./assets/sass/**/*.scss')
        .pipe(sass())
        .on('error', swallowError)
        .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
});

gulp.task('templates', function() {
    gulp.src(['./assets/jade/**/*.jade', '!./assets/jade/layout/**/*.jade', '!./assets/jade/vendors/**/*.jade'])
        .pipe(gulpjade({
            jade: jade,
            pretty: true
        }))
        .on('error', swallowError)
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

//If error
function swallowError (error) {
    console.log('▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄ERROR▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄')
    console.log(error.toString());
    console.log('▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀')
    this.emit('end');
}

gulp.task('default', ['watch']);