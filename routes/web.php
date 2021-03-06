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

Route::get('/',
    'HomeController@index'
)->name('home');

Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController', ['only' => ['update', 'destroy']]);
Route::resource('posts.comments', 'CommentsController', ['only' => ['store']]);


/* 소셜 로그인 */

Route::get(
    'social/{provider}',
    'SocialController@execute'
)->name('social.login');


/* 가입 */
Route::get(
    'auth/register',
    'UsersController@create'
)->name('users.create');

Route::post(
    'auth/register',
    'UsersController@store'
)->name('users.store');

Route::get(
    'auth/confirm/{code}',
    'UsersController@confirm'
)->name('users.confirm')
    ->where('code', '[\pL-\pN]{60}');


/* 인증 */
Route::get(
    'auth/login',
    'SessionsController@create'
)->name('sessions.create');

Route::post(
    'auth/login',
    'SessionsController@store'
)->name('sessions.store');

Route::get(
    'auth/logout',
    'SessionsController@destroy'
)->name('sessions.destroy');



/* 비밀번호 분실 관련(이메일 인증) */
Route::get(
    'auth/remind',
    'PasswordsController@getRemind'
)->name('remind.create');

Route::post(
    'auth/remind',
    'PasswordsController@postRemind'
)->name('remind.store');

Route::get(
    'auth/reset/{token}',
    'PasswordsController@getReset'
)->name('reset.create')
    ->where('code', '[\pL-\pN]{64}');

Route::post(
    'auth/reset',
    'PasswordsController@postReset'
)->name('reset.store');


