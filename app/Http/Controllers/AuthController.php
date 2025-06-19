<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function register(Request $request): RedirectResponse{
        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/login');
    }
    public function login(Request $request): RedirectResponse{

        if (Auth::attempt([
            'email' => $request-> email,
            'password' => $request-> password,
        ])){
            $user = User::where(['email' => $request->email])->first();
            Auth::login($user);
            return redirect('/');
        }

        return redirect('login')->with('error','email/passowrd salah');
    }
    // fungsii auth::attemp adalah untuk pengecekan user mana di database yanng di input user saat mengisi username dan pass
    public function logaut(){}
}
