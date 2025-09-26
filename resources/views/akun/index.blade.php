<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Akun Wali Murid') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 bg-white p-4 rounded-xl shadow-md">
                <form action="{{ route('akun.index') }}" method="GET">
                    <div>
                        <label for="search" class="sr-only">Cari</label>
                        <input type="text" name="search" id="search" placeholder="Cari Nama Wali atau Email..." value="{{ request('search') }}" class="block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Wali Murid</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. WhatsApp</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($walis as $wali)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $wali->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $wali->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $wali->nomor_wa ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                                        <form action="{{ route('akun.reset-password', $wali) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin me-reset password untuk wali murid ini?')">
                                            @csrf
                                            <button type="submit" class="text-yellow-600 hover:text-yellow-900">Reset Pass</button>
                                        </form>
                                        <a href="{{ route('akun.edit', $wali) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="px-6 py-12 text-center text-gray-500">Belum ada data akun wali murid.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($walis->hasPages())
                    <div class="p-4 border-t border-gray-200">{{ $walis->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>