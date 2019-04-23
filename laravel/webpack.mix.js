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

mix.options({
  postCss: [
    require('autoprefixer')({
      browsers: ['last 2 versions', '> 1%', 'not ie < 10'],
      cascade: false
    }),
    require('postcss-custom-properties'),
  ],
  purifyCss: true,
});

mix.browserSync({
  proxy: 'local.donutsoop.com'
});

mix.copyDirectory('resources/media', 'public/media');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.minify([
  'public/js/app.js', 'public/css/app.css'
]);
