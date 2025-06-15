<x-app-layout>
    <x-slot name="header">Tambah Siswa</x-slot>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" required>
        </div>
        <div>
            <label>NIS</label>
            <input type="text" name="nis" required>
        </div>
        <div>
            <label>Wali Kelas</label>
            <select name="id_guru">
                <option value="">- Pilih Wali Kelas -</option>
                @foreach ($gurus as $guru)
                    <option value="{{ $guru->id_guru }}">{{ $guru->nama_guru }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Simpan</button>
    </form>
</x-app-layout>
