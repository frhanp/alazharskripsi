<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Eksekutif') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Total Pemasukan SPP</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">Rp {{ number_format($pemasukanTotal, 0, ',', '.') }}
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Total Tunggakan</p>
                    <p class="text-3xl font-bold text-red-600 mt-1">Rp {{ number_format($totalTunggakan, 0, ',', '.') }}
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Siswa Aktif</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $siswaAktif }}</p>
                </div>
                {{-- Kartu Guru diganti dengan Wali Murid --}}
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Wali Murid Aktif</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $waliMuridAktif }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Grafik Pemasukan (12 Bulan Terakhir)</h3>
                    <div id="incomeChart"></div>
                </div>

                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="font-semibold text-lg text-gray-800 mb-4">Ringkasan Status Pembayaran</h3>
                        <div id="statusChart"></div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="font-semibold text-lg text-gray-800 mb-4">Preview Pemetaan Siswa</h3>
                        <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden relative">

                            <a href="{{ route('pemetaan.index') }}"
                                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 text-white font-bold text-lg opacity-0 hover:opacity-100 transition-opacity">
                                Buka Peta Interaktif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            // Grafik Pemasukan
            var incomeChartOptions = {
                series: [{
                    name: 'Pemasukan',
                    data: @json($chartData)
                }],
                chart: {
                    type: 'area',
                    height: 350,
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: @json($chartLabels)
                },
                yaxis: {
                    labels: {
                        formatter: (val) => (val / 1000000).toFixed(1) + ' Jt'
                    }
                },
                tooltip: {
                    y: {
                        formatter: (val) => "Rp " + new Intl.NumberFormat('id-ID').format(val)
                    }
                },
            };
            var incomeChart = new ApexCharts(document.querySelector("#incomeChart"), incomeChartOptions);
            incomeChart.render();

            // Grafik Status
            var statusChartOptions = {
                series: @json($statusPembayaran->values()),
                chart: {
                    type: 'donut',
                    height: 350
                },
                labels: @json($statusPembayaran->keys()->map(fn($key) => ucfirst($key))),
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };
            var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusChartOptions);
            statusChart.render();
        </script>
    @endpush
</x-app-layout>
