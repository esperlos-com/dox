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
/*

mix.minify([
    'resources/assets/js/alerts.js',
    'resources/assets/js/app.js',
    'resources/assets/js/custom.js',
    'resources/assets/js/website/expandable-menu.js',
    'resources/assets/js/website/drawer/drawer.js',
    'resources/assets/css/custom.css',
    'resources/assets/css/app2.css',
    'resources/assets/css/website/app2.css',
    'resources/assets/css/website/components.css',
    'resources/assets/css/website/responsive.css',
    'resources/assets/css/website/variables.css',
    'resources/assets/css/website/markap-icons/markap-icons.css',
]);


mix.combine([
    'resources/assets/css/custom.css',
    'resources/assets/css/app2.css',
    'resources/assets/css/website/app2.css',
    'resources/assets/css/website/components.css',
    'resources/assets/css/website/responsive.css',
    'resources/assets/css/website/variables.css',
    'resources/assets/css/website/markap-icons/markap-icons.css',
],'resources/css/app2.css');


mix.minify([
    'resources/css/app2.css',
]);
*/

mix.sass('resources/sass/website/app.scss','public/assets/css/website');
