<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::group(['middleware' => 'user'], function () {
    Route::get('/sign-guestbook', 'GuestbookController@search');
    Route::post('/sign-guestbook', 'GuestbookController@sign');
    Route::get('/create-guestbook', function(){return view('createGB');});
    Route::post('/create-guestbook', 'GuestbookController@create');
    Route::post('/update-guestbook', 'GuestbookController@updateGB');
    Route::get('/profile', 'UserController@view');
    Route::post('/update-profile', 'UserController@update');
    Route::get('/myguestbook','GuestbookController@viewAll');
    Route::post('/change-mode','GuestbookController@changeMode');
});
