<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Siswa: ') }} {{ $siswa->nama_siswa }}
        </h2>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">

                        <div class="space-y-4">
                            <div>
                                <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama
                                    Siswa</label>
                                <input type="text" name="nama_siswa" id="nama_siswa"
                                    value="{{ old('nama_siswa', $siswa->nama_siswa) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                                <input type="text" name="nis" id="nis"
                                    value="{{ old('nis', $siswa->nis) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                                <input type="text" name="kelas" id="kelas"
                                    value="{{ old('kelas', $siswa->kelas) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="id_wali" class="block text-sm font-medium text-gray-700">Wali Murid
                                    (Induk)</label>
                                <select name="id_wali" id="id_wali"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    @foreach ($walis as $wali)
                                        <option value="{{ $wali->id }}" @selected(old('id_wali', $siswa->id_wali) == $wali->id)>
                                            {{ $wali->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat
                                    Lengkap</label>
                                <textarea name="alamat" id="alamat" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('alamat', $siswa->alamat) }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tandai Lokasi di Peta</label>
                                <p class="text-xs text-gray-500 mb-2">Klik/geser penanda di peta atau gunakan lokasi
                                    Anda saat ini.</p>
                                <div id="map" style="height: 200px; cursor: pointer;"
                                    class="rounded-lg border z-0"></div>
                                <button type="button" id="get-location-btn"
                                    class="text-sm text-indigo-600 hover:underline font-semibold mt-2">Gunakan Lokasi
                                    Saya</button>
                                <p id="status" class="text-xs text-gray-500"></p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="latitude"
                                        class="block text-sm font-medium text-gray-700">Latitude</label>
                                    <input type="text" name="latitude" id="latitude"
                                        value="{{ old('latitude', $siswa->latitude) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100"
                                        readonly>
                                </div>
                                <div>
                                    <label for="longitude"
                                        class="block text-sm font-medium text-gray-700">Longitude</label>
                                    <input type="text" name="longitude" id="longitude"
                                        value="{{ old('longitude', $siswa->longitude) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100"
                                        readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 border-t pt-6 flex justify-end">
                        <a href="{{ route('siswa.index') }}"
                            class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                        <button type="submit"
                            class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update
                            Siswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            // PATOKAN: resources/views/siswa/edit.blade.php

            document.addEventListener('DOMContentLoaded', function() {
                const latInput = document.getElementById('latitude');
                const lonInput = document.getElementById('longitude');
                const getLocationBtn = document.getElementById('get-location-btn');
                const statusEl = document.getElementById('status');

                // Coba baca koordinat awal dari input form, jika tidak ada, gunakan default Gorontalo
                const initialLat = parseFloat(latInput.value) || 0.542;
                const initialLon = parseFloat(lonInput.value) || 123.059;
                const initialCoords = [initialLat, initialLon];
                const initialZoom = latInput.value ? 16 : 13; // Zoom lebih dekat jika sudah ada koordinat

                // Inisialisasi Peta
                const map = L.map('map').setView(initialCoords, initialZoom);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                // Buat satu penanda (marker) yang bisa digeser (draggable)
                const marker = L.marker(initialCoords, {
                    draggable: true
                }).addTo(map);

                // Fungsi untuk mengupdate input form
                function updateInputs(latlng) {
                    latInput.value = latlng.lat.toFixed(7);
                    lonInput.value = latlng.lng.toFixed(7);
                }

                // (Event listener lainnya sama persis seperti di atas)

                marker.on('dragend', function(e) {
                    updateInputs(e.target.getLatLng());
                    statusEl.textContent = 'Posisi disesuaikan manual.';
                });

                map.on('click', function(e) {
                    marker.setLatLng(e.latlng);
                    updateInputs(e.latlng);
                    statusEl.textContent = 'Posisi diubah via klik peta.';
                });

                getLocationBtn.addEventListener('click', function() {
                    if (!navigator.geolocation) {
                        statusEl.textContent = 'Geolocation tidak didukung.';
                        return;
                    }
                    statusEl.textContent = 'Meminta lokasi...';
                    navigator.geolocation.getCurrentPosition(function(position) {
                        const userCoords = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        map.setView(userCoords, 16);
                        marker.setLatLng(userCoords);
                        updateInputs(userCoords);
                        statusEl.textContent = 'Lokasi ditemukan! Geser penanda jika kurang akurat.';
                    }, function() {
                        statusEl.textContent = 'Gagal mendapatkan lokasi.';
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>
