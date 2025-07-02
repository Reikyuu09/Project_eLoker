@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Lowongan</h2>
    <form action="{{ route('lamaran.update', $lamaran->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $lamaran->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Perusahaan</label>
            <input type="text" name="perusahaan" class="form-control" value="{{ $lamaran->perusahaan }}" required>
        </div>
        <div class="mb-3">
            <label>Tipe Pekerjaan</label>
            <input type="text" name="tipe_pekerjaan" class="form-control" value="{{ $lamaran->tipe_pekerjaan }}" required>
        </div>
        <div class="mb-3">
            <label>Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" value="{{ $lamaran->pendidikan }}" required>
        </div>
        <div class="mb-3">
            <label>Skill</label>
            <input type="text" name="skill_yang_dibutuhkan" class="form-control" value="{{ $lamaran->skill_yang_dibutuhkan }}">
        </div>
        <div class="mb-3">
            <label>Level</label>
            <input type="text" name="level" class="form-control" value="{{ $lamaran->level }}" required>
        </div>
        <div class="mb-3">
            <label>Departemen</label>
            <input type="text" name="departemen" class="form-control" value="{{ $lamaran->departemen }}" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label><br>
            @if ($lamaran->img)
                <img src="{{ asset('uploads/lamaran/' . $lamaran->img) }}" width="100" class="mb-2">
            @endif
            <input type="file" name="img" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection