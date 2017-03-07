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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testdb', function () {
    $users = App\User::get();
    return $users;
});

Route::get('/test/branches', function () {
    return "If you see this it is a good sign that all is okey now";
});
