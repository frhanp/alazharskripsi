<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ubah Alamat ananda {{ $siswa->nama_siswa }}
        </h2>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                <form action="{{ route('wali.alamat.update', $siswa) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Lokasi</h3>
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="space-y-4">
                             <div>
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('alamat', $siswa->alamat) }}</textarea>
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
                            <div id="map" style="height: 250px; cursor: pointer;" class="rounded-lg border z-0 mt-1"></div>
                        </div>
                    </div>

                    <div class="mt-8 border-t pt-6 flex justify-end">
                        <a href="{{ route('profile.edit') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                        <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Simpan Perubahan Alamat</button>
                    </div>
                </form>
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