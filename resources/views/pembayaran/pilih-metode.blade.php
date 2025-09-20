<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pilih Metode Pembayaran untuk {{ $siswa->nama_siswa }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md mb-8 text-center">
                <p class="text-gray-600">Total Tagihan SPP Saat Ini</p>
                <p class="text-4xl font-bold text-red-600">Rp {{ number_format($totalTunggakan, 0, ',', '.') }}</p>
                <p class="text-xs text-gray-500 mt-1">Ini adalah total dari semua bulan yang menunggak.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="{{ route('pembayaran.midtrans.form', $siswa->id_siswa) }}" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-lg hover:border-indigo-500 border-2 border-transparent transition-all transform hover:-translate-y-1">
                    <h3 class="text-lg font-bold text-gray-900">Bayar Otomatis (Online)</h3>
                    <p class="text-sm text-gray-600 mt-2">Pilihan pembayaran instan melalui Virtual Account, E-Wallet (GoPay, OVO), Kartu Kredit, dll.</p>
                    <div class="mt-4 text-indigo-600 font-semibold flex items-center">
                        Lanjutkan ke Midtrans <span class="ml-2">&rarr;</span>
                    </div>
                </a>

                <a href="{{ route('pembayaran.upload.create') }}" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-lg hover:border-green-500 border-2 border-transparent transition-all transform hover:-translate-y-1">
                    <h3 class="text-lg font-bold text-gray-900">Upload Bukti Transfer</h3>
                    <p class="text-sm text-gray-600 mt-2">Lakukan transfer manual ke rekening sekolah, lalu unggah bukti pembayaran untuk diverifikasi oleh bendahara.</p>
                    <div class="mt-4 text-green-600 font-semibold flex items-center">
                        Upload Bukti <span class="ml-2">&rarr;</span>
                    </div>
                </a>
            </div>

            {{-- Info Bayar Langsung yang Sudah Diperbarui --}}
            <div class="mt-8 bg-white p-6 rounded-xl shadow-md flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="bg-gray-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900">Bayar Langsung di Sekolah</h3>
                    <p class="text-sm text-gray-600 mt-1">
                        Anda juga bisa melakukan pembayaran langsung di loket bendahara sekolah pada jam kerja.
                        <br>
                        <span class="text-xs text-gray-500">Alamat: Jl. Taman Pendidikan, Kel. Moodu, Kec. Kota Timur, Kota Gorontalo.</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>