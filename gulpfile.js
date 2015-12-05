var gulp = require('gulp');
/**
 * 样式与脚本处理插件
 */
var elixir = require('laravel-elixir');
/**
 * 图片压缩插件
 */
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
/**
 * 经过测试,发现elixir可以通过glob对资源文件进行定位
 * 可以我却不能通过正则捕获,是资源区与发布区文件夹子目录也对应起来
 * 全局共享资源
 */


elixir(function(mix) {
    //common
    mix.less('app.less','public/css/app.min.css');
    mix.scripts('app.js','public/js/app.min.js');
});

gulp.task('img',function(){
    return gulp.src('resources/assets/img/**').pipe(imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
    })).pipe(gulp.dest('public/img'));
});







