const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/AdminLte.js', 'public/js')
    .js('resources/js/authUser.js', 'public/js')
    .vue()
    .sass('resources/sass/AdminLTE.scss', 'public/css')
    .sass('resources/sass/welcome.scss', 'public/css').options({
        processCssUrls: false
    });
