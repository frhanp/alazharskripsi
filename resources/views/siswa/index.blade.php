<x-app-layout>
    <x-slot name="header">Daftar Siswa</x-slot>

    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-4">Tambah Siswa</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->guru->nama_guru ?? '-' }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="text-red-600 ml-2">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $siswas->links() }}
</x-app-layout>