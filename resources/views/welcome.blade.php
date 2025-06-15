<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran SPP - Al Azhar 43 Gorontalo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom Animations inspired by Shadcn UI */
        .hover-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
            border: 1px solid #e5e7eb;
        }
        .hover-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #f9fafb;
        }
        .btn-primary {
            transition: all 0.2s ease;
            background-color: #3b82f6;
            color: white;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #2563eb;
            transform: scale(1.03);
        }
        .btn-secondary {
            transition: all 0.2s ease;
            background-color: transparent;
            border: 1px solid #d1d5db;
            color: #374151;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 500;
        }
        .btn-secondary:hover {
            background-color: #f3f4f6;
            border-color: #9ca3af;
        }
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.8s ease forwards;
        }
        @keyframes fadeIn {
            to { opacity: 1; }
        }
        .fade-in-delay-1 { animation-delay: 0.2s; }
        .fade-in-delay-2 { animation-delay: 0.4s; }
        .fade-in-delay-3 { animation-delay: 0.6s; }

        /* Responsive Adjustments */
        @media (max-width: 640px) {
            .text-4xl { font-size: 2rem; }
            .text-3xl { font-size: 1.75rem; }
            .text-lg { font-size: 1rem; }
            .py-24 { padding-top: 4rem; padding-bottom: 4rem; }
            .py-16 { padding-top: 3rem; padding-bottom: 3rem; }
            .px-6 { padding-left: 1rem; padding-right: 1rem; }
            .btn-primary, .btn-secondary { padding: 8px 16px; font-size: 0.9rem; }
            .grid-cols-3 { grid-template-columns: 1fr; }
            .space-x-4 > * + * { margin-left: 0.75rem; }
            .space-x-6 > * + * { margin-left: 1rem; }
            .flex-nav { flex-direction: column; gap: 1rem; align-items: center; }
            .logo-text { font-size: 1rem; }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Header -->
    <header class="bg-white border-b border-gray-200">
        <nav class="container mx-auto px-6 py-4 flex flex-col sm:flex-row justify-between items-center flex-nav">
            <div class="flex items-center space-x-3">
                <img src="/images/logo-alazhar.png" alt="Logo Al Azhar" class="h-8">
                <span class="text-lg font-semibold text-gray-900 logo-text">Al Azhar 43 Gorontalo</span>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600 font-medium">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-secondary">Login</a>
                    <a href="{{ route('register') }}" class="btn-primary">Daftar</a>
                @endauth
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-blue-50 to-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 fade-in">Pembayaran SPP Al Azhar 43 Gorontalo</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8 fade-in fade-in-delay-1">Bayar SPP dengan cepat, aman, dan mudah melalui platform kami yang dirancang untuk kenyamanan Anda.</p>
            <a href="{{ route('login') }}" class="btn-primary fade-in fade-in-delay-2">Mulai Pembayaran</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 fade-in">Keunggulan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-lg hover-card fade-in fade-in-delay-1">
                    <svg class="w-8 h-8 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1.9-2 2-2s2 .9 2 2-2 4-2 4m0 0H8m4 0v3m-7-7h14M5 7V5a2 2 0 012-2h10a2 2 0 012 2v2M5 7v10a2 2 0 002 2h10a2 2 0 002-2V7"></path></svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Transaksi dilindungi dengan teknologi enkripsi terkini.</p>
                </div>
                <div class="p-6 rounded-lg hover-card fade-in fade-in-delay-2">
                    <svg class="w-8 h-8 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Proses Cepat</h3>
                    <p class="text-gray-600">Selesaikan pembayaran dalam hitungan menit.</p>
                </div>
                <div class="p-6 rounded-lg hover-card fade-in fade-in-delay-3">
                    <svg class="w-8 h-8 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dukungan 24/7</h3>
                    <p class="text-gray-600">Tim kami siap membantu kapan saja Anda membutuhkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4 fade-in">Siap Membayar SPP Sekarang?</h2>
            <p class="text-lg mb-8 fade-in fade-in-delay-1">Bergabung dengan ribuan orang tua yang mempercayai platform kami.</p>
            <a href="{{ route('register') }}" class="btn-primary fade-in fade-in-delay-2">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-4">© {{ date('Y') }} Al Azhar 43 Gorontalo. All rights reserved.</p>
            <div class="flex justify-center space-x-6 flex-col sm:flex-row">
                <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition">Syarat & Ketentuan</a>
                <a href="#" class="hover:text-white transition">Kontak Kami</a>
            </div>
        </div>
    </footer>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>