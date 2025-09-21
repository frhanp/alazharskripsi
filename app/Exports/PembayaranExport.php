<?php

namespace App\Exports;

use App\Models\Pembayaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PembayaranExport implements FromCollection, WithHeadings, WithMapping
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        // Logika query sama persis dengan controller
        $query = Pembayaran::query()->with('siswa');
        if ($this->request->filled('start_date')) {
            $query->whereDate('tanggal_verifikasi', '>=', $this->request->start_date);
        }
        if ($this->request->filled('end_date')) {
            $query->whereDate('tanggal_verifikasi', '<=', $this->request->end_date);
        }
        if ($this->request->filled('id_siswa')) {
            $query->where('id_siswa', $this->request->id_siswa);
        }
        if ($this->request->filled('status')) {
            $query->where('status', $this->request->status);
        }
        return $query->latest('tanggal_verifikasi')->get();
    }

    public function headings(): array
    {
        return [
            'ID Pembayaran',
            'Nama Siswa',
            'Bulan',
            'Tahun',
            'Jumlah',
            'Metode',
            'Status',
            'Tanggal Verifikasi',
        ];
    }

    public function map($pembayaran): array
    {
        return [
            $pembayaran->id_pembayaran,
            $pembayaran->siswa->nama_siswa,
            is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan,
            $pembayaran->tahun,
            $pembayaran->jumlah,
            ucfirst($pembayaran->metode),
            ucfirst($pembayaran->status),
            $pembayaran->tanggal_verifikasi,
        ];
    }
}
