<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Verifikasi Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto" x-data="{ openModal: false, selectedPembayaran: null }">

        <div class="bg-white p-6 rounded shadow">
            @if($pembayaranMenunggu->isEmpty())
                <p class="text-gray-500">Tidak ada pembayaran yang menunggu verifikasi.</p>
            @else
                <table class="w-full table-auto">
                    {{-- ... (thead tetap sama) ... --}}
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border px-3 py-2">Siswa</th>
                            <th class="border px-3 py-2">Bulan</th>
                            <th class="border px-3 py-2">Jumlah</th>
                            <th class="border px-3 py-2">Bukti</th>
                            <th class="border px-3 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembayaranMenunggu as $pembayaran)
                        <tr>
                            <td class="border px-3 py-2">{{ $pembayaran->siswa->nama_siswa ?? 'Unknown' }}</td>
                            <td class="border px-3 py-2">{{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} {{ $pembayaran->tahun }}</td>
                            <td class="border px-3 py-2">Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</td>
                            <td class="border px-3 py-2">
                                <a href="{{ asset('storage/' . $pembayaran->bukti_transfer) }}" target="_blank" class="text-indigo-600 underline">Lihat</a>
                            </td>
                            <td class="border px-3 py-2 space-x-2">
                                <form action="{{ route('pembayaran.verifikasi.update', $pembayaran->id_pembayaran) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="diterima" />
                                    <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">Terima</button>
                                </form>
                                {{-- Tombol Tolak sekarang membuka Modal --}}
                                <button @click="openModal = true; selectedPembayaran = {{ $pembayaran->id_pembayaran }}" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Tolak</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <div x-show="openModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div @click.away="openModal = false" class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
                <h3 class="text-lg font-semibold mb-4">Alasan Penolakan</h3>
                <form :action="`/pembayaran/verifikasi/${selectedPembayaran}`" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="status" value="ditolak" />
                    <textarea name="catatan_verifikasi" rows="3" class="w-full border-gray-300 rounded-md" placeholder="Contoh: Bukti transfer tidak jelas" required></textarea>
                    <div class="mt-4 flex justify-end space-x-2">
                        <button type="button" @click="openModal = false" class="px-4 py-2 bg-gray-200 rounded">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded">Kirim Penolakan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>