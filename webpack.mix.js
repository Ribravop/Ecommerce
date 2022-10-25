const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .copy('resources/images', 'public/images')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css');
