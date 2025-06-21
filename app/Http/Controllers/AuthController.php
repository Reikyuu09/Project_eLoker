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
    return view('dashboard', compact('lowongan'));
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
    public function submitForm(Request $request)
{
    
    $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:15',
            'jurusan' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        $cvPath = $request->file('cv')->store('cv_pelamar', 'public');

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim!');
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

                return redirect('/dashboard');
            }
                return redirect('/user');

            
        }

        return redirect('login')->with('error','email/passowrd salah');
    }
    // fungsii auth::attemp adalah untuk pengecekan user mana di database yanng di input user saat mengisi username dan pass
    public function logaut(){}
}
