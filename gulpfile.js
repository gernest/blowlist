/**
 * Created by gernest on 4/11/15.
 */
var gulp=require('gulp'),
    sass=require('gulp-ruby-sass'),
    clean=require('del'),
    watch=require('gulp-watch');

gulp.task('sass', function(){
    return sass('src/sass/blowlist.scss',{style:'expanded'})
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function(){
    return watch('src/sass/*.scss', function(){
        gulp.start('sass');
    });
});

gulp.task('clean',function(cb){
    clean(['./dist/**/*'],cb);
});

var baseProject=[
    './application/**/*',
    './system/**/*',
    './public/**/*',
    './index.php',
];
gulp.task('move',['clean'], function(){
    gulp.src(baseProject,{base:'./'})
        .pipe(gulp.dest('dist'));
});

gulp.task('dist',['move']);


