<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kelas: ') }} {{ $kelas->nama }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                <form action="{{ route('kelas.update', $kelas) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kelas</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama', $kelas->nama) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required autofocus>
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('kelas.index') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                        <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>