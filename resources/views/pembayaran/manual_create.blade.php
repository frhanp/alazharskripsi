<x-app-layout>
    {{-- 1. Tambahkan CSS Tom Select di header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Manual Pembayaran') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('pembayaran.manual.store') }}" method="POST">
                    @csrf
    
                    {{-- Nama Siswa --}}
                    <div class="mb-4">
                        <label for="id_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                        {{-- 2. Hapus class bawaan dan berikan ID baru untuk Tom Select --}}
                        <select name="id_siswa" id="select-siswa" placeholder="Ketik untuk mencari siswa...">
                            @foreach ($siswa as $item)
                                <option value="{{ $item->id_siswa }}">{{ $item->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    {{-- Bulan (multi-select) dan Jumlah dalam satu x-data --}}
                    <div x-data="{
                        months: [
                            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                        ],
                        selectedMonths: [],
                        jumlahSPP: {{ $defaultJumlahSPP ?? 0 }},
                        get totalBayar() {
                            return this.selectedMonths.length * this.jumlahSPP;
                        }
                    }" x-init="console.log('Alpine initialized, jumlahSPP:', jumlahSPP)">
                        {{-- Bulan --}}
                        <div class="mb-4">
                            <x-input-label for="bulan" :value="__('Bulan Pembayaran')" />
                            <div>
                                <div class="flex flex-wrap gap-2 mb-2">
                                    <template x-for="month in selectedMonths" :key="month">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                            <span x-text="month"></span>
                                            <button
                                                @click.prevent="selectedMonths = selectedMonths.filter(m => m !== month)"
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
                                    <template x-for="month in months.filter(m => !selectedMonths.includes(m))"
                                        :key="month">
                                        <option x-text="month" :value="month"></option>
                                    </template>
                                </select>
    
                                <template x-for="month in selectedMonths" :key="month">
                                    <input type="hidden" name="bulan[]" :value="month" />
                                </template>
    
                                <x-input-error :messages="$errors->get('bulan')" class="mt-2" />
                            </div>
                        </div>
    
                        {{-- Jumlah --}}
                        <div class="mb-4">
                            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah SPP</label>
                            <input type="number" name="jumlah" id="jumlah" x-bind:value="totalBayar"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly />
                            <small class="text-gray-500">Jumlah akan dihitung otomatis: jumlah bulan ×
                                {{ number_format($defaultJumlahSPP ?? 0, 0, ',', '.') }}</small>
                        </div>
                    </div>
    
                    {{-- Tahun --}}
                    <div class="mb-4">
                        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select name="tahun" id="tahun"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            @for ($year = now()->year - 2; $year <= now()->year + 1; $year++)
                                <option value="{{ $year }}" @selected($year == now()->year)>
                                    {{ $year }}
                                </option>
                            @endfor
                        </select>
                    </div>

                    {{-- Catatan --}}
                    <div class="mb-4">
                        <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan (Opsional)</label>
                        <textarea name="catatan" id="catatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
    
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan Pembayaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- 3. Tambahkan script Tom Select di akhir --}}
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                new TomSelect('#select-siswa', {
                    create: false,
                    sortField: {
                        field: "text",
                        direction: "asc"
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>