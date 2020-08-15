<?php

use Illuminate\Support\Facades\Auth;
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

// 初期表示はログインにする
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login.index');
Route::get('/user', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
Route::get('/memo', function() {
    return view("memo");
})->name('memo.index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
