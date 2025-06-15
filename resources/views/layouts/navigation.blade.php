<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <!-- Logo -->
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'MY APP') }}
        </a>
    </div>
    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <img src="{{ asset('images/homeicon.png') }}" alt="icon" class="w-4 h-4 mr-2">

            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- <x-nav-link :href="route('payment.page')" :active="request()->routeIs('payment.page')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
              </svg>
              
            {{ __('Pembayaran') }}
        </x-nav-link> --}}

        @if(auth()->user()?->role === 'bendahara')

        <x-nav-link :href="route('pembayaran.manual.create')" :active="request()->routeIs('pembayaran.manual.create')">
            <img src="{{ asset('images/inputicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Input Manual') }}
        </x-nav-link>

        <x-nav-link :href="route('pembayaran.manual.index')" :active="request()->routeIs('pembayaran.manual.index')">
            <img src="{{ asset('images/historyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Riwayat Pembayaran') }}
        </x-nav-link>

        <x-nav-link :href="route('pembayaran.verifikasi')" :active="request()->routeIs('pembayaran.verifikasi')">
            <img src="{{ asset('images/verifyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Verifikasi Pembayaran') }}
        </x-nav-link>
        @endif

        @if(auth()->user()?->role === 'wali_murid')
        <x-nav-link :href="route('pembayaran.upload.create')" :active="request()->routeIs('pembayaran.upload.create')">
            <img src="{{ asset('images/uploadicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Upload Bukti Transfer') }}
        </x-nav-link>
        

        <x-nav-link :href="route('riwayat.index')" :active="request()->routeIs('riwayat.index')">
            <img src="{{ asset('images/historyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Riwayat Pembayaran') }}
        </x-nav-link>
        


        <!-- Ganti nav-link dengan dropdown -->
        <div class="relative">
            <button type="button" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900" id="siswa-menu" aria-expanded="false" aria-haspopup="true">
                <img src="{{ asset('images/walleticon.png') }}" alt="icon" class="w-5 h-5 mr-2">
                {{ __('Pembayaran Online') }}
                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        
            <div class="absolute hidden mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" id="siswa-menu-dropdown">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="siswa-menu">
                    @foreach (Auth::user()->siswa as $item)
                        <a href="{{ route('pembayaran.midtrans.form', $item->id_siswa) }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                           role="menuitem">
                            {{ $item->nama_siswa }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        
        <script>
            document.getElementById('siswa-menu').addEventListener('click', function () {
                document.getElementById('siswa-menu-dropdown').classList.toggle('hidden');
            });
        </script>
        
        @endif

       
        
        
        
    </nav>
    <!-- User Dropdown -->
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>
