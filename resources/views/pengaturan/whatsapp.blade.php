<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Status & Pengelolaan WhatsApp') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8" x-data="whatsappManager()">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md text-center">

                <h3 class="text-lg font-semibold text-gray-800">Status Koneksi</h3>
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

                {{-- ======================================================= --}}
                {{-- PERUBAHAN DI SINI: Menggunakan <canvas> --}}
                {{-- ======================================================= --}}
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
    {{-- ======================================================= --}}
    {{-- PERUBAHAN DI SINI: Menggunakan library qrcode.js --}}
    {{-- ======================================================= --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode/1.5.1/qrcode.min.js"></script>
    <script>
        function whatsappManager() {
            return {
                status: 'connecting',
                statusText: 'Menghubungkan...',
                pollingInterval: null,
                lastQrData: '', // Untuk mencegah QR digambar ulang jika datanya sama

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

                // =======================================================
                // PERUBAHAN DI SINI: Logika membuat QR Code
                // =======================================================
                generateQrCode(qrData) {
                    // Hanya gambar ulang jika data QR-nya baru
                    if (qrData && this.lastQrData !== qrData) {
                        this.lastQrData = qrData;
                        const canvas = document.getElementById('qrcode-canvas');
                        if (canvas) {
                            QRCode.toCanvas(canvas, qrData, function (error) {
                                if (error) console.error(error);
                                console.log('QR Code berhasil digambar!');
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
                            this.lastQrData = ''; // Reset data QR
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