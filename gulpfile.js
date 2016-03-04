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

elixir(function(mix) {
    mix.sass([
        "animate.scss",
        "icomoon.scss",
        "simple-line-icons.scss",
        "magnific-popup.scss",
        "bootstrap.scss",
        "style.scss"
    ]);
});
