<?php

/**
 * Переадресация с адресов в которых присутствует 'public' или 'index.php'
 */
if (env('APP_ENV') == 'production') {
	if (strpos($_SERVER['REQUEST_URI'], 'public') !== false || strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
		header('Location: http://' . $_SERVER['HTTP_HOST']);
		die();	
	}
}

Route::get('/', 'SiteController@malls_map')->name('home');
Route::get('/malls', 'SiteController@malls_list');
Route::get('/malls/{id}', 'SiteController@mall_details');

Route::get('/api/malls', 'MapController@markers');
Route::get('/api/malls/filters', 'MapController@filters');
Route::get('/api/malls/{place_id}', 'MapController@marker_info');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/console/{cmd}', function ($cmd) {
	$output = [];
	exec('cd .. && ' . $cmd, $output);
	die('<pre>' . implode('<br>', $output) . '</pre>');
});