<?php

/**
 * Переадресация с адресов в которых присутствует 'public' или 'index.php'
 */
if (strpos($_SERVER['REQUEST_URI'], 'public') !== false || strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
	header('Location: http://' . $_SERVER['HTTP_HOST']);
	die();	
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testdb', function () {
    $users = App\Users::get();
    return $users;
});
