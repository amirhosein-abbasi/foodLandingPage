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


var bowerDir = './resources/assets/vendor/';

var lessPaths = [
    bowerDir + "bootstrap/less",
    bowerDir + "font-awesome/less",
    bowerDir + "bootstrap-select/less"
];

elixir(function(mix) {
    mix.sass([
        'page.scss'
    ], 'public/css/page.css' )


    .scripts([
        'jquery/dist/jquery.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
        'bootstrap-select/dist/js/bootstrap-select.min.js'
    ], 'public/js/vendor.js', bowerDir)
        .copy(bowerDir + 'font-awesome/fonts', 'public/fonts');

});
