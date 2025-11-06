<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website SPP KB TK SD Al-Azhar 43 Gorontalo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(12px) scale(.98);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .animate-fade-in {
            animation: fade-in-up .7s ease-out forwards;
        }

        .delay-150 {
            animation-delay: .15s;
        }
    </style>

</head>

<body class="bg-white text-slate-900 antaliased">

    {{-- Latar belakang abstrak dengan gradien biru soft --}}
    <div class="absolute top-0 left-0 w-full h-[120vh] bg-slate-50 -z-10"></div>
    <div
        class="absolute inset-x-0 top-0 -z-10 h-full w-full bg-white [mask-image:radial-gradient(farthest-side,white,transparent)]">
    </div>


    <div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 10)">

        {{-- HEADER --}}
        <header x-data="{ mobileMenuOpen: false }" class="w-full sticky top-0 z-50 transition-all duration-300"
            :class="{ 'bg-white/80 shadow-lg backdrop-blur-sm': scrolled }">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-20">
                    <a href="/" class="text-xl md:text-2xl font-bold text-sky-600">Al-Azhar 43 Gorontalo</a>
                    <nav class="hidden md:flex items-center space-x-8">
                        <a href="#fitur" class="font-medium text-slate-600 hover:text-sky-600 transition-colors">Metode
                            Bayar</a>
                        {{-- <a href="#testimoni" class="font-medium text-slate-600 hover:text-sky-600 transition-colors">Testimoni</a> --}}
                        <a href="#faq"
                            class="font-medium text-slate-600 hover:text-sky-600 transition-colors">FAQ</a>
                        <a href="{{ route('login') }}"
                            class="bg-sky-500 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md hover:bg-sky-600 transition-all duration-200 transform hover:-translate-y-0.5">
                            Login
                        </a>
                    </nav>

                    <div class="md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-800"><svg class="w-7 h-7"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-16 6h16"></path>
                            </svg></button>
                    </div>
                </div>
            </div>
            <div x-show="mobileMenuOpen" x-transition @click.away="mobileMenuOpen = false"
                class="md:hidden absolute top-full w-full bg-white shadow-lg rounded-b-lg p-5 space-y-3">
                <a href="#fitur" @click="mobileMenuOpen=false"
                    class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">Metode Bayar</a>
                <a href="#faq" @click="mobileMenuOpen=false"
                    class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">FAQ</a>
                {{-- <a href="{{ route('login') }}" class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">Login</a> --}}
                <a href="{{ route('login') }}"
                    class="block w-full text-left bg-sky-500 text-white font-semibold px-5 py-2.5 rounded-lg text-center">Masuk</a>
            </div>
        </header>

        <main>
            <section class="relative pt-16 md:pt-24 pb-24 md:pb-32 overflow-hidden">
                <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

                    <!-- Text -->
                    <div class="text-center md:text-left opacity-0 translate-y-4 animate-fade-in">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight text-slate-900 mb-6">
                            Pembayaran SPP <span class="text-sky-600">Al-Azhar 43 Gorontalo</span> Kini Lebih Mudah
                        </h1>
                        <p class="text-lg md:text-xl text-slate-600 max-w-xl mx-auto md:mx-0 mb-10">
                            Selamat datang di website pembayaran resmi kami. Pilih metode pembayaran yang paling nyaman
                            untuk Ayah/Bunda, langsung dari rumah atau di sekolah.
                        </p>
                        <a href="{{ route('login') }}"
                            class="inline-block bg-sky-500 text-white font-bold text-lg px-8 py-4 rounded-lg shadow-lg shadow-sky-500/25 hover:bg-sky-600 transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-2xl">
                            Masuk ke Website
                        </a>
                    </div>

                    <!-- Image -->
                    <div
                        class="relative flex justify-center items-center opacity-0 translate-y-4 animate-fade-in delay-150">
                        <div class="absolute inset-0 bg-sky-300/20 blur-2xl rounded-3xl"></div>
                        <div class="relative max-w-xs md:max-w-sm w-full">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-sky-300/30 to-blue-500/20 blur-2xl rounded-3xl">
                            </div>

                            <img src="{{ asset('images/gedung.png') }}"
                                alt="Ilustrasi Pembayaran Online SPP Al-Azhar Gorontalo"
                                class="relative w-full h-auto rounded-3xl shadow-xl bg-white/60 backdrop-blur-xl ring-1 ring-sky-200/40 p-3
                                       transition-transform duration-700 ease-out hover:scale-[1.03] hover:-rotate-1 hover:shadow-2xl">
                        </div>
                    </div>

                </div>
            </section>


            <section id="data" class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-extrabold text-slate-900">Data & Jangkauan Sekolah</h2>
                        <p class="mt-4 text-lg text-slate-600">Lihat data statistik dan sebaran lokasi siswa kami secara
                            langsung.</p>
                    </div>
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="bg-sky-50 p-8 rounded-xl border border-sky-200 text-center mb-8">
                                <p class="text-lg font-medium text-sky-800">Total Siswa Terdaftar Saat Ini</p>
                                <p class="text-6xl font-black text-sky-600 mt-2">{{ $jumlahSiswa }}</p>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-800">Sebaran Lokasi Siswa</h3>
                            <p class="mt-2 text-slate-600">Peta interaktif ini menunjukkan sebaran domisili siswa
                                Al-Azhar 43 Gorontalo. Data ini membantu kami dalam merencanakan rute antar-jemput dan
                                kegiatan sekolah lainnya. Titik pada peta bersifat anonim dan tidak menampilkan data
                                pribadi.</p>
                        </div>
                        <div class="rounded-xl shadow-lg overflow-hidden border-2 border-slate-200 h-96">
                            <div id="map" style="height: 100%; width: 100%; z-index: 1;"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fitur" class="py-24 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl font-extrabold text-slate-900">Tiga Pilihan Pembayaran Untuk Anda</h2>
                    <p class="mt-4 text-lg text-slate-600">Kami menyediakan berbagai pilihan untuk kemudahan dan
                        kenyamanan Ayah/Bunda.</p>
                    <div class="grid md:grid-cols-3 gap-8 mt-16">
                        {{-- Fitur Card 1 --}}
                        <div
                            class="bg-white p-8 rounded-xl border border-slate-200 text-center transition-all duration-300 ease-in-out hover:border-sky-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer">
                            <div
                                class="bg-sky-100 text-sky-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg></div>
                            <h3 class="text-xl font-bold mt-6">Bayar Langsung</h3>
                            <p class="mt-2 text-slate-600">Silakan datang ke sekolah dan lakukan pembayaran langsung di
                                bagian bendahara.</p>
                        </div>
                        {{-- Fitur Card 2 --}}
                        <div
                            class="bg-white p-8 rounded-xl border border-slate-200 text-center transition-all duration-300 ease-in-out hover:border-sky-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer">
                            <div
                                class="bg-sky-100 text-sky-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg></div>
                            <h3 class="text-xl font-bold mt-6">Upload Bukti Transfer</h3>
                            <p class="mt-2 text-slate-600">Transfer manual ke rekening sekolah, lalu upload bukti bayar
                                Anda melalui portal ini.</p>
                        </div>
                        {{-- Fitur Card 3 --}}
                        <div
                            class="bg-white p-8 rounded-xl border border-slate-200 text-center transition-all duration-300 ease-in-out hover:border-sky-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer">
                            <div
                                class="bg-sky-100 text-sky-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg></div>
                            <h3 class="text-xl font-bold mt-6">Bayar Otomatis (Midtrans)</h3>
                            <p class="mt-2 text-slate-600">Praktis dan instan! Bayar via Virtual Account, E-Wallet
                                (OVO, Gopay), dan lainnya.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                    <div class="pr-8">
                        <h2 class="text-4xl font-extrabold text-slate-900 leading-snug">Dirancang untuk Kemudahan Semua
                            Pihak</h2>
                        <p class="mt-4 text-lg text-slate-600">Tidak hanya mempermudah wali murid, sistem ini juga
                            dilengkapi fitur canggih untuk membantu manajemen sekolah.</p>
                    </div>
                    <div class="space-y-10">

                        <!-- Item -->
                        <div class="flex items-start gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-sky-50">
                                <img src="{{ asset('images/bell.png') }}" class="w-6 h-6 object-contain opacity-90"
                                    alt="Pengingat Tagihan">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900">Pengingat Tagihan Cerdas</h3>
                                <p class="mt-1 text-slate-600 leading-relaxed">
                                    Notifikasi otomatis membantu Ayah/Bunda selalu tepat waktu dalam pembayaran SPP.
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex items-start gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-emerald-50">
                                <img src="{{ asset('images/map.png') }}" class="w-6 h-6 object-contain opacity-90"
                                    alt="Pemetaan Siswa">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900">Pemetaan Siswa & Guru</h3>
                                <p class="mt-1 text-slate-600 leading-relaxed">
                                    Visualisasi domisili siswa dan guru untuk mendukung perencanaan dan monitoring
                                    sekolah.
                                </p>
                            </div>
                        </div>

                    </div>



                </div>
            </section>

            {{-- <section id="testimoni" class="py-24 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl font-extrabold text-slate-900">Apa Kata Keluarga Al-Azhar 43?</h2>
                    <div class="grid md:grid-cols-3 gap-8 mt-16 text-left">
                        <div class="bg-white p-8 rounded-xl shadow-lg"><p class="text-slate-600">"Alhamdulillah, portal ini adalah langkah maju bagi digitalisasi Al-Azhar 43. Transparansi keuangan dan pelaporan kini jauh lebih mudah kami pantau."</p><div class="flex items-center mt-6"><img class="w-12 h-12 rounded-full" src="https://i.pravatar.cc/48?u=1" alt=""><div class="ml-4"><div class="font-bold text-slate-900">Bpk. Kepala Sekolah</div><div class="text-sm text-slate-500">KB TK SD Al-Azhar 43 Gto</div></div></div></div>
                        <div class="bg-white p-8 rounded-xl shadow-lg"><p class="text-slate-600">"Sebagai orang tua, saya senang sekali bisa bayar SPP anak dari rumah. Saya paling suka fitur Midtrans, sekali klik langsung lunas dan dapat notifikasi. Tidak perlu lagi simpan-simpan struk transfer."</p><div class="flex items-center mt-6"><img class="w-12 h-12 rounded-full" src="https://i.pravatar.cc/48?u=2" alt=""><div class="ml-4"><div class="font-bold text-slate-900">Bunda Salma</div><div class="text-sm text-slate-500">Orang Tua Murid</div></div></div></div>
                        <div class="bg-white p-8 rounded-xl shadow-lg"><p class="text-slate-600">"Fitur upload bukti transfer dan konfirmasi otomatis dari Midtrans sangat meringankan pekerjaan saya. Rekonsiliasi data jadi cepat dan minim kesalahan."</p><div class="flex items-center mt-6"><img class="w-12 h-12 rounded-full" src="https://i.pravatar.cc/48?u=3" alt=""><div class="ml-4"><div class="font-bold text-slate-900">Ibu Bendahara</div><div class="text-sm text-slate-500">Staf Keuangan Sekolah</div></div></div></div>
                    </div>
                </div>
            </section> --}}

            <section id="faq" class="py-24 bg-white">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="text-center">
                        <h2 class="text-4xl font-extrabold text-slate-900">Pertanyaan Umum (FAQ)</h2>
                        <p class="mt-4 text-lg text-slate-600">Masih ada pertanyaan? Silakan <a href="#"
                                class="text-sky-600 font-semibold">hubungi Tata Usaha</a>.</p>
                    </div>
                    <div class="mt-12 space-y-4">
                        <div x-data="{ open: false }" class="bg-slate-50 rounded-lg border border-slate-200">
                            <h3 class="w-full"><button @click="open = !open"
                                    class="w-full flex justify-between items-center text-left text-lg font-semibold p-6"><span
                                        :class="{ 'text-sky-600': open }">Bagaimana cara membayar lewat
                                        Midtrans?</span><svg class="w-6 h-6 transform transition-transform"
                                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button></h3>
                            <div x-show="open" x-cloak x-transition class="px-6 pb-6 text-slate-600">Sangat mudah. Di
                                halaman tagihan Anda, pilih metode 'Bayar Otomatis via Midtrans'. Anda akan diberi
                                pilihan untuk membayar melalui Virtual Account (BCA, Mandiri, BNI, dll.), E-Wallet
                                (GoPay, OVO), atau gerai ritel. Cukup ikuti instruksi yang tertera hingga selesai.</div>
                        </div>
                        <div x-data="{ open: false }" class="bg-slate-50 rounded-lg border border-slate-200">
                            <h3 class="w-full"><button @click="open = !open"
                                    class="w-full flex justify-between items-center text-left text-lg font-semibold p-6"><span
                                        :class="{ 'text-blue-600': open }">Jika saya sudah transfer manual, apa yang harus
                                        dilakukan?</span><svg class="w-6 h-6 transform transition-transform"
                                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button></h3>
                            <div x-show="open" x-cloak x-transition class="px-6 pb-6 text-slate-600">Silakan masuk ke
                                portal, pilih menu 'Upload Bukti Bayar', lalu unggah foto atau screenshot bukti transfer
                                Anda. Tim bendahara kami akan melakukan verifikasi pada jam kerja dan status pembayaran
                                Anda akan diperbarui.</div>
                        </div>
                        <div x-data="{ open: false }" class="bg-slate-50 rounded-lg border border-slate-200">
                            <h3 class="w-full"><button @click="open = !open"
                                    class="w-full flex justify-between items-center text-left text-lg font-semibold p-6"><span
                                        :class="{ 'text-blue-600': open }">Apakah data pembayaran saya aman?</span><svg
                                        class="w-6 h-6 transform transition-transform" :class="{ 'rotate-180': open }"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button></h3>
                            <div x-show="open" x-cloak x-transition class="px-6 pb-6 text-slate-600">Tentu. Keamanan
                                data keluarga besar Al-Azhar 43 adalah prioritas kami. Portal ini didukung teknologi
                                enkripsi dan bekerjasama dengan Midtrans, gerbang pembayaran berlisensi Bank Indonesia
                                yang terjamin keamanannya.</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-sky-600">
                <div class="max-w-5xl mx-auto px-6 py-20 text-center">
                    <h2 class="text-4xl font-extrabold text-white">Siap Merasakan Kemudahan Administrasi SPP?</h2>
                    <p class="mt-4 text-lg text-sky-100 max-w-2xl mx-auto">Masuk ke portal wali murid untuk melihat
                        tagihan, riwayat pembayaran, dan memilih metode bayar yang paling sesuai untuk Anda.</p>
                    <a href="{{ route('login') }}"
                        class="mt-8 inline-block bg-white text-sky-600 font-bold text-lg px-8 py-4 rounded-lg shadow-lg hover:bg-slate-100 transition-all duration-300 ease-in-out transform hover:scale-105">
                        Masuk
                    </a>
                </div>
            </section>

        </main>

        <footer class="bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-6 py-12 text-center">
                <h3 class="text-xl font-bold">KB - TK - SD Islam Al-Azhar 43 Gorontalo</h3>
                <p class="mt-2 text-slate-400">Jl. Taman Pendidikan, Kel. Moodu, Kec. Kota Timur, Kota Gorontalo</p>
                <div class="border-t border-slate-800 text-center py-6 mt-8">
                    <p class="text-slate-500">&copy; {{ date('Y') }} Al-Azhar 43 Gorontalo. Seluruh Hak Cipta
                        Dilindungi.</p>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Koordinat tengah untuk Gorontalo
            const map = L.map('map').setView([0.542, 123.059], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: 'Â© OpenStreetMap'
            }).addTo(map);

            // AWAL MODIFIKASI
            // 3. Inisialisasi marker cluster dengan opsi tooltip
            const markers = L.markerClusterGroup({
                // Fungsi ini akan membuat tooltip untuk setiap cluster
                iconCreateFunction: function(cluster) {
                    const childCount = cluster.getChildCount();
                    const icon = L.divIcon({
                        html: `<div><span>${childCount}</span></div>`,
                        className: 'marker-cluster marker-cluster-small', // Anda bisa sesuaikan class-nya
                        iconSize: L.point(40, 40)
                    });

                    // Tambahkan tooltip ke cluster icon
                    const tooltipHtml = `Zoom in untuk melihat <b>${childCount} siswa</b> di area ini`;
                    // Kita perlu 'wrapper' div karena L.divIcon tidak bisa langsung bindTooltip
                    const wrapper = L.marker(cluster.getLatLng(), {
                        icon: icon
                    });
                    wrapper.bindTooltip(tooltipHtml);

                    return icon;
                }
            });
            // AKHIR MODIFIKASI

            // Ambil data dari API publik
            fetch('{{ route('api.locations', [], false) }}')
                .then(response => response.json())
                .then(data => {
                    data.forEach(location => {
                        if (location.tipe === 'siswa') {
                            // AWAL MODIFIKASI
                            // 4. Modifikasi tooltip untuk marker individual
                            const marker = L.marker([location.latitude, location.longitude]);
                            marker.bindTooltip(`<b>Siswa:</b> ${location.nama}`); // Teks tooltip baru
                            markers.addLayer(marker);
                        }
                    });
                    map.addLayer(markers);

                })
                .catch(error => console.error('Error fetching locations:', error));
        });
    </script>
</body>

</html>
