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









Route::get('/profile', function () {
    return view('contents.profile');
})->name('profile')->middleware(['auth0.authenticate']);






Route::resource('convention', App\Http\Controllers\ConventionController::class)->middleware(['auth0.authenticate']);

Route::resource('project', App\Http\Controllers\projectController::class)->middleware(['auth0.authenticate']);

Route::resource('commune', App\Http\Controllers\CommuneController::class)->middleware(['auth0.authenticate']);


Route::resource('division', App\Http\Controllers\divisionController::class)->middleware(['auth0.authenticate']);


Route::resource('partenaire', App\Http\Controllers\PartenaireController::class)->middleware(['auth0.authenticate']);

Route::get('/', 'App\Http\Controllers\DashboardContorller@index')->name('dashboard')->middleware(['auth0.authenticate']);


Route::resource('service', App\Http\Controllers\serviceController::class)->middleware(['auth0.authenticate']);

Route::post('/get-related-data/{id}', 'App\Http\Controllers\DataController@getRelatedData')->name('get-related-data');

Route::resource('project', App\Http\Controllers\projectController::class)->middleware(['auth0.authenticate']);



Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('login');
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class)->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class)->name('auth0.callback');

// Route::get('/required', function () {
//     return view('auth0.user');
// })->middleware(['auth0.authenticate']);


