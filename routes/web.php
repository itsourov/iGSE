<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
})->name('home');
Route::get('/other', [Controller::class, 'index'])->name('other');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', [UserController::class, 'showRegister'])->name('register');
    Route::post('/register', [UserController::class, 'doRegister']);

    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/login', [UserController::class, 'doLogin']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [UserController::class, 'logoutWeb']);
    Route::get('/logout', [UserController::class, 'logoutWeb'])->name('user.logout');

    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
});