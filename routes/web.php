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
});



// route template 
Route::get('/index', 'App\Http\Controllers\Auth0HandlerController@login')->name('index')->middleware(['auth0.authenticate']);;
Route::get('/add-convention', function () {
    return view('template.pages.add-convention');
})->name('convention')->middleware(['auth0.authenticate']);

Route::get('/add-project', function () {
    return view('template.pages.add-project');
})->name('project')->middleware(['auth0.authenticate']);


Route::get('/add-Devision', function () {
    return view('template.pages.add-devision');
})->name('Devision')->middleware(['auth0.authenticate']);


Route::get('/add-Service', function () {
    return view('template.pages.add-service');
})->name('Service')->middleware(['auth0.authenticate']);

Route::get('/index-convention', function () {
    return view('template.pages.index-convention');
})->name('index-convention')->middleware(['auth0.authenticate']);

Route::get('/index-projet', function () {
    return view('template.pages.index-projet');
})->name('index-projet')->middleware(['auth0.authenticate']);

Route::get('/index-service', function () {
    return view('template.pages.index-service');
})->name('index-service')->middleware(['auth0.authenticate']);


// end route template 

//->middleware(['auth0.authenticate']);



Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('login');
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class)->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class)->name('auth0.callback');

Route::get('/', function () {
    return view('template.layouts.template');
})->middleware(['auth0.authenticate.optional']);

// Require an authenticated session to access this route.
Route::get('/required', function () {
    return view('template.layouts.template');
})->middleware(['auth0.authenticate']);
