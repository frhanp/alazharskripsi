<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Upload Ulang Bukti Pembayaran
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
            <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                <p class="font-semibold text-red-800">Pembayaran Ditolak</p>
                <p class="text-sm text-red-700 mt-1">Alasan: {{ $pembayaran->catatan_verifikasi }}</p>
            </div>

            <div class="mb-4">
                <p><span class="font-semibold">Siswa:</span> {{ $pembayaran->siswa->nama_siswa }}</p>
                <p><span class="font-semibold">Pembayaran:</span> {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} {{ $pembayaran->tahun }}</p>
                <p><span class="font-semibold">Jumlah:</span> Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</p>
            </div>

            <form action="{{ route('pembayaran.resubmit.handle', $pembayaran) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <x-input-label for="bukti_transfer" value="Upload Bukti Transfer Baru" />
                    <input type="file" name="bukti_transfer" id="bukti_transfer" class="block mt-1 w-full" required>
                    <x-input-error :messages="$errors->get('bukti_transfer')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end space-x-4">
                    <a href="{{ route('riwayat.index') }}" class="text-gray-600 hover:underline">Batal</a>
                    <x-primary-button>Upload Ulang</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>