<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-gray-900">
            Pembayaran Onlines
        </h2>
    </x-slot>

    <form id="midtrans-form" action="{{ route('pembayaran.midtrans', $siswa->id_siswa) }}" method="POST">
        @csrf
        <div class="py-8 max-w-2xl mx-auto" x-data="{
            months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            selectedMonths: [],
            jumlahSPP: {{ $jumlahSPP ?? 0 }},
            get totalBayar() {
                return this.selectedMonths.length * this.jumlahSPP;
            }
        }" x-init="console.log('Jumlah SPP per bulan:', jumlahSPP)">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition-all duration-300">
                <div class="space-y-4">
                    <p class="text-lg text-gray-800">Nama Siswa: <span
                            class="font-medium">{{ $siswa->nama_siswa }}</span></p>
                    <p class="text-lg text-gray-800">SPP per bulan: <span class="font-medium">Rp
                            {{ number_format($jumlahSPP ?? 0, 0, ',', '.') }}</span></p>
                </div>

                <!-- Pilih bulan -->
                <div class="mt-6">
                    <label for="bulan" class="block text-sm font-semibold text-gray-700 mb-2">Bulan
                        Pembayaran</label>

                    <!-- Tag bulan yang sudah dipilih -->
                    <div class="flex flex-wrap gap-2 mb-3">
                        <template x-for="month in selectedMonths" :key="month">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 transition-all duration-200 hover:bg-indigo-200">
                                <span x-text="month"></span>
                                <button @click.prevent="selectedMonths = selectedMonths.filter(m => m !== month)"
                                    class="ml-2 text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </template>
                    </div>

                    <!-- Dropdown pilih bulan -->
                    <select x-ref="monthSelect"
                        @change="if ($event.target.value && !selectedMonths.includes($event.target.value)) {
                            selectedMonths.push($event.target.value);
                            $event.target.value = '';
                        }"
                        class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 bg-gray-50 text-gray-800">
                        <option value="">Pilih Bulan</option>
                        <template x-for="month in months.filter(m => !selectedMonths.includes(m))"
                            :key="month">
                            <option :value="month" x-text="month"></option>
                        </template>
                    </select>

                    <!-- Hidden input supaya data bulan terkirim ke server -->
                    <template x-for="month in selectedMonths" :key="month">
                        <input type="hidden" name="bulan[]" :value="month" />
                    </template>
                </div>

                <!-- Pilih tahun -->
                <div class="mt-6">
                    <label for="tahun" class="block text-sm font-semibold text-gray-700 mb-2">Tahun</label>
                    <select name="tahun" id="tahun" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 bg-gray-50 text-gray-800">
                        @for ($i = now()->year; $i >= now()->year - 5; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <!-- Total bayar -->
                <div class="mt-6 text-lg font-semibold text-indigo-800">
                    Total Bayar: <span x-text="'Rp ' + totalBayar.toLocaleString('id-ID')"
                        class="text-indigo-600"></span>
                </div>

                <!-- Form bayar -->
                <div class="mt-8">
                    <input type="hidden" name="jumlah" :value="totalBayar" />
                    <button type="submit" id="pay-button"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 shadow-md hover:shadow-lg">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </form>

    {{-- Ganti seluruh blok <script> di midtrans.blade.php dengan ini --}}

{{-- 1. Impor library SweetAlert dan Snap.js --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>

<script>
    const midtransForm = document.getElementById('midtrans-form');
    midtransForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(midtransForm);
        const formActionUrl = midtransForm.action;

        fetch(formActionUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": formData.get('_token')
            },
            body: JSON.stringify({
                bulan: formData.getAll('bulan[]'),
                tahun: formData.get('tahun'),
                jumlah: formData.get('jumlah')
            })
        })
        .then(res => {
            if (!res.ok) {
                // Jika server mengembalikan error (seperti 422 untuk duplikat),
                // kita coba baca pesannya sebagai JSON dan lemparkan sebagai error
                return res.json().then(errData => { throw errData; });
            }
            return res.json();
        })
        .then(data => {
            if (data.snapToken) {
                snap.pay(data.snapToken, {
                    onSuccess: function(result) {
                        Swal.fire('Berhasil!', 'Pembayaran Anda telah berhasil.', 'success')
                            .then(() => window.location.href = "{{ route('riwayat.index') }}");
                    },
                    onPending: function(result) {
                        Swal.fire('Menunggu', 'Pembayaran Anda sedang diproses.', 'info')
                            .then(() => window.location.href = "{{ route('riwayat.index') }}");
                    },
                    onError: function(result) {
                        Swal.fire('Gagal', 'Pembayaran gagal diproses.', 'error');
                    },
                    onClose: function() {
                        console.log('Anda menutup popup pembayaran.');
                        window.location.href = "{{ route('riwayat.index') }}";
                    }
                });
            } else {
                 // Ini terjadi jika ada masalah tak terduga tapi respons server OK
                 Swal.fire('Error', 'Gagal mendapatkan token pembayaran.', 'error');
            }
        })
        .catch(error => {
            // =======================================================
            // INI BAGIAN UTAMA UNTUK MENANGANI ERROR DARI SERVER
            // =======================================================
            console.error('Error:', error);
            Swal.fire({
                title: 'Terjadi Kesalahan',
                // Tampilkan pesan error dari controller (misal: "Pembayaran bulan... sudah ada")
                // atau tampilkan pesan default jika tidak ada
                text: error.message || 'Tidak bisa memproses permintaan. Coba lagi nanti.',
                icon: 'error'
            });
        });
    });
</script>
</x-app-layout>
