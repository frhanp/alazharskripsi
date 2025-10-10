<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Siswa: ') }} {{ $siswa->nama_siswa }}
        </h2>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                
                {{-- FORM UTAMA UNTUK UPDATE DATA SISWA --}}
                <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST" id="edit-siswa-form">
                    @csrf
                    @method('PUT')
                    
                    {{-- Informasi Siswa --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Siswa</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                            <input type="text" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                            <input type="text" name="nis" id="nis" value="{{ old('nis', $siswa->nis) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div class="md:col-span-2">
                             <label for="id_kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                            <select name="id_kelas" id="id_kelas" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach($kelas as $k)
                                    <option value="{{ $k->id }}" @selected(old('id_kelas', $siswa->id_kelas) == $k->id)>{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Informasi Wali Murid --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mt-8 mb-4">Informasi Akun Wali Murid</h3>
                    @if ($siswa->wali)
                        {{-- Jika akun wali sudah ada, tampilkan dan berikan opsi ganti --}}
                        <div>
                            <label for="id_wali" class="block text-sm font-medium text-gray-700">Wali Murid (Induk)</label>
                            <select name="id_wali" id="id_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                @foreach ($walis as $wali)
                                    <option value="{{ $wali->id }}" @selected(old('id_wali', $siswa->id_wali) == $wali->id)>{{ $wali->name }} ({{ $wali->email }})</option>
                                @endforeach
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Siswa ini sudah terhubung. Anda bisa mengubah tautan wali murid jika diperlukan.</p>
                        </div>
                    @else
                        {{-- Jika akun wali belum ada, berikan opsi untuk menautkan --}}
                         <p class="text-sm text-gray-500 mb-4">Siswa ini belum memiliki akun wali murid. Silakan pilih dari daftar untuk menautkannya.</p>
                         <div>
                            <label for="id_wali" class="block text-sm font-medium text-gray-700">Pilih Akun Wali</label>
                             <select name="id_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="">- Pilih Wali Murid -</option>
                                @foreach ($walis as $wali)
                                    <option value="{{ $wali->id }}">{{ $wali->name }} ({{ $wali->email }})</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    
                    {{-- Informasi Lokasi --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mt-8 mb-4">Informasi Lokasi</h3>
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="space-y-4">
                             <div>
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('alamat', $siswa->alamat) }}</textarea>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                                    <input type="text" name="latitude" id="latitude" value="{{ old('latitude', $siswa->latitude) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly>
                                </div>
                                <div>
                                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                                    <input type="text" name="longitude" id="longitude" value="{{ old('longitude', $siswa->longitude) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Tandai Lokasi di Peta</label>
                            <div id="map" style="height: 200px; cursor: pointer;" class="rounded-lg border z-0 mt-1"></div>
                        </div>
                    </div>
                </form>

                {{-- FORM TERPISAH UNTUK RESET PASSWORD (JIKA WALI SUDAH ADA) --}}
                @if ($siswa->wali)
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">Aksi Cepat</label>
                    <div class="mt-1">
                        <form action="{{ route('siswa.reset-password', $siswa) }}" method="POST" onsubmit="return confirm('Yakin ingin me-reset password untuk wali murid ini? Password baru akan dikirim melalui WhatsApp.')" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-yellow-500 text-white text-sm font-semibold rounded-lg shadow-sm hover:bg-yellow-600">
                                Reset Password Wali
                            </button>
                        </form>
                    </div>
                </div>
                @endif
                
                {{-- TOMBOL SUBMIT UNTUK FORM UTAMA --}}
                <div class="mt-8 border-t pt-6 flex justify-end">
                    <a href="{{ route('siswa.index') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                    <button type="submit" form="edit-siswa-form" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update Data</button>
                </div>

            </div>
        </div>
    </div>
    
    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const latInput = document.getElementById('latitude');
                const lonInput = document.getElementById('longitude');
                
                const initialLat = parseFloat(latInput.value) || 0.542;
                const initialLon = parseFloat(lonInput.value) || 123.059;
                const initialCoords = [initialLat, initialLon];
                const initialZoom = latInput.value ? 16 : 13;

                const map = L.map('map').setView(initialCoords, initialZoom);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                const marker = L.marker(initialCoords, { draggable: true }).addTo(map);

                function updateInputs(latlng) {
                    latInput.value = latlng.lat.toFixed(7);
                    lonInput.value = latlng.lng.toFixed(7);
                }

                marker.on('dragend', function(e) { updateInputs(e.target.getLatLng()); });
                map.on('click', function(e) { marker.setLatLng(e.latlng); updateInputs(e.latlng); });
            });
        </script>
    @endpush
</x-app-layout>