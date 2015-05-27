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
    'animate': './vendor/bower_components/animate-css/'
}

var destination = {
    'base': 'resources/assets/',
    'script': 'resources/assets/js/',
    'style': 'resources/assets/sass/'
}

elixir.extend('sourcemaps', false);

elixir(function(mix) {
    mix.copy(paths.jquery + '/dist/jquery.js', destination.script + 'jquery.js')
    .copy(paths.bootstrap + 'stylesheets', destination.style + 'bootstrap')
    .copy(paths.bootstrap + 'javascripts/bootstrap.min.js', destination.script + 'bootstrap.js')
    .copy(paths.bootstrap + 'fonts', 'public/fonts')
    .copy(paths.awesome + 'scss', destination.style + 'fontawesome')
    .copy(paths.awesome + 'fonts', 'public/fonts')
    .copy(destination.script + 'vendor/modernizr.js', 'public/js/vendor/modernizr.js')
    .copy(paths.animate + 'animate.css', 'public/css/vendor/animate.css');

    mix.scripts(
        [
        'js/jquery.js',
        'js/bootstrap.js',
        'js/main.js'
        ], 'public/js/scripts.js', 'resources/assets');

    mix.compass('styles.scss', 'public/css',{
        style: 'compressed',
        sass: 'resources/assets/sass',
        sourcemap: false,
        comments: true
    });

    mix.version(['css/styles.css', 'js/scripts.js']);

});

