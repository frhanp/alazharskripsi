<x-app-layout>
    <x-slot name="header">Edit Siswa</x-slot>

    <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST">
        @csrf @method('PUT')
        <div>
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
        </div>
        <div>
            <label>NIS</label>
            <input type="text" name="nis" value="{{ $siswa->nis }}" required>
        </div>
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" value="{{ $siswa->kelas }}" required placeholder="Contoh: 10A">
        </div>
        <div>
            <label>Wali Kelas</label>
            <select name="id_guru">
                <option value="">- Pilih Wali Kelas -</option>
                @foreach ($gurus as $guru)
                    <option value="{{ $guru->id_guru }}" {{ $siswa->id_guru == $guru->id_guru ? 'selected' : '' }}>
                        {{ $guru->nama_guru }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $siswa->alamat }}">
        </div>
        <div>
            <label>Latitude</label>
            <input type="text" name="latitude" value="{{ $siswa->latitude }}">
        </div>
        <div>
            <label>Longitude</label>
            <input type="text" name="longitude" value="{{ $siswa->longitude }}">
        </div>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
