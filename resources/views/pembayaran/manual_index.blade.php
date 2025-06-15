<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Daftar Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-5xl mx-auto">
        @if(session('success'))
            <div class="mb-4 text-green-600 bg-green-100 p-3 rounded-md">{{ session('success') }}</div>
        @endif

        <!-- Filter Form -->
        <div x-data="{ submitForm: function() { console.log('Submitting form'); document.getElementById('filterForm').submit(); } }">
            <form id="filterForm" action="{{ route('pembayaran.manual.index') }}" method="GET" class="mb-6 p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label for="siswa" class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                        <select name="siswa" id="siswa" @change="submitForm()" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
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
                               @input.debounce.500ms="submitForm()"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                    </div>

                    <div>
                        <label for="metode" class="block text-sm font-medium text-gray-700 mb-1">Metode</label>
                        <select name="metode" id="metode" @change="submitForm()" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">-- Semua --</option>
                            <option value="langsung" {{ request('metode') == 'langsung' ? 'selected' : '' }}>Langsung</option>
                            <option value="transfer" {{ request('metode') == 'transfer' ? 'selected' : '' }}>Transfer</option>
                            <option value="midtrans" {{ request('metode') == 'midtrans' ? 'selected' : '' }}>Midtrans</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabel Pembayaran -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            @if($pembayaranManual->isEmpty())
                <p class="text-gray-500 text-center py-4">Belum ada data pembayaran.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Siswa</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bulan</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($pembayaranManual as $pembayaran)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $pembayaran->siswa->nama_siswa ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $pembayaran->tahun }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 capitalize">
                                        {{ $pembayaran->status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $pembayaranManual->appends(request()->query())->links() }}
        </div>
    </div>
</x-app-layout>