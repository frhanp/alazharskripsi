<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 14px;
            color: #333;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #eee;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 12px;
        }

        .content-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .content-table td {
            padding: 10px;
            vertical-align: top;
        }

        .content-table .label {
            width: 30%;
            font-weight: bold;
        }

        .amount-box {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0;
        }

        .footer {
            margin-top: 40px;
            width: 100%;
        }

        .signature {
            text-align: center;
            width: 35%;
            float: right;
        }

        .signature .name {
            margin-top: 60px;
            font-weight: bold;
            border-top: 1px solid #333;
            padding-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>KWITANSI PEMBAYARAN</h1>
            {{-- Ganti dengan nama sekolah Anda --}}
            <p>NAMA SEKOLAH ANDA | Alamat Sekolah Anda, Telp: (000) 123456</p>
        </div>

        <table style="width: 100%; margin-bottom: 20px;">
            <tr>
                <td><strong>No. Kwitansi</strong>: {{ $kwitansi->no_kwitansi }}</td>
                <td style="text-align: right;"><strong>Tanggal Terbit</strong>:
                    {{ \Carbon\Carbon::parse($kwitansi->tanggal_terbit)->translatedFormat('d F Y') }}</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td class="label">Telah Diterima Dari</td>
                <td>:
                    {{-- Prioritaskan nama wali jika ada, jika tidak, gunakan nama siswa --}}
                    @if ($pembayaran->siswa->wali)
                        {{ $pembayaran->siswa->wali->name }} (Wali dari {{ $pembayaran->siswa->nama_siswa }})
                    @else
                        {{ $pembayaran->siswa->nama_siswa }}
                    @endif
                </td>
            </tr>
            <tr>
                <td class="label">Uang Sejumlah</td>
                <td>:
                    <i>
                        {{-- Untuk fungsi terbilang, biasanya butuh helper. Ini versi sederhananya --}}
                        {{-- Anda bisa install library pihak ketiga untuk mengubah angka ke huruf --}}
                        (Mohon implementasikan fungsi terbilang di sini)
                    </i>
                </td>
            </tr>
            <tr>
                <td class="label">Untuk Pembayaran</td>
                <td>: SPP Bulan
                    {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} Tahun
                    {{ $pembayaran->tahun }}</td>
            </tr>
            <tr>
                <td class="label">Siswa</td>
                <td>: {{ $pembayaran->siswa->nama_siswa }} / NIS: {{ $pembayaran->siswa->nis }}</td>
            </tr>
        </table>

        <div class="amount-box">
            Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }},-
        </div>

        <div class="footer">
            <div class="signature">
                <p>Petugas,</p>
                <div class="name">
                    (___________________)
                </div>
            </div>
        </div>
    </div>
</body>

</html>
