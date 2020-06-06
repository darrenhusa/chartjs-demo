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
mix.browserSync('chartjs-demo.test');

// mix.js(['resources/js/app.js', 'resources/js/main.js'], 'public/js');
// mix.js(['resources/js/main.js'], 'public/js');

        // mix.js(['resources/js/app.js',
        //         'resources/js/main.js',
        //         'resources/js/myChart.js'],
        //         'public/js');
