<x-app-layout>
    <x-slot name="header">Daftar Guru</x-slot>

    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-4">Tambah Guru</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mapel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->nama_guru }}</td>
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->mapel }}</td>
                <td>
                    <a href="{{ route('guru.edit', $guru->id_guru) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('guru.destroy', $guru->id_guru) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="text-red-600 ml-2">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $gurus->links() }}
</x-app-layout>
