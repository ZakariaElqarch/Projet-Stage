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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/test', function () {
    return view('test');
})->middleware(['auth0.authenticate']);



Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('login');
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class)->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class)->name('auth0.callback');

Route::get('/', function () {
    return view('content.home');
})->name('home');//->middleware(['auth0.authenticate.optional']);

// Require an authenticated session to access this route.
Route::get('/required', function () {
    return view('auth0.user');
})->middleware(['auth0.authenticate']);

Route::get('/testhome', function () {
    return view('content.home');
})->name('home');


Route::get('/ajouter', function () {
    return view('content.ajout');
})->name('ajouter');//->middleware(['auth0.authenticate']);