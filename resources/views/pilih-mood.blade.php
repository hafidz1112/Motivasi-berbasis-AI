<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pilih Mood</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-r from-green-200 to-blue-300 flex items-center justify-center px-4">

<div class="bg-white rounded-2xl shadow-xl p-10 w-full max-w-[700px] text-center">

    <h1 class="text-2xl font-semibold text-gray-800 mb-4">
        Apa yang sedang kamu rasakan?
    </h1>

    <p class="text-gray-600 mb-8">
        Tidak ada jawaban benar atau salah.  
        Pilih yang paling mendekati perasaanmu saat ini 💙
    </p>

    <form action="{{ route('mood.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-4 gap-6">

            <button name="mood" value="senang"
                class="flex flex-col items-center p-6 bg-gray-100 rounded-xl shadow
                       hover:bg-green-100 hover:scale-105 transition">
                <span class="text-5xl">😊</span>
                <span class="mt-2 text-gray-700 font-medium">Senang</span>
            </button>

            <button name="mood" value="biasa"
                class="flex flex-col items-center p-6 bg-gray-100 rounded-xl shadow
                       hover:bg-yellow-100 hover:scale-105 transition">
                <span class="text-5xl">😐</span>
                <span class="mt-2 text-gray-700 font-medium">Biasa</span>
            </button>

            <button name="mood" value="sedih"
                class="flex flex-col items-center p-6 bg-gray-100 rounded-xl shadow
                       hover:bg-blue-100 hover:scale-105 transition">
                <span class="text-5xl">😔</span>
                <span class="mt-2 text-gray-700 font-medium">Sedih</span>
            </button>

            <button name="mood" value="lelah"
                class="flex flex-col items-center p-6 bg-gray-100 rounded-xl shadow
                       hover:bg-blue-100 hover:scale-105 transition">
                <span class="text-5xl">😩</span>
                <span class="mt-2 text-gray-700 font-medium">Lelah</span>
            </button>

            <button name="mood" value="marah"
                class="flex flex-col items-center p-6 bg-gray-100 rounded-xl shadow
                       hover:bg-red-100 hover:scale-105 transition">
                <span class="text-5xl">😡</span>
                <span class="mt-2 text-gray-700 font-medium">Marah</span>
            </button>

            <button name="mood" value="cemas"
                class="flex flex-col items-center p-6 bg-gray-100 rounded-xl shadow
                       hover:bg-red-100 hover:scale-105 transition">
                <span class="text-5xl">😰</span>
                <span class="mt-2 text-gray-700 font-medium">cemas</span>
            </button>

        </div>
    </form>

    <p class="text-sm text-gray-500 mt-8 leading-relaxed">
        Pilihan ini akan membantu AI memberikan pesan motivasi  
        yang lebih sesuai dengan kondisi emosimu 🌱
    </p>

</div>

</body>
</html>
