<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Tunggakan') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <form method="GET" class="mb-4 grid grid-cols-1 md:grid-cols-4 gap-3">

                            {{-- Filter Kelas --}}
                            <select name="kelas" class="border rounded px-2 py-1">
                                <option value="">Semua Kelas</option>
                                @foreach($kelasList as $kelas)
                                    <option value="{{ $kelas->id }}" {{ request('kelas') == $kelas->id ? 'selected' : '' }}>
                                        {{ $kelas->nama }}
                                    </option>
                                @endforeach
                            </select>
                        
                            {{-- Filter Bulan --}}
                            <select name="bulan" class="border rounded px-2 py-1">
                                <option value="">Semua Bulan</option>
                                @foreach($bulanList as $bulan)
                                    <option value="{{ $bulan }}" {{ request('bulan') == $bulan ? 'selected' : '' }}>
                                        {{ $bulan }}
                                    </option>
                                @endforeach
                            </select>
                        
                            {{-- Search Siswa --}}
                            <input type="text" 
                                name="search" 
                                value="{{ request('search') }}" 
                                placeholder="Cari nama siswa"
                                class="border rounded px-2 py-1"/>
                        
                            <button class="bg-indigo-600 text-white px-3 py-1 rounded">Filter</button>
                        </form>
                        
                        
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Wali Murid</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tunggakan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($tunggakan as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->siswa->nama_siswa }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->siswa->kelas->nama ?? '-' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->siswa->wali->name ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->bulan }} {{ $item->tahun }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp {{ number_format($item->jumlah_tunggakan, 0, ',', '.') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Logika Tombol Pintar --}}
                                            @php
                                                $reminderSent = $item->last_reminder_sent_at;
                                                $canSendReminder = is_null($reminderSent) || \Carbon\Carbon::parse($reminderSent)->addDay()->isPast();
                                            @endphp

                                            @if ($canSendReminder)
                                                <form action="{{ route('tunggakan.send-reminder', $item->id_tunggakan) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900 font-semibold">Kirim Pengingat</button>
                                                </form>
                                            @else
                                                <div class="flex items-center text-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Terkirim</span>
                                                </div>
                                                <span class="text-xs text-gray-400">
                                                    {{ \Carbon\Carbon::parse($reminderSent)->diffForHumans() }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                            Tidak ada data tunggakan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $tunggakan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>