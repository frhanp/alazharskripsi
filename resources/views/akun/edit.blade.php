<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Akun: ') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                <form action="{{ route('akun.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="nomor_wa" class="block text-sm font-medium text-gray-700">No. WhatsApp</label>
                            <input type="text" name="nomor_wa" id="nomor_wa" value="{{ old('nomor_wa', $user->nomor_wa) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                    </div>

                    <div class="mt-8 border-t pt-6 flex justify-end">
                        <a href="{{ route('akun.index') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                        <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>