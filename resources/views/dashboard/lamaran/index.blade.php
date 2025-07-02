@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Lowongan</h2>
    <a href="{{ route('lamaran.create') }}" class="btn btn-success mb-3">Tambah Lowongan</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Perusahaan</th>
                <th>Tipe</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowongan as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->perusahaan }}</td>
                <td>{{ $item->tipe_pekerjaan }}</td>
                <td>
                    @if ($item->img)
                        <img src="{{ asset('uploads/lamaran/' . $item->img) }}" width="80">
                    @else
                        Tidak ada
                    @endif
                </td>
                <td>
                    <a href="{{ route('lamaran.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('lamaran.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection