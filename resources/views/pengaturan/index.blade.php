<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan Aplikasi') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('pengaturan.update') }}" method="POST">
                        @csrf

                        <div 
                            x-data="{
                                amount: '{{ old('jumlah_spp', $pengaturan['jumlah_spp'] ?? 700000) }}',
                                formatAmount(value) {
                                    // Hapus semua karakter non-digit
                                    let cleanValue = value.toString().replace(/[^0-9]/g, '');
                                    // Jika kosong, anggap 0
                                    if (cleanValue === '' || cleanValue === null) cleanValue = '0';
                                    // Ubah menjadi angka, lalu format ke format Rupiah (tanpa 'Rp')
                                    return new Intl.NumberFormat('id-ID').format(parseInt(cleanValue, 10));
                                },
                                updateValue(event) {
                                    this.amount = event.target.value.replace(/[^0-9]/g, '');
                                }
                            }"
                            class="mb-4"
                        >
                            <label for="jumlah_spp_display" class="block text-sm font-medium text-gray-700">Nominal SPP (Rp)</label>
                            
                            {{-- Input yang dilihat pengguna, sekarang dengan event live formatting --}}
                            <input 
                                type="text" 
                                id="jumlah_spp_display"
                                x-on:input="event.target.value = formatAmount(event.target.value)"
                                x-init="$el.value = formatAmount(amount)"
                                @change="updateValue($event)"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" 
                                required
                            >
                            
                            {{-- Input tersembunyi yang dikirim ke server --}}
                            <input type="hidden" name="jumlah_spp" x-bind:value="amount">
                        </div>

                        <div class="mb-4">
                            <label for="midtrans_active" class="block text-sm font-medium text-gray-700">Pembayaran
                                Midtrans</label>
                            <select name="midtrans_active" id="midtrans_active"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="true" @selected(old('midtrans_active', $pengaturan['midtrans_active'] ?? 'false') == 'true')>Aktif</option>
                                <option value="false" @selected(old('midtrans_active', $pengaturan['midtrans_active'] ?? 'false') == 'false')>Non-Aktif</option>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Jika non-aktif, wali murid tidak akan melihat opsi
                                pembayaran online via Midtrans.</p>
                        </div>

                        <div class="mb-6">
                            <label for="nomor_rekening" class="block text-sm font-medium text-gray-700">Nomor Rekening
                                Sekolah</label>
                            <input type="text" name="nomor_rekening" id="nomor_rekening"
                                value="{{ old('nomor_rekening', $pengaturan['nomor_rekening'] ?? '') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                placeholder="Contoh: BCA 123456789 a/n Yayasan...">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Simpan Pengaturan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
