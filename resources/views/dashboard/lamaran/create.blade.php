@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Lowongan</h2>
    <form action="{{ route('lamaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Perusahaan</label>
            <input type="text" name="perusahaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tipe Pekerjaan</label>
            <input type="text" name="tipe_pekerjaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Skill</label>
            <input type="text" name="skill_yang_dibutuhkan" class="form-control">
        </div>
        <div class="mb-3">
            <label>Level</label>
            <input type="text" name="level" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Departemen</label>
            <input type="text" name="departemen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar (optional)</label>
            <input type="file" name="img" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection