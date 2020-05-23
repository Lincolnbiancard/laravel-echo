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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function(){
    return view('message');
});

// Route::get('/send', function(){
//     broadcast(new \App\Events\SendMessage);
//     return 'done';
// });

Route::post('/messages', function(){
    $data = request()->all();
    $message = \App\Message::create($data);
    broadcast(new \App\Events\SendMessage($message));
    return redirect('/messages');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
