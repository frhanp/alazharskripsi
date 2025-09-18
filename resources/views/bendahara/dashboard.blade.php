<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Bendahara') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Pemasukan Bulan Ini</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">Rp {{ number_format($pemasukanBulanIni, 0, ',', '.') }}</p>
                    </div>
                    <div class="bg-green-100 text-green-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" />
                        </svg>
                    </div>
                </div>
                <a href="{{ route('pembayaran.verifikasi') }}" class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between transition-all duration-300 hover:shadow-lg hover:border-yellow-500 border border-transparent">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Menunggu Verifikasi</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $menungguVerifikasi }} Transaksi</p>
                    </div>
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </a>
                <div class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Tunggakan</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">Rp {{ number_format($totalTunggakan, 0, ',', '.') }}</p>
                    </div>
                    <div class="bg-red-100 text-red-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Siswa Aktif</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $siswaAktif }}</p>
                    </div>
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.084-1.284-.24-1.88M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.084-1.284.24-1.88M12 12c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md mb-8">
                <h3 class="font-semibold text-lg text-gray-800 mb-4">Grafik Pemasukan (6 Bulan Terakhir)</h3>
                <div id="incomeChart"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Perlu Tindakan Segera</h3>
                    <div class="space-y-4">
                        @forelse ($perluTindakan as $pembayaran)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $pembayaran->siswa->nama_siswa }}</p>
                                    <p class="text-sm text-gray-600">
                                        {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} {{ $pembayaran->tahun }} - <span class="font-semibold">Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</span>
                                    </p>
                                </div>
                                <a href="{{ route('pembayaran.verifikasi') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 transition-colors">
                                    Verifikasi
                                </a>
                            </div>
                        @empty
                            <div class="text-center py-4 border-2 border-dashed rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <p class="mt-2 text-sm text-gray-500">Kerja bagus! Tidak ada pembayaran yang perlu diverifikasi.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Aktivitas Terbaru (Lunas)</h3>
                    <div class="space-y-4">
                        @forelse ($aktivitasTerbaru as $pembayaran)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $pembayaran->siswa->nama_siswa }}</p>
                                    <p class="text-sm text-gray-600">
                                        {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} {{ $pembayaran->tahun }} - <span class="font-semibold text-green-700">Lunas</span>
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($pembayaran->tanggal_verifikasi)->diffForHumans() }}</span>
                            </div>
                        @empty
                             <div class="text-center py-10 border-2 border-dashed rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                <p class="mt-2 text-sm text-gray-500">Belum ada aktivitas pembayaran yang diterima.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var options = {
                    series: [{
                        name: 'Pemasukan',
                        data: @json($data)
                    }],
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            borderRadius: 4,
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: @json($labels),
                    },
                    yaxis: {
                        title: {
                            text: 'Rp (Rupiah)'
                        },
                        labels: {
                            formatter: function (val) {
                                return (val / 1000000).toFixed(1) + ' Jt';
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return "Rp " + new Intl.NumberFormat('id-ID').format(val)
                            }
                        }
                    },
                    grid: {
                        borderColor: '#f1f1f1',
                    }
                };

                var chart = new ApexCharts(document.querySelector("#incomeChart"), options);
                chart.render();
            });
        </script>
    @endpush
</x-app-layout>