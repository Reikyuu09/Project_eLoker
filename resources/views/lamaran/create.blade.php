<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Lamaran</title>
</head>
<body>
    <h2>Form Lamaran Pekerjaan</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('lamaran.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nama" placeholder="Nama Lengkap"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="text" name="no_hp" placeholder="Nomor HP"><br><br>
        <input type="text" name="jurusan" placeholder="Jurusan"><br><br>
        <input type="text" name="posisi" placeholder="Posisi yang dilamar"><br><br>
        <input type="file" name="cv"><br><br>
        <button type="submit">Kirim Lamaran</button>
    </form>
</body>
</html>
