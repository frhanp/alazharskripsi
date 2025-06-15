<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Verifikasi Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="bg-white p-6 rounded shadow">
            @if($pembayaranMenunggu->isEmpty())
                <p class="text-gray-500">Tidak ada pembayaran yang menunggu verifikasi.</p>
            @else
                <table class="w-full table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-3 py-2">Siswa</th>
                            <th class="border border-gray-300 px-3 py-2">Bulan</th>
                            <th class="border border-gray-300 px-3 py-2">Tahun</th>
                            <th class="border border-gray-300 px-3 py-2">Jumlah</th>
                            <th class="border border-gray-300 px-3 py-2">Bukti Transfer</th>
                            <th class="border border-gray-300 px-3 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembayaranMenunggu as $pembayaran)
                        <tr>
                            <td class="border border-gray-300 px-3 py-2">
                                {{ $pembayaran->siswa ? $pembayaran->siswa->nama_siswa : 'Unknown' }}
                            </td>
                            <td class="border border-gray-300 px-3 py-2">
                                {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }}
                            </td>
                            <td class="border border-gray-300 px-3 py-2">{{ $pembayaran->tahun }}</td>
                            <td class="border border-gray-300 px-3 py-2">
                                Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="border border-gray-300 px-3 py-2">
                                @if($pembayaran->bukti_transfer)
                                    <a href="{{ asset('storage/' . $pembayaran->bukti_transfer) }}" target="_blank" class="text-indigo-600 underline">
                                        Lihat Bukti
                                    </a>
                                @else
                                    Tidak ada bukti
                                @endif
                            </td>
                            <td class="border border-gray-300 px-3 py-2 space-x-2">
                                <form action="{{ route('pembayaran.verifikasi.update', $pembayaran->id_pembayaran) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="diterima" />
                                    <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">Terima</button>
                                </form>

                                <form action="{{ route('pembayaran.verifikasi.update', $pembayaran->id_pembayaran) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="ditolak" />
                                    <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Tolak</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>