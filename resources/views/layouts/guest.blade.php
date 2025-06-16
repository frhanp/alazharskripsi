<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Portal Login - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- Mengganti font default dengan Inter agar serasi --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            body { font-family: 'Inter', sans-serif; }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- Mengubah background menjadi biru pastel (sky-50) --}}
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-sky-50">
            
            {{-- Mengganti logo default dengan teks dan sub-judul --}}
            <div>
                <a href="/" class="text-4xl font-bold text-sky-600">
                    Al-Azhar 43 Gorontalo
                </a>
                <p class="text-center text-slate-500 mt-2">Portal Wali Murid & Staf</p>
            </div>

            {{-- Mempercantik card login --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-xl overflow-hidden sm:rounded-2xl border border-slate-200">
                {{ $slot }}
            </div>

             {{-- Menambahkan footer --}}
             <div class="mt-8 text-center text-sm text-slate-500">
                <p>&copy; {{ date('Y') }} YPI Al-Azhar. Seluruh Hak Cipta Dilindungi.</p>
                <a href="/" class="underline hover:text-sky-600 mt-2 inline-block">
                    &larr; Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </body>
</html>