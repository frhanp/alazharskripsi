<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Data Siswa') }}
            </h2>
            @if(auth()->user()->role === 'bendahara')
                <a href="{{ route('siswa.create') }}" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition-colors">
                    Tambah Siswa Baru
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 bg-white p-4 rounded-xl shadow-md">
                <form action="{{ route('siswa.index') }}" method="GET">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-2">
                            <label for="search" class="sr-only">Cari</label>
                            <input type="text" name="search" id="search" placeholder="Cari Nama Siswa atau NIS..." value="{{ request('search') }}" class="block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="kelas" class="sr-only">Kelas</label>
                            <select name="kelas" id="kelas" class="block w-full border-gray-300 rounded-md shadow-sm" onchange="this.form.submit()">
                                <option value="">Semua Kelas</option>
                                @foreach($kelasOptions as $kelas)
                                    <option value="{{ $kelas }}" @selected(request('kelas') == $kelas)>{{ $kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NIS</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                                @if(auth()->user()->role === 'bendahara')
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($siswas as $siswa)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $siswa->nama_siswa }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $siswa->nis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $siswa->kelas }}</td>
                                    @if(auth()->user()->role === 'bendahara')
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                                            <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ auth()->user()->role === 'bendahara' ? '4' : '3' }}" class="px-6 py-12 text-center text-sm text-gray-500">
                                        Belum ada data siswa yang ditambahkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($siswas->hasPages())
                    <div class="p-4 border-t border-gray-200">
                        {{ $siswas->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>