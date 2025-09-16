<x-app-layout>
    <x-slot name="header">Edit Guru</x-slot>

    <form action="{{ route('guru.update', $guru->id_guru) }}" method="POST">
        @csrf @method('PUT')
        <div>
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}" required>
        </div>
        <div>
            <label>NIP</label>
            <input type="text" name="nip" value="{{ $guru->nip }}">
        </div>
        <div>
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel" value="{{ $guru->mapel }}">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $guru->alamat }}">
        </div>
        <div>
            <label>Latitude</label>
            <input type="text" name="latitude" value="{{ $guru->latitude }}">
        </div>
        <div>
            <label>Longitude</label>
            <input type="text" name="longitude" value="{{ $guru->longitude }}">
        </div>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
