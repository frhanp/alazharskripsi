<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Pembayaran SPP - {{ $siswa->nama_siswa }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                <p class="text-gray-600">Status Pembayaran Tahun Ajaran {{ now()->year }}</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach ($statusPerBulan as $bulan => $status)
                    @php
                        $bgColor = [
                            'diterima' => 'bg-green-100 border-green-500',
                            'menunggu' => 'bg-yellow-100 border-yellow-500',
                            'belum_bayar' => 'bg-red-100 border-red-500',
                            'ditolak' => 'bg-red-200 border-red-600',
                            'Belum Jatuh Tempo' => 'bg-gray-100 border-gray-300'
                        ][$status];

                        $textColor = [
                            'diterima' => 'text-green-800',
                            'menunggu' => 'text-yellow-800',
                            'belum_bayar' => 'text-red-800',
                            'ditolak' => 'text-red-900',
                            'Belum Jatuh Tempo' => 'text-gray-500'
                        ][$status];
                    @endphp
                    <div class="p-4 rounded-lg border-2 {{ $bgColor }}">
                        <p class="font-bold text-gray-800">{{ $bulan }}</p>
                        <p class="text-sm font-semibold {{ $textColor }} mt-1">
                            {{ $status == 'diterima' ? 'Lunas' : ($status == 'belum_bayar' ? 'Menunggak' : ucfirst($status)) }}
                        </p>
                    </div>
                @endforeach
            </div>
             <div class="mt-6 text-center">
                <a href="{{ route('dashboard') }}" class="text-indigo-600 hover:underline">
                    &larr; Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>