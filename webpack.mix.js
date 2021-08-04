const mix = require('laravel-mix');
require("laravel-mix-tailwind");

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

mix.sass("resources/scss/app.scss", "public/assets/css")
    .sass("resources/scss/admin.scss", "public/assets/css")
    .js("resources/js/app.js", "public/assets/js")
    .tailwind();
