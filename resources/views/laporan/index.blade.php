<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                <form action="{{ route('laporan.index') }}" method="GET">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Tanggal Awal</label>
                            <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700">Tanggal Akhir</label>
                            <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="id_siswa" class="block text-sm font-medium text-gray-700">Siswa</label>
                            <select name="id_siswa" id="id_siswa" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Siswa</option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id_siswa }}" @selected(request('id_siswa') == $s->id_siswa)>{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Status</option>
                                <option value="diterima" @selected(request('status') == 'diterima')>Diterima</option>
                                <option value="menunggu" @selected(request('status') == 'menunggu')>Menunggu</option>
                                <option value="ditolak" @selected(request('status') == 'ditolak')>Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-end space-x-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Filter</button>
                        <a href="{{ route('laporan.index') }}" class="text-gray-600 hover:underline">Reset</a>
                    </div>
                </form>
            </div>

            <div class="flex justify-end space-x-2 mb-4">
                <a href="{{ route('laporan.export.pdf', request()->query()) }}" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Ekspor PDF</a>
                <a href="{{ route('laporan.export.excel', request()->query()) }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Ekspor Excel</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembayaran</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Metode</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tgl. Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($laporan as $item)
                                <tr>
                                    <td class="px-6 py-4">{{ $item->siswa->nama_siswa }}</td>
                                    <td class="px-6 py-4">{{ is_array($item->bulan) ? implode(', ', $item->bulan) : $item->bulan }} {{ $item->tahun }}</td>
                                    <td class="px-6 py-4">Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4">{{ ucfirst($item->metode) }}</td>
                                    <td class="px-6 py-4">{{ ucfirst($item->status) }}</td>
                                    <td class="px-6 py-4">{{ $item->tanggal_verifikasi ? \Carbon\Carbon::parse($item->tanggal_verifikasi)->format('d-m-Y') : '-' }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="text-center py-4">Tidak ada data yang cocok dengan filter.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-4">
                    {{ $laporan->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>