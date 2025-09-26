<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <!-- Logo -->
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'MY APP') }}
        </a>
    </div>
    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-6 space-y-2">

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs(['dashboard', 'bendahara.dashboard', 'ketua.dashboard'])">
            <img src="{{ asset('images/homeicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- =======================================================
            AWAL LOGIKA BARU UNTUK ROLE
        ======================================================= --}}

        {{-- Menu Khusus Bendahara (Operasional) --}}
        @if (auth()->user()?->role === 'bendahara')
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Operasional</p>

            <x-nav-link :href="route('pembayaran.manual.create')" :active="request()->routeIs('pembayaran.manual.create')">
                <img src="{{ asset('images/inputicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Input Manual') }}
            </x-nav-link>

            <x-nav-link :href="route('pembayaran.verifikasi')" :active="request()->routeIs('pembayaran.verifikasi')">
                <img src="{{ asset('images/verifyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Verifikasi Pembayaran') }}
            </x-nav-link>

            <x-nav-link :href="route('tunggakan.index')" :active="request()->routeIs('tunggakan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ __('Tunggakan') }}
            </x-nav-link>

            <x-nav-link :href="route('pengaturan.index')" :active="request()->routeIs('pengaturan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ __('Pengaturan') }}
            </x-nav-link>
        @endif

        {{-- Menu Bersama Bendahara & Ketua Yayasan --}}
        @if (in_array(auth()->user()?->role, ['bendahara', 'ketua_yayasan']))
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Data & Laporan</p>

            <x-nav-link :href="route('siswa.index')" :active="request()->routeIs('siswa.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222 4 2.222V20M12 14.75V20" />
                </svg>
                {{ __('Data Siswa') }}
            </x-nav-link>

            <x-nav-link :href="route('riwayat.index')" :active="request()->routeIs('riwayat.index')">
                <img src="{{ asset('images/historyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Riwayat Pembayaran') }}
            </x-nav-link>

            <x-nav-link :href="route('pemetaan.index')" :active="request()->routeIs('pemetaan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ __('Pemetaan') }}
            </x-nav-link>

            <x-nav-link :href="route('laporan.index')" :active="request()->routeIs('laporan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                {{ __('Laporan') }}
            </x-nav-link>
        @endif

        {{-- Menu Khusus Wali Murid --}}
        @if (auth()->user()?->role === 'wali_murid')
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Wali Murid</p>

            <x-nav-link :href="route('pembayaran.upload.create')" :active="request()->routeIs('pembayaran.upload.create')">
                <img src="{{ asset('images/uploadicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Upload Bukti Transfer') }}
            </x-nav-link>

            <x-nav-link :href="route('riwayat.index')" :active="request()->routeIs('riwayat.index')">
                <img src="{{ asset('images/historyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Riwayat Pembayaran') }}
            </x-nav-link>

            {{-- dst untuk midtrans --}}
        @endif

        {{-- Akun Wali Murid hanya bendahara --}}
        @if (auth()->user()?->role === 'bendahara')
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Manajemen</p>

            <x-nav-link :href="route('akun.index')" :active="request()->routeIs('akun.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                {{ __('Akun Wali Murid') }}
            </x-nav-link>
        @endif

    </nav>

    <!-- Sidebar Footer -->
    {{-- <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                {{ __('Profile') }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div> --}}
</aside>
