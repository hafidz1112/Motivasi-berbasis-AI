<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivasi Untukmu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-200 to-green-200
             px-4 py-8 flex items-center
             lg:flex lg:items-center lg:justify-center">

    <div class="bg-white rounded-2xl shadow-xl
                w-full max-w-xl
                p-6 sm:p-10
                text-center
                mx-auto">

        {{-- Judul --}}
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">
            Ini pesan untukmu 💙
        </h1>

        {{-- Mood --}}
        @php
            $emoji = [
                'senang' => '😊',
                'biasa'  => '😐',
                'sedih'  => '😔',
                'marah'  => '😡',
                'lelah'  => '😴',
                'cemas'  => '😰',
            ];
        @endphp

        <div class="flex items-center justify-center gap-3 mb-6">
            <span class="text-4xl">{{ $emoji[$mood] ?? '💭' }}</span>
            <span class="text-lg text-gray-700">
                Kamu sedang merasa <strong>{{ ucfirst($mood) }}</strong>
            </span>
        </div>

        {{-- Pesan Motivasi --}}
        <div class="bg-gray-100 rounded-xl p-5 sm:p-6 mb-8">
            <p class="text-gray-800 leading-relaxed text-base sm:text-lg">
                {{ $motivasi }}
            </p>
        </div>

        {{-- Tombol --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('mood') }}"
               class="px-6 py-3 rounded-xl bg-gray-200 text-gray-700
                      hover:bg-gray-300 transition">
                Pilih Mood Lagi
            </a>

            <a href="{{ route('welcome') }}"
               class="px-6 py-3 rounded-xl bg-blue-500 text-white
                      hover:bg-blue-600 transition">
                Kembali ke Beranda
            </a>
        </div>

        {{-- Footer kecil --}}
        <p class="text-sm text-gray-500 mt-8 leading-relaxed">
            Ingat, perasaanmu valid.  
            Kamu tidak harus kuat setiap saat 🌱
        </p>

    </div>

</body>
</html>
