<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Wali Murid') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <h3 class="text-2xl font-bold text-gray-800">Informasi Putra/i Anda</h3>
                <p class="text-gray-500">Ringkasan status pembayaran SPP untuk setiap anak.</p>
            </div>

            @if($dataAnak->isEmpty())
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center text-gray-500">
                        Anda belum memiliki data siswa yang terhubung dengan akun ini.
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($dataAnak as $anak)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col justify-between">
                            <div class="p-6">
                                <a href="{{ route('wali.detail-siswa', $anak['id_siswa']) }}" class="text-xl font-bold text-gray-900 hover:text-indigo-600 hover:underline">
                                    {{ $anak['nama_siswa'] }}
                                </a>
                                <p class="text-sm text-gray-600">Kelas: {{ $anak['kelas'] ?? '-' }}</p>

                                <div class="mt-4">
                                    <p class="text-xs font-semibold text-gray-400 uppercase">SPP Bulan {{ \Carbon\Carbon::now()->format('F') }}</p>
                                    @if ($anak['spp_bulan_ini_lunas'])
                                        <div class="flex items-center mt-1 text-green-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span class="font-semibold">Lunas</span>
                                        </div>
                                    @else
                                        <div class="flex items-center mt-1 text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>
                                            <span class="font-semibold">Belum Lunas</span>
                                        </div>
                                    @endif
                                </div>
                                
                                {{-- ======================================================= --}}
                                {{-- PATOKAN: resources/views/wali/dashboard.blade.php --}}
                                {{-- AWAL PERUBAHAN --}}
                                {{-- ======================================================= --}}
                                <div class="mt-4">
                                    <p class="text-xs font-semibold text-gray-400 uppercase">Total Tunggakan (Bulan Lalu)</p>
                                    @if ($anak['total_tunggakan'] > 0)
                                        <p class="font-bold text-lg text-red-600">Rp {{ number_format($anak['total_tunggakan'], 0, ',', '.') }}</p>
                                    @else
                                        {{-- Tampilkan Rp 0 jika tidak ada tunggakan, bukan "-" --}}
                                        <p class="font-semibold text-lg text-gray-700">Rp 0</p>
                                    @endif
                                </div>
                                {{-- ======================================================= --}}
                                {{-- AKHIR PERUBAHAN --}}
                                {{-- ======================================================= --}}

                            </div>

                            <div class="bg-gray-50 px-6 py-4">
                                @if (!$anak['spp_bulan_ini_lunas'] || $anak['total_tunggakan'] > 0)
                                    <a href="{{ route('pembayaran.pilih-metode', $anak['id_siswa']) }}" class="block text-center w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors">
                                        Bayar Sekarang
                                    </a>
                                @else
                                    <a href="{{ route('riwayat.index') }}" class="block text-center w-full bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                                        Lihat Riwayat
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>