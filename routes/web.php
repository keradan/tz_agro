<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
echo "<pre>";
var_dump($_SERVER);

if (strpos($_SERVER['REQUEST_URI'], 'public') !== false || strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
	var_dump($_SERVER['REQUEST_URI']);
	die('ok');	
}




Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return ['some' => 'text'];
});

Route::get('/public', function () {
    return "This is public";
});
