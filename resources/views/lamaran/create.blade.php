<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Lamaran Pekerjaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-700">Form Lamaran Pekerjaan</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tampilkan error jika ada --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('lamaran.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Nomor HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp') }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Jurusan</label>
                <input type="text" name="jurusan" value="{{ old('jurusan') }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Posisi yang Dilamar</label>
                <input type="text" name="posisi" value="{{ old('posisi') }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Upload CV (PDF / DOCX)</label>
                <input type="file" name="cv"
                    class="mt-1 block w-full text-sm file:mr-4 file:py-2 file:px-4
                           file:rounded-full file:border-0
                           file:text-sm file:font-semibold
                           file:bg-blue-600 file:text-white
                           hover:file:bg-blue-700" required>
            </div>

            <div class="flex justify-between items-center pt-4">
                <a href="{{ url('/') }}"
                   class="text-sm text-blue-600 hover:underline hover:text-blue-800">
                    ← Kembali ke Beranda
                </a>
                <button type="submit"
                        class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
                    Kirim Lamaran
                </button>
            </div>
        </form>
    </div>
</body>
</html>
