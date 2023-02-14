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




// route template 
Route::get('/', function(){
    return view('layouts.layout');
 })->name('home');//->middleware(['auth0.authenticate']);
 


 Route::get('/profile', function(){
    return view('contents.profile');
 })->name('profile');//->middleware(['auth0.authenticate']);
// convention Route


Route::get('/list-convention', function () {
    return view('contents.list-convention');
})->name('list-convention');//->middleware(['auth0.authenticate']);


Route::get('/add-convention', function () {
    return view('contents.add-convention');
})->name('add-convention');//->middleware(['auth0.authenticate']);


Route::get('/show-convention', function () {
    return view('contents.show-convention');
})->name('show-convention');//->middleware(['auth0.authenticate']);

Route::get('/update-convention', function () {
    return view('contents.update-convention');
})->name('update-convention');//->middleware(['auth0.authenticate']);

// end convention Route

// start project Route

Route::get('/list-projet', function () {
    return view('contents.index-projet');
})->name('list-projet');//->middleware(['auth0.authenticate']);



Route::get('/add-project', function () {
    return view('contents.add-project');
})->name('add-project');//->middleware(['auth0.authenticate']);


// end project Route


// start service Route

Route::get('/list-service', function () {
    return view('contents.index-service');
})->name('list-service');//->middleware(['auth0.authenticate']);


Route::get('/add-Service', function () {
    return view('contents.add-service');
})->name('add-service');//->middleware(['auth0.authenticate']);

// end service Route


// start devision Route

Route::get('/add-Devision', function () {
    return view('contents.add-devision');
})->name('add-devision');//->middleware(['auth0.authenticate']);

Route::get('/list-devision', function () {
    return view('contents.add-devision');
})->name('list-devision');//->middleware(['auth0.authenticate']);

// end devision Route


// start commune Route
Route::get('/list-Commune', function () {
    return view('contents.list-Commune');
})->name('list-commune');//->middleware(['auth0.authenticate']);

Route::get('/add-Commune', function () {
    return view('contents.add-Commune');
})->name('add-commune');//->middleware(['auth0.authenticate']);

Route::get('/show-Commune', function () {
    return view('contents.show-Commune');
})->name('show-commune');//->middleware(['auth0.authenticate']);

Route::get('/update-Commune', function () {
    return view('contents.update-Commune');
})->name('update-commune');//->middleware(['auth0.authenticate']);



// end commune Route


// start partenaire Route

Route::get('/add-partenaire', function (): Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View {
    return view('contents.add-partenaire');
})->name('add-partenaire');//->middleware(['auth0.authenticate']);

Route::get('/list-partenaire', function () {
    return view('contents.list-partenaire');
})->name('list-partenaire');//->middleware(['auth0.authenticate']);


Route::get('/show-partenaire', function () {
    return view('contents.show-partenaire');
})->name('show-partenaire');//->middleware(['auth0.authenticate']);

Route::get('/update-partenaire', function () {
    return view('contents.update-partenaire');
})->name('update-partenaire');//->middleware(['auth0.authenticate']);


// end partenaire Route







// end route template 

//->middleware(['auth0.authenticate']);



Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class);//->name('login');
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class);//->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class);//->name('auth0.callback');

// Route::get('/', function () {
//     return view('layouts.layout');
// });//->middleware(['auth0.authenticate.optional']);

// Require an authenticated session to access this route.
Route::get('/required', function () {
    return view('layouts.layout');
});//->middleware(['auth0.authenticate']);
