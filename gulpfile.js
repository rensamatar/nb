var elixir = require('laravel-elixir');
require('laravel-elixir-sass-compass');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

 var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/',
    'awesome': './vendor/bower_components/fontawesome/',
    'animate': './vendor/bower_components/animate-css/',
    'onepage': './vendor/bower_components/onepage-scroll/',
    'adminLTE': './vendor/bower_components/admin-lte/'
}

var destination = {
    'base': 'resources/assets/',
    'script': 'resources/assets/js/vendor/',
    'style': 'resources/assets/sass/'
}

elixir.extend('sourcemaps', false);

elixir(function(mix) {
    mix.copy(paths.jquery + '/dist/jquery.js', destination.script + 'jquery.js')
    .copy(destination.script + 'jquery.js', 'public/js/vendor/jquery.js')
    .copy(paths.bootstrap + 'stylesheets', destination.style + 'bootstrap')
    .copy(paths.bootstrap + 'javascripts/bootstrap.min.js', destination.script + 'bootstrap.js')
    .copy(destination.script + 'bootstrap.js', 'public/js/vendor/bootstrap.js')
    .copy(destination.script + 'modernizr.js', 'public/js/vendor/modernizr.js')
    .copy(paths.bootstrap + 'fonts', 'public/fonts')
    .copy(paths.awesome + 'scss', destination.style + 'fontawesome')
    .copy(paths.awesome + 'fonts', 'public/fonts')
    .copy(paths.animate + 'animate.css', 'public/css/vendor/animate.css')
    .copy(paths.onepage + 'jquery.onepage-scroll.min.js', destination.script + 'onepage-scroll.js')
    .copy(destination.script + 'onepage-scroll.js', 'public/js/vendor/onepage-scroll.js');

    mix.scripts(['js/main.js'], 'public/js/main.js', 'resources/assets');

    mix.compass('styles.scss', 'public/css',{
        style: 'compressed',
        sass: 'resources/assets/sass',
        sourcemap: false,
        comments: true
    });

    mix.version(['css/styles.css', 'js/main.js']);

});

// Admin
elixir(function(mix) {
    mix.copy(paths.adminLTE + '/build/less', destination.base + 'less/admin-lte')
    .copy(paths.adminLTE + '/build/bootstrap-less', destination.base + 'less/bootstrap-less')
    .copy(paths.adminLTE + 'plugins/iCheck/square/blue.css', 'public/plugins/iCheck/icheck.css')
    .copy(paths.adminLTE + 'plugins/iCheck/square/blue.png', 'public/plugins/iCheck/blue.png')
    .copy(paths.adminLTE + 'plugins/iCheck/square/blue@2x.png', 'public/plugins/iCheck/blue@2x.png1')
    .copy(paths.adminLTE + 'plugins/iCheck/icheck.min.js', 'public/plugins/iCheck/icheck.js')
    .copy(paths.adminLTE + 'dist/js/app.min.js', 'public/js/vendor/admin.js')
    .copy(paths.adminLTE + 'dist/img', 'public/img/admin');

    mix.less(['admin-lte/AdminLTE.less', 'admin-lte/skins/_all-skins.less'], 'public/css', 'resources/assets');
    mix.sass(['bootstrap.scss'], 'public/css', 'resources/assets');
});

