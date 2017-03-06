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


if (strpos($_SERVER['REQUEST_URI'], 'public') !== false || strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
	
	var_dump($_SERVER['HTTPS']);
	echo "<br>";
	var_dump($_SERVER['HTTP_HOST']);
	echo "<br>";
	var_dump($_SERVER['REQUEST_URI']);
	echo "<br>";
	echo "<br>";
	echo "redirect: " . (($_SERVER['HTTPS'])? "https://" : "http://") . $_SERVER['HTTP_HOST'];
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
