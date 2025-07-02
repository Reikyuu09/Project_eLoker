<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LamaranController extends Controller
{
    public function index()
    {
        $lowongan = Lamaran::latest()->get();
        return view('dashboard.lamaran.index', compact('lowongan'));
    }

    public function create()
    {
        return view('dashboard.lamaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|unique:lamarans,judul',
            'perusahaan' => 'required|string',
            'tipe_pekerjaan' => 'required|string',
            'pendidikan' => 'required|string',
            'skill_yang_dibutuhkan' => 'nullable|string',
            'level' => 'required|string',
            'departemen' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imgName = null;
        if ($request->hasFile('img')) {
            $imgName = time() . '_' . Str::slug($request->judul) . '.' . $request->img->extension();
            $request->img->move(public_path('uploads/lamaran'), $imgName);
        }

        Lamaran::create([
            'judul' => $request->judul,
            'perusahaan' => $request->perusahaan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'pendidikan' => $request->pendidikan,
            'skill_yang_dibutuhkan' => $request->skill_yang_dibutuhkan,
            'level' => $request->level,
            'departemen' => $request->departemen,
            'img' => $imgName,
        ]);

        return redirect()->route('lamaran.index')->with('success', 'Lowongan berhasil ditambahkan.');
    }

    public function edit(Lamaran $lamaran)
    {
        return view('dashboard.lamaran.edit', compact('lamaran'));
    }

    public function update(Request $request, Lamaran $lamaran)
    {
        $request->validate([
            'judul' => 'required|string|unique:lamarans,judul,' . $lamaran->id,
            'perusahaan' => 'required|string',
            'tipe_pekerjaan' => 'required|string',
            'pendidikan' => 'required|string',
            'skill_yang_dibutuhkan' => 'nullable|string',
            'level' => 'required|string',
            'departemen' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('img')) {
            if ($lamaran->img && file_exists(public_path('uploads/lamaran/' . $lamaran->img))) {
                unlink(public_path('uploads/lamaran/' . $lamaran->img));
            }

            $imgName = time() . '_' . Str::slug($request->judul) . '.' . $request->img->extension();
            $request->img->move(public_path('uploads/lamaran'), $imgName);
            $lamaran->img = $imgName;
        }

        $lamaran->update([
            'judul' => $request->judul,
            'perusahaan' => $request->perusahaan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'pendidikan' => $request->pendidikan,
            'skill_yang_dibutuhkan' => $request->skill_yang_dibutuhkan,
            'level' => $request->level,
            'departemen' => $request->departemen,
            'img' => $lamaran->img,
        ]);

        return redirect()->route('lamaran.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Lamaran $lamaran)
    {
        if ($lamaran->img && file_exists(public_path('uploads/lamaran/' . $lamaran->img))) {
            unlink(public_path('uploads/lamaran/' . $lamaran->img));
        }

        $lamaran->delete();

        return redirect()->route('lamaran.index')->with('success', 'Data berhasil dihapus.');
    }
}
