<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-8">
            {{-- KARTU PENGATURAN APLIKASI --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Pengaturan Aplikasi</h3>
                    <form action="{{ route('pengaturan.update') }}" method="POST">
                        @csrf
                        
                        {{-- Nominal SPP TK --}}
                        <div x-data="{
                            amount: '{{ old('jumlah_spp_tk', $pengaturan['jumlah_spp_tk'] ?? 0) }}',
                            formatAmount(value) {
                                let cleanValue = value.toString().replace(/[^0-9]/g, '');
                                if (cleanValue === '' || cleanValue === null) cleanValue = '0';
                                return new Intl.NumberFormat('id-ID').format(parseInt(cleanValue, 10));
                            },
                            updateValue(event) {
                                this.amount = event.target.value.replace(/[^0-9]/g, '');
                            }
                        }" class="mb-4">
                        <label for="jumlah_spp_tk_display" class="block text-sm font-medium text-gray-700">Nominal SPP TK (Rp)</label>
                        <input type="text" id="jumlah_spp_tk_display"
                            x-on:input="event.target.value = formatAmount(event.target.value)"
                            x-init="$el.value = formatAmount(amount)"
                            @change="updateValue($event)"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        <input type="hidden" name="jumlah_spp_tk" x-bind:value="amount">
                    </div>

                    {{-- Nominal SPP SD --}}
                    <div x-data="{
                            amount: '{{ old('jumlah_spp_sd', $pengaturan['jumlah_spp_sd'] ?? 0) }}',
                            formatAmount(value) {
                                let cleanValue = value.toString().replace(/[^0-9]/g, '');
                                if (cleanValue === '' || cleanValue === null) cleanValue = '0';
                                return new Intl.NumberFormat('id-ID').format(parseInt(cleanValue, 10));
                            },
                            updateValue(event) {
                                this.amount = event.target.value.replace(/[^0-9]/g, '');
                            }
                        }" class="mb-4">
                        <label for="jumlah_spp_sd_display" class="block text-sm font-medium text-gray-700">Nominal SPP SD (Rp)</label>
                        <input type="text" id="jumlah_spp_sd_display"
                            x-on:input="event.target.value = formatAmount(event.target.value)"
                            x-init="$el.value = formatAmount(amount)"
                            @change="updateValue($event)"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        <input type="hidden" name="jumlah_spp_sd" x-bind:value="amount">
                    </div>
                        <div class="mb-4">
                            <label for="midtrans_active" class="block text-sm font-medium text-gray-700">Pembayaran Midtrans</label>
                            <select name="midtrans_active" id="midtrans_active" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="true" @selected(old('midtrans_active', $pengaturan['midtrans_active'] ?? 'false') == 'true')>Aktif</option>
                                <option value="false" @selected(old('midtrans_active', $pengaturan['midtrans_active'] ?? 'false') == 'false')>Non-Aktif</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="nomor_rekening" class="block text-sm font-medium text-gray-700">Nomor Rekening Sekolah</label>
                            <input type="text" name="nomor_rekening" id="nomor_rekening"
                                value="{{ old('nomor_rekening', $pengaturan['nomor_rekening'] ?? '') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                placeholder="Contoh: BCA 123456789 a/n Yayasan...">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Simpan Pengaturan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ======================================================= --}}
            {{-- KARTU BARU: PENGATURAN WHATSAPP --}}
            {{-- ======================================================= --}}
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md text-center" x-data="whatsappManager()">
                <h3 class="text-lg font-semibold text-gray-800">Status Koneksi WhatsApp</h3>
                <div class="mt-2 mb-6">
                    <span x-text="statusText" class="px-4 py-1 text-sm font-semibold rounded-full"
                        :class="{
                            'bg-yellow-100 text-yellow-800': status === 'connecting',
                            'bg-green-100 text-green-800': status === 'connected',
                            'bg-red-100 text-red-800': status === 'disconnected',
                            'bg-blue-100 text-blue-800': status === 'scan'
                        }">
                    </span>
                </div>

                <div x-show="status === 'scan'" class="mx-auto flex justify-center items-center h-64 w-64 bg-white rounded-lg p-4 border">
                    <canvas id="qrcode-canvas"></canvas>
                </div>
                <div x-show="status === 'connected'">
                    <p class="text-gray-600">Koneksi WhatsApp sudah terhubung dan siap digunakan.</p>
                </div>
                <div x-show="status === 'disconnected' || status === 'connecting'">
                    <p class="text-gray-600" x-text="statusText"></p>
                </div>

                <div class="mt-8 border-t pt-6">
                    <button @click="logout()" :disabled="status !== 'connected'"
                        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 disabled:bg-red-300 disabled:cursor-not-allowed">
                        Putuskan Koneksi & Ganti Nomor
                    </button>
                    <p class="text-xs text-gray-500 mt-2">Gunakan ini jika Anda ingin menghubungkan ke nomor WhatsApp yang berbeda.</p>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    {{-- Script untuk QR Code --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode/1.5.1/qrcode.min.js"></script>
    <script>
        function whatsappManager() {
            return {
                status: 'connecting',
                statusText: 'Menghubungkan...',
                pollingInterval: null,
                lastQrData: '',
                init() {
                    this.checkStatus();
                    this.pollingInterval = setInterval(() => this.checkStatus(), 3000);
                },
                checkStatus() {
                    fetch('/api/whatsapp/status')
                        .then(res => res.json())
                        .then(data => {
                            this.statusText = data.message;
                            if (data.connected) {
                                this.status = 'connected';
                                if(this.pollingInterval) clearInterval(this.pollingInterval);
                            } else if (data.qr) {
                                this.status = 'scan';
                                this.generateQrCode(data.qr);
                            } else {
                                this.status = 'connecting';
                            }
                        })
                        .catch(err => {
                            this.status = 'disconnected';
                            this.statusText = 'Layanan WhatsApp tidak aktif.';
                            if(this.pollingInterval) clearInterval(this.pollingInterval);
                        });
                },
                generateQrCode(qrData) {
                    if (qrData && this.lastQrData !== qrData) {
                        this.lastQrData = qrData;
                        const canvas = document.getElementById('qrcode-canvas');
                        if (canvas) {
                            QRCode.toCanvas(canvas, qrData, function (error) {
                                if (error) console.error(error);
                            });
                        }
                    }
                },
                logout() {
                    if (confirm('Apakah Anda yakin ingin memutuskan koneksi? Anda perlu memindai QR Code baru setelah ini.')) {
                        fetch('/api/whatsapp/logout', {
                            method: 'POST',
                            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                        })
                        .then(res => res.json())
                        .then(data => {
                            Swal.fire('Berhasil', data.message || 'Memuat ulang koneksi...', 'success');
                            this.status = 'connecting';
                            this.statusText = 'Menghubungkan...';
                            this.lastQrData = '';
                            if(this.pollingInterval) clearInterval(this.pollingInterval);
                            this.pollingInterval = setInterval(() => this.checkStatus(), 3000);
                        }).catch(err => {
                            Swal.fire('Gagal', 'Tidak bisa memutuskan koneksi.', 'error');
                        });
                    }
                }
            }
        }
    </script>
    @endpush
</x-app-layout>