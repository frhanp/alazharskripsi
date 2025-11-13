<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Upload Bukti Transfer') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
            @if (session('success'))
                <div class="mb-4 text-green-600">{{ session('success') }}</div>
            @endif
            @if (!empty($nomorRekening))
            <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                <p class="text-sm font-medium text-blue-800">Silakan lakukan transfer ke nomor rekening berikut:</p>
                <p class="text-lg font-bold text-blue-900 mt-1">{{ $nomorRekening }}</p>
            </div>
            @endif

            {{-- ======================================================= --}}
            {{-- PATOKAN: resources/views/pembayaran/upload_transfer.blade.php (x-data) --}}
            {{-- AWAL PERUBAHAN --}}
            {{-- ======================================================= --}}
            <div x-data="{
                months: [
                    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                ],
                selectedMonths: [],
                sppTk: {{ $sppTk ?? 0 }},
                sppSd: {{ $sppSd ?? 0 }},
                
                // Ini Kuncinya: Tentukan jenjang default saat halaman dimuat
                currentJenjang: '{{ $siswa->count() === 1 ? ($siswa->first()->kelas ? $siswa->first()->kelas->getJenjang() : 'SD') : 'SD' }}', 

                get jumlahSPP() {
                    return this.currentJenjang === 'TK' ? this.sppTk : this.sppSd;
                },
                get totalBayar() {
                    return this.selectedMonths.length * this.jumlahSPP;
                },
                get formattedTotalBayar() {
                    return new Intl.NumberFormat('id-ID').format(this.totalBayar);
                },
                get formattedSppPerBulan() {
                    return new Intl.NumberFormat('id-ID').format(this.jumlahSPP);
                },

                // Fungsi ini akan dipanggil oleh @change di <select>
                updateJenjang(event) {
                    let selectedOption = event.target.options[event.target.selectedIndex];
                    this.currentJenjang = selectedOption.dataset.jenjang || 'SD';
                }
            }">
            {{-- ======================================================= --}}
            {{-- AKHIR PERUBAHAN --}}
            {{-- ======================================================= --}}

                <form action="{{ route('pembayaran.upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
        
                    <div class="mb-4">
                        <x-input-label for="id_siswa" value="Nama Siswa" />
                    
                        @if($siswa->count() === 1)
                            {{-- Kalau hanya ada 1 siswa --}}
                            <input type="hidden" name="id_siswa" value="{{ $siswa->first()->id_siswa }}">
                            <p class="mt-1 block w-full rounded-md bg-gray-100 px-3 py-2">
                                {{ $siswa->first()->nama_siswa }}
                            </p>
                        @else
                            {{-- Kalau ada lebih dari 1 siswa --}}
                            {{-- ======================================================= --}}
                            {{-- PATOKAN: resources/views/pembayaran/upload_transfer.blade.php (select) --}}
                            {{-- AWAL PERUBAHAN --}}
                            {{-- ======================================================= --}}
                            <select name="id_siswa" id="id_siswa"
                                @change="updateJenjang($event)"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="" data-jenjang="SD">Pilih Siswa</option>
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->id_siswa }}" data-jenjang="{{ $item->kelas ? $item->kelas->getJenjang() : 'SD' }}">
                                        {{ $item->nama_siswa }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- ======================================================= --}}
                            {{-- AKHIR PERUBAHAN --}}
                            {{-- ======================================================= --}}
                        @endif
                    
                        <x-input-error :messages="$errors->get('id_siswa')" class="mt-2" />
                    </div>
                    

                    <div>
                        <div class="mb-4">
                            <x-input-label for="bulan" :value="__('Bulan Pembayaran')" />
                            <div class="flex flex-wrap gap-2 mb-2">
                                <template x-for="month in selectedMonths" :key="month">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                        <span x-text="month"></span>
                                        <button @click.prevent="selectedMonths = selectedMonths.filter(m => m !== month)"
                                            class="ml-1 text-indigo-500 hover:text-indigo-700">
                                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </template>
                            </div>
        
                            <select x-ref="monthSelect"
                                @change="if ($event.target.value && !selectedMonths.includes($event.target.value)) {
                                    selectedMonths.push($event.target.value);
                                    $event.target.value = '';
                                }"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="">Pilih Bulan</option>
                                <template x-for="month in months.filter(m => !selectedMonths.includes(m))" :key="month">
                                    <option x-text="month" :value="month"></option>
                                </template>
                            </select>
        
                            <template x-for="month in selectedMonths" :key="month">
                                <input type="hidden" name="bulan[]" :value="month" />
                            </template>
        
                            <x-input-error :messages="$errors->get('bulan')" class="mt-2" />
                        </div>
        
                        <div class="mb-4">
                            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah SPP
                                (Rp)</label>
                            <input type="hidden" name="jumlah" x-bind:value="totalBayar" />
                            <input type="text" id="jumlah_display" x-bind:value="formattedTotalBayar"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly />
                            {{-- ======================================================= --}}
                            {{-- PATOKAN: resources/views/pembayaran/upload_transfer.blade.php (helper) --}}
                            {{-- AWAL PERUBAHAN --}}
                            {{-- ======================================================= --}}
                            <small class="text-gray-500">Jumlah otomatis: <span x-text="selectedMonths.length"></span> bulan × Rp <span x-text="formattedSppPerBulan"></span></small>
                            {{-- ======================================================= --}}
                            {{-- AKHIR PERUBAHAN --}}
                            {{-- ======================================================= --}}
                        </div>
                    </div>
        
                    <div class="mb-4">
                        <x-input-label for="tahun" value="Tahun" />
                        <select name="tahun" id="tahun"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            @for ($year = now()->year; $year >= 2020; $year--)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
        
                    <div class="mb-4">
                        <x-input-label for="bukti_transfer" value="Upload Bukti Transfer" />
                        <input type="file" name="bukti_transfer" id="bukti_transfer" class="block mt-1 w-full" required>
                        <x-input-error :messages="$errors->get('bukti_transfer')" class="mt-2" />
                    </div>
        
                    <div class="mb-4">
                        <x-input-label for="catatan" value="Catatan (Opsional)" />
                        <textarea name="catatan" id="catatan" class="block w-full mt-1 rounded-md"></textarea>
                    </div>
        
                    <x-primary-button>Upload</x-primary-button>
                </form>
            </div> {{-- Penutup x-data --}}
        </div>
    </div>
</x-app-layout>