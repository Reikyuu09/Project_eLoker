<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Lamaran Pekerjaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-2xl mx-auto px-4">
        <!-- Form Container -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-semibold text-blue-600 mb-2">Form Lamaran Pekerjaan</h1>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Messages --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-6 text-sm">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('lamaran.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Nomor HP -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor HP</label>
                    <input type="text" name="no_hp" value="{{ old('no_hp') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Jurusan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ old('jurusan') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Posisi yang Dilamar -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Posisi yang Dilamar</label>
                    <input type="text" name="posisi" value="{{ old('posisi') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Upload CV -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload CV (PDF / DOCX)</label>
                    <input type="file" name="cv"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm
                               file:mr-4 file:py-1 file:px-4
                               file:rounded-md file:border-0
                               file:text-sm file:font-medium
                               file:bg-blue-600 file:text-white
                               hover:file:bg-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" 
                        accept=".pdf,.docx,.doc" required>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between items-center pt-4">
                    <a href="{{ url('/') }}" 
                       class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                        ← Kembali ke Beranda
                    </a>
                    <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 font-medium transition duration-200">
                        Kirim Lamaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
