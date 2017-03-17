const { mix } = require('laravel-mix');

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
	.js([
		'resources/assets/js/admin/jquery.js',
		'resources/assets/js/admin/bootstrap.js',
		'resources/assets/js/admin/jquery.flot.categories.js',
		'resources/assets/js/admin/jquery.flot.js',
		'resources/assets/js/admin/jquery.flot.pie.js',
		'resources/assets/js/admin/jquery.flot.resize.js',
		'resources/assets/js/admin/jquery.flot.stack.js',
		'resources/assets/js/admin/jquery.flot.time.js',
		'resources/assets/js/admin/jquery.knob.js',
		'resources/assets/js/admin/modernizr.js',
		'resources/assets/js/admin/morris.js',
		'resources/assets/js/admin/scripts.js',
	], 'public/js/admin.js')
	.js([
		'resources/assets/js/site/map.js',
		'resources/assets/js/site/map_vm.js',
		'resources/assets/js/site/axios.js',
		'resources/assets/js/site/vue.js',
	], 'public/js/map.js')
	.sass('resources/assets/sass/admin.scss', 'public/css/admin.css')
	.sass('resources/assets/sass/site.scss', 'public/css/site.css');
