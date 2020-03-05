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
    .js('resources/js/bulma.js', 'public/js/bulma.js')
    .sass('resources/sass/bulma.scss', 'public/css/bulma.css')
    .sass('resources/sass/app.scss', 'public/css')
    .styles('node_modules/bulma-extensions/dist/css/bulma-extensions.min.css', 'public/css/bulma-extensions.css');
