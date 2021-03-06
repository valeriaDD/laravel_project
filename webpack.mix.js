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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .js('resources/js/homePage.js', 'public/js')
    .js('resources/js/appointment.js', 'public/js')
    .js('resources/js/createArticle.js', 'public/js')
    .js('resources/js/mostPopularArticle.js', 'public/js')
    .js('resources/js/carousel.js', 'public/js');
