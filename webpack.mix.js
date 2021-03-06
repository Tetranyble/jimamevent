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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/css/base.css',
        'resources/assets/css/main.css',
        ], 'public/assets/frontend/css/frontend.css')
    .scripts([
        'resources/assets/js/main.js',
        ], 'public/assets/frontend/js/frontend.js')
    .copyDirectory('resources/assets/image', 'public/assets/image');
