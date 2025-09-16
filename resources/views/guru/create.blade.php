<x-app-layout>
    <x-slot name="header">Tambah Guru</x-slot>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" required>
        </div>
        <div>
            <label>NIP</label>
            <input type="text" name="nip">
        </div>
        <div>
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat">
        </div>
        <div>
            <label>Latitude</label>
            <input type="text" name="latitude">
        </div>
        <div>
            <label>Longitude</label>
            <input type="text" name="longitude">
        </div>
        <button type="submit">Simpan</button>
    </form>
</x-app-layout>
