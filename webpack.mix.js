const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js', [
        require('jquery')
    ])
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);
