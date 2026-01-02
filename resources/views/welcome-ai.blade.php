<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-r from-green-200 to-blue-300
             px-4 py-8
             lg:flex lg:items-center lg:justify-center">

<div class="relative w-full max-w-6xl mx-auto
            flex flex-col lg:flex-row
            items-center lg:justify-between
            gap-10
            px-6 sm:px-12">

    <!-- Kiri: Ilustrasi -->
    <div class="flex items-center justify-center">
        <img src="{{ asset('images/kartun.png') }}" alt="ilustrasi" class="w-[200px] lg:w-[300px]">
    </div>

    <!-- Tengah: Konten -->
    <div class="text-center max-w-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">
            Hallo <span class="font-bold">{{ Auth::user()->name }}</span>
        </h1>

        <p class="text-md lg:text-lg text-gray-700 mb-6">
            Selamat datang di <span class="font-semibold">Aplikasi Motivasi Berbasis AI</span>.
            Aplikasi ini akan membantu kamu mendapatkan motivasi yang sesuai dengan kondisi emosimu hari ini.
        </p>

        <a href="/pilih-mood"
           class="inline-block bg-blue-600 hover:bg-blue-700
                  text-white px-8 py-3 rounded-xl text-md lg:text-lg transition">
            Mulai
        </a>
    </div>

    <!-- Logout -->
    <div class="absolute top-0 right-0">
        <form method="POST" action="/logout">
            @csrf
            <button title="Logout">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-9 h-9 text-blue-700"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 0 016 0z" />
                </svg>
            </button>
        </form>
    </div>

</div>

</body>
</html>
