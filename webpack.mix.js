const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js');
mix.js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/site/bootstrap.js');
mix.css('node_modules/bootstrap/dist/css/bootstrap.min.css','public/site/bootstrap.min.css')
