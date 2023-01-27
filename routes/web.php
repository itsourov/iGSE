<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

    Route::get('/forgot-password', [PasswordController::class, 'forgot_password'])->name('password.request');

    Route::post('/forgot-password', [PasswordController::class, 'requestPassword'])->name('password.request');
    Route::get('/reset-password/{token}', [PasswordController::class, 'resetPassword'])->name('password.reset');


    Route::post('/reset-password', [PasswordController::class, 'setNewPassword'])->middleware('guest')->name('password.update');
});

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [UserController::class, 'logoutWeb']);
    Route::get('/logout', [UserController::class, 'logoutWeb'])->name('user.logout');

    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');


    Route::post('resend/verification-email', function (\Illuminate\Http\Request $request) {
        $user = User::where('email', Auth::user()->email)->first();

        $user->sendEmailVerificationNotification();

        return 'your response';
    })->name('users.verification-emai');
});


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/')->with('message', 'Email verified!');
})->middleware(['auth', 'signed'])->name('verification.verify');