<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lamaran; 

class Authcontroller extends Controller
{
    public function home()
{
    $lowongan = Lamaran::all();
    return view('home', compact('lowongan'));
}
    public function dashboard()
{
    $lowongan = Lamaran::all();
    return view('dashboard', array_merge(
        compact('lowongan'),
        ['pageSlug' => 'dashboard']
    ));
}
    public function user()
{
    $lowongan = Lamaran::all();
    return view('user', compact('lowongan'));
}
    public function form()
{
    return view('form');
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
            
            if($user->is_admin == true){

                return redirect('/dashboard/lamaran');
            }
                return redirect('/user');

            
        }

        return redirect('login')->with('error','email/passowrd salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
