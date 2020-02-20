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
    'public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'resources/css/event_program.css'
], 'public/css/all.css');

mix.scripts([
    'public/adminlte/plugins/jquery/jquery.min.js',
    'public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'public/adminlte/dist/js/adminlte.min.js',
    'resources/js/appAlert.js',
], 'public/js/all.js');