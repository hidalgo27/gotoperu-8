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
    .sourceMaps();

mix.scripts([
    'node_modules/venobox/venobox/venobox.min.js',
    'node_modules/swiper/swiper-bundle.js',
    'node_modules/masonry-layout/dist/masonry.pkgd.js',
    // 'node_modules/swiper/swiper-bundle.min.js.map',
    // 'node_modules/feather-icons/dist/feather.js.map',
    // 'node_modules/feather-icons/dist/feather.js',
    // 'node_modules/bootstrap-dropdown-hover/dist/jquery.bootstrap-dropdown-hover.min.js',
    // 'node_modules/vue-multiselect/dist/vue-multiselect.min.js',
], 'public/js/plugins.js');
// ---js web
if (mix.config.inProduction) {
    mix.version();
}

