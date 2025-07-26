<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Riwayat Pembayaran') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <form action="{{ route('riwayat.index') }}" method="GET"
            class="mb-6 p-4 bg-white rounded-lg shadow-sm border border-gray-200">
            {{-- Isi form filter Anda tetap sama --}}
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div>
                    <label for="siswa" class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                    <select name="siswa" id="siswa"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option value="">-- Semua --</option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id_siswa }}"
                                {{ request('siswa') == $s->id_siswa ? 'selected' : '' }}>
                                {{ $s->nama_siswa }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                    <input name="tahun" id="tahun" type="number" value="{{ request('tahun') }}"
                        placeholder="2025"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>
                <div>
                    <label for="metode" class="block text-sm font-medium text-gray-700 mb-1">Metode</label>
                    <select name="metode" id="metode"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option value="">-- Semua --</option>
                        <option value="transfer" {{ request('metode') == 'transfer' ? 'selected' : '' }}>Transfer
                        </option>
                        <option value="langsung" {{ request('metode') == 'langsung' ? 'selected' : '' }}>Langsung
                        </option>
                        <option value="midtrans" {{ request('metode') == 'midtrans' ? 'selected' : '' }}>Midtrans
                        </option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit"
                        class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Filter
                    </button>
                </div>
            </div>
        </form>

        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Siswa
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bulan
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jumlah</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Metode</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        {{-- /// TAMBAHKAN HEADER BARU UNTUK AKSI /// --}}
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($pembayaran as $p)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->siswa->nama_siswa }}</td>
                            {{-- /// KOREKSI: Tampilkan bulan langsung, bukan implode /// --}}
                            <td class="px-4 py-3 text-sm text-gray-900">
                                {{-- Cek dulu apakah $p->bulan itu array, jika ya, gabungkan. Jika tidak, tampilkan langsung. --}}
                                {{ is_array($p->bulan) ? implode(', ', $p->bulan) : $p->bulan }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->tahun }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">Rp {{ number_format($p->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->metode }}</td>
                            <td class="px-4 py-3 text-sm">
                                {{-- Logika untuk menampilkan status dengan badge warna --}}
                                @if ($p->status == 'diterima')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Lunas
                                    </span>
                                @elseif ($p->status == 'menunggu')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Menunggu
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        {{ ucfirst($p->status) }}
                                    </span>
                                @endif
                            </td>
                            {{-- /// TAMBAHKAN SEL BARU UNTUK TOMBOL AKSI /// --}}
                            <td class="px-4 py-3 text-sm text-gray-900">
                                @if ($p->status == 'menunggu' && $p->snap_token)
                                    <button
                                        class="lanjut-bayar-btn px-3 py-1 bg-indigo-600 text-white text-xs font-medium rounded-md hover:bg-indigo-700"
                                        data-snap-token="{{ $p->snap_token }}">
                                        Lanjutkan Pembayaran
                                    </button>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-sm text-gray-500">
                                Tidak ada riwayat pembayaran yang sesuai dengan filter.
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


    @push('scripts')
        {{-- 1. Impor library SweetAlert dan Snap.js --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                onSuccess: function(result) {
                                    Swal.fire('Berhasil!',
                                            'Pembayaran Anda telah berhasil.', 'success')
                                        .then(() => window.location.reload());
                                },
                                onPending: function(result) {
                                    Swal.fire('Menunggu',
                                        'Pembayaran Anda sedang diproses.', 'info');
                                },
                                onError: function(result) {
                                    Swal.fire('Gagal',
                                        'Pembayaran gagal atau token sudah kedaluwarsa.',
                                        'error');
                                },
                                onClose: function() {
                                    console.log('Popup ditutup oleh pengguna.');
                                }
                            });
                        } else {
                            Swal.fire('Error', 'Snap Token tidak ditemukan pada tombol ini.', 'error');
                        }
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>
