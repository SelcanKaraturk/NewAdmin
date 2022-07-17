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

//mix.copy('resources/assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css','public/assets/admin/css/fullcalendar/fullcalendar.bundle.css');
mix.copy('resources/assets/admin/media','public/assets/admin/media');
mix.copy('resources/assets/admin/plugins','public/assets/admin/plugins');
mix.copy('resources/assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js','public/assets/admin/js/fullcalendar/fullcalendar.bundle.js');
mix.copy('resources/assets/admin/js/pages/widgets.js','public/assets/admin/js/widgets.js');
mix.copy('resources/assets/admin/js/pages/crud/ktdatatable/base/html-table.js','public/assets/admin/js/html-table.js');
mix.copy('resources/assets/admin/js/ckeditor','public/assets/admin/js/ckeditor');

mix.js('resources/js/app.js', 'public/js')
    .combine([
        'resources/assets/admin/plugins/global/plugins.bundle.js',
        'resources/assets/admin/plugins/custom/prismjs/prismjs.bundle.js',
        'resources/assets/admin/js/scripts.bundle.js'
    ], 'public/assets/admin/js/admin.js')
    .styles([
        'resources/assets/admin/plugins/global/plugins.bundle.css',
        'resources/assets/admin/plugins/custom/prismjs/prismjs.bundle.css',
        'resources/assets/admin/css/style.bundle.css',
        'resources/assets/admin/css/themes/layout/header/base/light.css',
        'resources/assets/admin/css/themes/layout/header/menu/light.css',
        'resources/assets/admin/css/themes/layout/brand/dark.css',
        'resources/assets/admin/css/themes/layout/aside/dark.css',
    ],'public/assets/admin/css/admin.css')
    .sourceMaps()
mix.version()
