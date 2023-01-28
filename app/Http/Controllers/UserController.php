<?php

namespace App\Http\Controllers;

use App\Models\Evc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{

    public function showRegister()
    {
        Redirect::setIntendedUrl(url()->previous());
        return view('users.register');
    }
    public function doRegister()
    {
        $formFields = request()->validate([
            'name' => ['required', 'min:3'],
            'property_type' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'address' => ['required'],
            'bedroom_count' => ['required'],
            'evc_code' =>  ['required', Rule::exists('evcs', 'evc')->where('user_id', null), 'min:8', 'max:8'],
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);


        // Login
        auth()->login($user);

        $evc = Evc::where('evc', request('evc_code'))->first();
        $evc->update([

            'user_id' => auth()->id(),
        ]);

        event(new Registered($user));

        return redirect()->intended(RouteServiceProvider::HOME)->with('message', 'User created and logged in');
    }

    public function showLogin()
    {
        Redirect::setIntendedUrl(url()->previous());
        return view('users.login');
    }

    public function doLogin()
    {
        $formFields = request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            request()->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME)->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }



    public function logoutWeb()
    {

        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Redirect::setIntendedUrl(url()->previous());
        return redirect()->intended(RouteServiceProvider::HOME)->with('message', 'You have been logged out!');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('users.profile', ['user' => $user]);
    }
}