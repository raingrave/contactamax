let mix = require('laravel-mix');

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
  .copy('node_modules/bootstrap', 'resources/assets/libs/bootstrap')
  .copy('node_modules/jquery-mask-plugin', 'resources/assets/libs/jquery-mask-plugin')
  .styles([
      'resources/assets/libs/bootstrap/dist/css/bootstrap.css',
      'resources/assets/css/style.css'
  ], 'public/css/app.css')
  mix.js([
      'resources/assets/js/app.js',
      'resources/assets/libs/jquery-mask-plugin/dist/jquery.mask.js'
  ], 'public/js/app.js')

