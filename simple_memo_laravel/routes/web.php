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
Route::get('/user', 'Auth\RegisterController@showRegistrationForm')->name('user.index');
Route::post('/user/register', 'Auth\RegisterController@register')->name('user.exec.register');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/memo', 'MemoController@index')->name('memo.index');
    Route::get('/memo/add', 'MemoController@add')->name('memo.add');
    Route::post('/memo/delete', 'MemoController@delete')->name('memo.delete');
    Route::post('/memo/update', 'MemoController@update')->name('memo.update');
    Route::get('/memo/select', 'MemoController@select')->name('memo.select');
});


Auth::routes();

