var gulp = require('gulp');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


// 拷贝任何需要的文件
gulp.task("copyfiles", function() {
    gulp.src("vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css")
        .pipe(gulp.dest("public/assets/backend/css"));
    gulp.src("vendor/almasaeed2010/adminlte/dist/css/skins/skin-blue.min.css")
        .pipe(gulp.dest("public/assets/backend/css"));
    gulp.src("vendor/almasaeed2010/adminlte/bootstrap/css/bootstrap.min.css")
        .pipe(gulp.dest("public/assets/backend/css"));
    gulp.src("vendor/almasaeed2010/adminlte/plugins/jQuery/jquery-2.2.3.min.js")
        .pipe(gulp.dest("public/assets/backend/js"));
    gulp.src("vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js")
        .pipe(gulp.dest("public/assets/backend/js"));
    gulp.src("vendor/almasaeed2010/adminlte/dist/js/app.min.js")
        .pipe(gulp.dest("public/assets/backend/js"));
    gulp.src("vendor/almasaeed2010/adminlte/bootstrap/fonts/**")
        .pipe(gulp.dest("public/assets/backend/fonts"));
    gulp.src("vendor/almasaeed2010/adminlte/dist/img/**")
        .pipe(gulp.dest("public/assets/backend/img"));
});

elixir(function(mix) {
    mix.sass('app.scss');
});
