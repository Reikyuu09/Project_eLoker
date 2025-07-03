<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>JobNest - Form Lamaran Pekerjaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-md">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white mb-4">JobNest</h1>
            <h2 class="text-xl text-white/90 mb-2">Wujudkan Karir Impianmu</h2>
            <p class="text-white/70 text-sm">
                Platform untuk mahasiswa mencari kerja dan magang. Temukan peluang terbaik dari perusahaan-perusahaan terpercaya.
            </p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <div class="text-center mb-6">
                <h3 class="text-xl font-semibold text-blue-600 mb-2">Form Lamaran Pekerjaan</h3>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Messages --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('lamaran.store') }}" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap Anda"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                </div>

                <!-- Nomor HP -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor HP</label>
                    <input type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="08xx-xxxx-xxxx"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                </div>

                <!-- Jurusan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ old('jurusan') }}" placeholder="Contoh: Teknik Informatika"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                </div>

                <!-- Posisi yang Dilamar -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Posisi yang Dilamar</label>
                    <input type="text" name="posisi" value="{{ old('posisi') }}" placeholder="Contoh: Frontend Developer"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                </div>

                <!-- Upload CV -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload CV (PDF / DOCX)</label>
                    <input type="file" name="cv"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm
                               file:mr-4 file:py-2 file:px-4
                               file:rounded-full file:border-0
                               file:text-sm file:font-semibold
                               file:bg-blue-600 file:text-white
                               hover:file:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                        accept=".pdf,.docx,.doc" required>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between items-center pt-6">
                    <a href="{{ url('/user') }}" 
                       class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                        ← Kembali ke Beranda
                    </a>
                    <button type="submit"
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold transition duration-200">
                        Kirim Lamaran
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer -->
        
    </div>
</body>
</html>
