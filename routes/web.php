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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
        return view('layouts.page',
            [
                'title' => "Page 2 - A little about the Author",
                'author' => json_encode([
                        "name" => "Fisayo Afolayan",
                        "role" => "Software Enginner",
                        "code" => "Always keeping it clean"
                ])
            ]
        );
    });


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/model', 'ModelController@index');
Route::post('/modelimplement', 'ModelImplementController@index');
Route::get('/chat', 'ChatController@index')->middleware('auth')->name('friend.index');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('friend.show');
Route::post('/chat/getChat', 'ChatController@getChat')->middleware('auth');
Route::get('/wel', 'WelController@index');
Route::get('/modelv','ModelImplementController@try')->name('Final');