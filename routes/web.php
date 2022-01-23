<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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
    return 'Seja bem vindo';
});

Route::get('/login',  ([
    AuthController::class,
    'login'
]))->name('login');

Route::get('/register',  [
    AuthController::class,
    'register'
]);

Route::post('/signin',  [
    AuthController::class,
    'signin'
]);

Route::post('/signup',  [
    AuthController::class,
    'signup'
]);

Route::get('/logout',  [
    AuthController::class,
    'logout'
])->middleware('auth');

Route::get('/contacts',  [
    ContactController::class,
    'index'
])->middleware('auth');

Route::get('/contacts/create',[
    ContactController::class,
    'create'
 ])->middleware('auth');

 Route::post('/contacts/store',[
    ContactController::class,
    'store'
])->middleware('auth');

Route::get('/contacts/show/{id}', [
    ContactController::class,
    'show'
])->middleware('auth');

Route::get('/contacts/edit/{id}', [
    ContactController::class,
    'edit'
])->middleware('auth');

Route::post('/contacts/update/{id}', [
    ContactController::class,
    'update'
])->middleware('auth');

Route::get('/contacts/destroy/{id}',[
    ContactController::class,
    'destroy'
])->middleware('auth');