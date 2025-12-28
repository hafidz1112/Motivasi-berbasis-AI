<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-green-200 to-blue-300">

<div class="flex items-center gap-10">
    <!-- Card Register -->
    <div class="bg-white rounded-2xl shadow-lg p-8 w-80">
        <h2 class="text-center text-xl font-bold text-blue-600 mb-6">Registrasi</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-2 rounded mb-4 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register" class="space-y-4">
            @csrf

            <div>
                <label class="text-sm">Nama</label>
                <input type="text" name="name"
                    class="w-full mt-1 px-3 py-2 rounded-md bg-green-100 focus:outline-none">
            </div>

            <div>
                <label class="text-sm">Email</label>
                <input type="email" name="email"
                    class="w-full mt-1 px-3 py-2 rounded-md bg-green-100 focus:outline-none">
            </div>

            <div>
                <label class="text-sm">Password</label>
                <input type="password" name="password"
                    class="w-full mt-1 px-3 py-2 rounded-md bg-blue-100 focus:outline-none">
            </div>

            <div>
                <label class="text-sm">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full mt-1 px-3 py-2 rounded-md bg-blue-100 focus:outline-none">
            </div>

            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-md">
                Daftar
            </button>
        </form>

        <p class="text-center text-sm text-blue-600 mt-4">
            <a href="/login">login.</a>
        </p>
    </div>

    <!-- Ilustrasi -->
    <img src="{{ asset('images/foto-Photoroom.png') }}" alt="character" class="w-[300px] flex absolute right-20">
    <img src="{{ asset('images/bocil-Photoroom.png') }}" alt="character" class="w-[300px] flex absolute left-20">
</div>

</body>
</html>
