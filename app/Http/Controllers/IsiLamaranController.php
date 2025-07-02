<?php

namespace App\Http\Controllers;

use App\Models\IsiLamaran;
use Illuminate\Http\Request;

class IsiLamaranController extends Controller
{
    public function create()
    {
        return view('lamaran.form'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'jurusan' => 'required',
            'posisi' => 'required',
            'cv' => 'required|mimes:pdf,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cv', 'public');

        IsiLamaran::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp'],
            'jurusan' => $validated['jurusan'],
            'posisi' => $validated['posisi'],
            'cv' => $cvPath,
        ]);

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim!');
    }
}

