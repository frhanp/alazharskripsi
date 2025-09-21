<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran</title>
    <style>
        body { font-family: sans-serif; font-size: 10px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 6px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Laporan Pembayaran SPP</h1>
    <p>Tanggal Cetak: {{ date('d-m-Y') }}</p>
    <table>
        <thead>
            <tr>
                <th>Siswa</th>
                <th>Pembayaran</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Tgl. Verifikasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $item)
                <tr>
                    <td>{{ $item->siswa->nama_siswa }}</td>
                    <td>{{ is_array($item->bulan) ? implode(', ', $item->bulan) : $item->bulan }} {{ $item->tahun }}</td>
                    <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                    <td>{{ ucfirst($item->status) }}</td>
                    <td>{{ $item->tanggal_verifikasi ? \Carbon\Carbon::parse($item->tanggal_verifikasi)->format('d-m-Y') : '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>