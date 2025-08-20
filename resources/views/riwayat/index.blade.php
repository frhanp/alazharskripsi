<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Riwayat Pembayaran') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        {{-- ======================================================= --}}
        {{-- FORM FILTER OTOMATIS --}}
        {{-- ======================================================= --}}
        <form id="filter-form" action="{{ route('riwayat.index') }}" method="GET"
            class="mb-6 p-4 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                {{-- Filter Siswa: Hanya muncul untuk Bendahara & Ketua Yayasan --}}
                @if (Auth::user()->role !== 'wali_murid')
                    <div>
                        <label for="siswa" class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                        <select name="siswa" id="siswa"
                            class="w-full border-gray-300 rounded-md shadow-sm text-sm">
                            <option value="">-- Semua Siswa --</option>
                            @foreach ($siswa as $s)
                                <option value="{{ $s->id_siswa }}"
                                    {{ request('siswa') == $s->id_siswa ? 'selected' : '' }}>
                                    {{ $s->nama_siswa }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif

                {{-- Filter Tahun --}}
                <div>
                    <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                    <input name="tahun" id="tahun" type="number" value="{{ request('tahun') }}"
                        placeholder="Contoh: 2025" class="w-full border-gray-300 rounded-md shadow-sm text-sm">
                </div>

                {{-- Filter Status --}}
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select name="status" id="status" class="w-full border-gray-300 rounded-md shadow-sm text-sm">
                        <option value="">-- Semua Status --</option>
                        <option value="diterima" {{ request('status') == 'diterima' ? 'selected' : '' }}>Diterima
                        </option>
                        <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Menunggu
                        </option>
                        <option value="ditolak" {{ request('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>
            </div>
        </form>

        {{-- ======================================================= --}}
        {{-- TABEL YANG LEBIH LENGKAP --}}
        {{-- ======================================================= --}}
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        {{-- Kolom Siswa: Sekarang tampil untuk SEMUA peran --}}
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Siswa</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Bulan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tahun</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                        {{-- Kolom Metode: Ditambahkan untuk semua peran --}}
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Metode</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($pembayaran as $p)
                        <tr class="hover:bg-gray-50">
                            {{-- Data Siswa: Sekarang tampil untuk SEMUA peran --}}
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->siswa->nama_siswa }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">
                                {{ is_array($p->bulan) ? implode(', ', $p->bulan) : $p->bulan }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->tahun }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">Rp {{ number_format($p->jumlah, 0, ',', '.') }}
                            </td>
                            {{-- Data Metode: Ditambahkan untuk semua peran --}}
                            <td class="px-4 py-3 text-sm text-gray-900">{{ ucfirst($p->metode) }}</td>
                            <td class="px-4 py-3 text-sm">
                                {{-- Badge Status --}}
                                @if ($p->status == 'diterima')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Lunas</span>
                                @elseif ($p->status == 'menunggu')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Menunggu</span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">{{ ucfirst($p->status) }}</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-900">
                                {{-- Tombol Aksi yang Cerdas (logika tetap sama) --}}
                                @if ($p->status == 'menunggu' && $p->is_midtrans)
                                    <button class="lanjut-bayar-btn ..." data-snap-token="{{ $p->snap_token }}">
                                        Lanjutkan Pembayaran
                                    </button>
                                @elseif ($p->status == 'diterima' && $p->kwitansi)
                                    <button>
                                        <a href="{{ route('kwitansi.download', $p->kwitansi) }}">
                                            Download
                                        </a>
                                    </button>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            {{-- Sesuaikan colspan karena ada penambahan kolom --}}
                            <td colspan="8" class="px-4 py-6 text-center text-sm text-gray-500">
                                Tidak ada riwayat pembayaran.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $pembayaran->links() }}
        </div>
    </div>

    {{-- Script untuk tombol "Lanjutkan Pembayaran" --}}
    @push('scripts')
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const continueButtons = document.querySelectorAll('.lanjut-bayar-btn');
                continueButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const snapToken = this.dataset.snapToken;
                        if (snapToken) {
                            window.snap.pay(snapToken, {
                                onSuccess: (result) => {
                                    window.location.reload();
                                },
                                onPending: (result) => {
                                    window.location.reload();
                                },
                                onError: (result) => {
                                    alert("Pembayaran gagal atau token kedaluwarsa.");
                                },
                                onClose: () => {
                                    console.log('Popup ditutup.');
                                }
                            });
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterForm = document.getElementById('filter-form');
                if (!filterForm) return; // Keluar jika form tidak ditemukan

                let debounceTimeout;

                // Fungsi untuk mengirim form dengan sedikit jeda
                const submitForm = () => {
                    clearTimeout(debounceTimeout);
                    debounceTimeout = setTimeout(() => {
                        filterForm.submit();
                    }, 500); // Jeda 0.5 detik setelah input terakhir
                };

                // Terapkan ke semua input dan select di dalam form
                filterForm.querySelectorAll('select, input').forEach(input => {
                    // Gunakan 'input' untuk reaksi instan saat mengetik
                    input.addEventListener('input', submitForm);
                });
            });
        </script>
    @endpush
</x-app-layout>
