<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
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



Route::get('/test', function () {
    return view('auth0.user');
});//->middleware(['auth0.authenticate']);



Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('login');
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class)->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class)->name('auth0.callback');

Route::get('/', function () {
    return view('content.home');
})->name('home');//->middleware(['auth0.authenticate']);

// Require an authenticated session to access this route.
Route::get('/required', function () {
    return view('auth0.user');
});//->middleware(['auth0.authenticate']);

Route::get('/profile', function () {
    return view('content.profile');
})->name('profile');//->middleware(['auth0.authenticate'])

Route::get('/add-project', [projectController::class, 'create'])->name('add-project');//->middleware(['auth0.authenticate']);
Route::post('/add-project', [projectController::class, 'store']);//->middleware(['auth0.authenticate']);//->middleware(['auth0.authenticate']);


Route::get('/list-project', [projectController::class, 'index'])->name('list-project');//->middleware(['auth0.authenticate']);


Route::get('/edit-project/{id}', [projectController::class, 'edit'])->name('edit-project');//->middleware(['auth0.authenticate']);
Route::put('/edit-project/{id}', [projectController::class, 'update']);//->middleware(['auth0.authenticate']);

Route::get('/delete-project/{id}', [projectController::class, 'destroy'])->name('delete-project');//->middleware(['auth0.authenticate']);


Route::get('/show-project/{id}', [projectController::class, 'show'])->name('show-project');//->middleware(['auth0.authenticate']);



