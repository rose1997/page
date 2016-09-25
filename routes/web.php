<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    // Route::get('access', function (){
    //     echo "你進來囉!";
    //     //先進行身分判斷
    // })->middleware('auth');

Route::get('/login', 'LoginController@index');
Route::post('/apple','AppleController@apple');
// Route::post('/home', 'LoginConzftroller@login');
// Route::get('/logout', 'LoginController@logout');

Auth::routes();

Route::get('/home', 'SeatController@create');
Route::post('/home', 'SeatController@store');
Route::get('/check', 'SeatController@index');

// Route::get('/', 'UserController@index');
// Route::get('/register', 'UserController@create');
// Route::post('/', 'UserController@store');

// Route::delete('/messages/{message}', 'MessageController@destroy');
// Route::get('/messages/{message}/edit', 'MessageController@edit');
// Route::get('/messages/{message}', 'MessageController@show');
// Route::patch('messages/{message}', 'MessageController@update');
