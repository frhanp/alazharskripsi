<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Riwayat Pembayaran') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <!-- Filter Form -->
        <form action="{{ route('riwayat.index') }}" method="GET" class="mb-6 p-4 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div>
                    <label for="siswa" class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                    <select name="siswa" id="siswa" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option value="">-- Semua --</option>
                        @foreach($siswa as $s)
                            <option value="{{ $s->id_siswa }}" {{ request('siswa') == $s->id_siswa ? 'selected' : '' }}>
                                {{ $s->nama_siswa }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                    <input name="tahun" id="tahun" type="number" value="{{ request('tahun') }}" placeholder="2025" 
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                </div>

                <div>
                    <label for="metode" class="block text-sm font-medium text-gray-700 mb-1">Metode</label>
                    <select name="metode" id="metode" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option value="">-- Semua --</option>
                        <option value="manual" {{ request('metode') == 'manual' ? 'selected' : '' }}>Manual</option>
                        <option value="semi_manual" {{ request('metode') == 'semi_manual' ? 'selected' : '' }}>Semi Manual</option>
                        <option value="midtrans" {{ request('metode') == 'midtrans' ? 'selected' : '' }}>Midtrans</option>
                    </select>
                </div>

                <div class="flex items-end">
                    <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Filter
                    </button>
                </div>
            </div>
        </form>

        <!-- Tabel Riwayat -->
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Siswa</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bulan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Metode</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($pembayaran as $p)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->siswa->nama_siswa }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ implode(',', $p->bulan) }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->tahun }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->metode }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ number_format($p->jumlah, 0, ',', '.') }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->status }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-sm text-gray-500">
                                Tidak ada riwayat pembayaran.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $pembayaran->links() }}
        </div>
    </div>
</x-app-layout>