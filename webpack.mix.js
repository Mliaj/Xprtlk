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
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/adminlte/dist/css/adminlte.min.css',
    'public/adminlte/plugins/fontawesome-free/css/all.min.css',
    'public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'
], 'public/css/all.css');
