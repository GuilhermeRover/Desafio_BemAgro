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

Route::resource(
    'config', UserController::class
);

Route::resource(
    'dashboard', UserGithubController::class
)->middleware(['auth']);

Route::get('/pesquisar', 'UserGithubController@gitSearch')->name('gitSearch')->middleware(['auth']);
Route::get('/detalhes', 'githubDetails@index')->name('githubDetails')->middleware(['auth']);

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate')->name('login.authenticate');

Route::get('/cadastre-se', 'Auth\RegisterController@index')->name('register');
Route::post('/cadastre-se', 'Auth\RegisterController@store')->name('register.store');

Route::get('/logout', Auth\LogoutController::class)->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('home');