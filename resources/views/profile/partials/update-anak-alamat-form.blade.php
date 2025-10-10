<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi Alamat Anak') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Kelola informasi alamat untuk setiap anak yang terhubung dengan akun Anda.') }}
        </p>
    </header>

    <div class="space-y-4">
        @forelse (Auth::user()->siswa as $anak)
            <div class="flex items-center justify-between p-4 border rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">{{ $anak->nama_siswa }}</p>
                    <p class="text-sm text-gray-500">{{ $anak->alamat ?? 'Alamat belum diisi.' }}</p>
                </div>
                <a href="{{ route('wali.alamat.edit', $anak) }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800">
                    Ubah Alamat
                </a>
            </div>
        @empty
            <p class="text-sm text-gray-500">Tidak ada data anak yang terhubung dengan akun ini.</p>
        @endforelse
    </div>
</section>