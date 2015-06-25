var elixir = require('laravel-elixir');
require('laravel-elixir-sync');

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

elixir(function(mix) {
    mix.sync('resources/assets/js/**/*.js', 'public/js');
});

//elixir(function(mix) {
//    mix.browserify('index.js');
//});



