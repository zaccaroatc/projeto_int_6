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

mix
    .styles([
        'resources/views/web/assets/css/animate.css',
        'resources/views/web/assets/css/bootstrap.min.css',
        'resources/views/web/assets/css/et-line-icons.css',
        'resources/views/web/assets/css/font-awesome.min.css',
        'resources/views/web/assets/css/themify-icons.css',
        'resources/views/web/assets/css/swiper.min.css',
        'resources/views/web/assets/css/justified-gallery.min.css',
        'resources/views/web/assets/css/magnific-popup.css',
        'resources/views/web/assets/css/bootsnav.css',
    ],'public/frontend/assets/libs/libs.css')

    .styles([
        'resources/views/web/assets/css/style.css',
        'resources/views/web/assets/css/responsive.css',
    ],'public/frontend/assets/css/style.css')

    .scripts([
        'resources/views/web/assets/js/html5shiv.js'
    ],'public/frontend/assets/js/html5shiv.js')

    .scripts([
        'resources/views/web/assets/js/jquery.js',
        'resources/views/web/assets/js/modernizr.js',
        'resources/views/web/assets/js/bootstrap.bundle.js',
        'resources/views/web/assets/js/jquery.easing.1.3.js',
        'resources/views/web/assets/js/smooth-scroll.js',
        'resources/views/web/assets/js/jquery.appear.js',
    ],'public/frontend/assets/js/core.js')

    .scripts([
        'resources/views/web/assets/js/bootsnav.js',
        'resources/views/web/assets/js/jquery.nav.js',
        'resources/views/web/assets/js/wow.min.js',
        'resources/views/web/assets/js/page-scroll.js',
        'resources/views/web/assets/js/swiper.min.js',
        'resources/views/web/assets/js/jquery.count-to.js',
        'resources/views/web/assets/js/jquery.stellar.js',
        'resources/views/web/assets/js/jquery.magnific-popup.min.js',
        'resources/views/web/assets/js/isotope.pkgd.min.js',
        'resources/views/web/assets/js/imagesloaded.pkgd.min.js',
        'resources/views/web/assets/js/classie.js',
        'resources/views/web/assets/js/hamburger-menu.js',
        'resources/views/web/assets/js/counter.js',
        'resources/views/web/assets/js/jquery.fitvids.js',
        'resources/views/web/assets/js/skill.bars.jquery.js',
        'resources/views/web/assets/js/justified-gallery.min.js',
        'resources/views/web/assets/js/jquery.easypiechart.min.js',
        'resources/views/web/assets/js/instafeed.min.js',
        'resources/views/web/assets/js/retina.min.js',
    ],'public/frontend/assets/libs/libs.js')

    .scripts([
        'resources/views/web/assets/js/main.js'
    ], 'public/frontend/assets/js/main.js')

    .copyDirectory('resources/views/web/assets/revolution', 'public/frontend/assets/revolution')
    .copyDirectory('resources/views/web/assets/images', 'public/frontend/assets/images')
    .copyDirectory('resources/views/web/assets/fonts', 'public/frontend/assets/fonts')

    .options({
        processCssUrls: false
    })

    .version()
;
