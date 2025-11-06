<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pemetaan Siswa') }}
        </h2>
    </x-slot>

    {{-- Load Library Leaflet.js --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Elemen div untuk menampung peta --}}
                    <div id="map" style="height: 600px;"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const map = L.map('map').setView([0.542, 123.059], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            fetch('{{ route('api.locations', [], false) }}')
                .then(response => response.json())
                .then(data => {
                    data.forEach(location => {
                        const marker = L.marker([location.latitude, location.longitude]).addTo(map);
                        
                        // BUAT KONTEN TOOLTIP
                        const tooltipContent = `<b>${location.nama}</b><br>${location.info}`;

                        // GUNAKAN .bindTooltip() AGAR MUNCUL SAAT HOVER
                        marker.bindTooltip(tooltipContent);
                    });
                })
                .catch(error => console.error('Error fetching locations:', error));
        });
    </script>
</x-app-layout>