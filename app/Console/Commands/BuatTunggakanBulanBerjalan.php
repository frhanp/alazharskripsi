<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Jobs\SendTunggakanNotification;

class BuatTunggakanBulanBerjalan extends Command
{
   /**
     * Signature untuk memanggil command ini.
     */
    protected $signature = 'tunggakan:buat-bulan-berjalan';

    /**
     * Deskripsi command.
     */
    protected $description = 'Mengecek dan membuat tunggakan untuk bulan berjalan setelah tanggal 10 (Sesuai SOP).';

    /**
     * Eksekusi logika command.
     */
    public function handle()
    {
        // Hanya berjalan jika sudah melewati tanggal 10
        if (now()->day <= 10) {
            $this->info('Sesuai SOP, proses belum dijalankan karena belum melewati tanggal 10.');
            return 0;
        }

        $this->info('Memulai pengecekan tunggakan untuk bulan berjalan...');

        $periode = Carbon::now();
        $bulanBerjalan = $periode->translatedFormat('F');
        $tahunBerjalan = $periode->year;

        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;
        $siswas = Siswa::all();
        $tunggakanDibuat = 0;

        foreach ($siswas as $siswa) {
            $sudahLunas = Pembayaran::where('id_siswa', $siswa->id_siswa)
                ->where('tahun', $tahunBerjalan)
                ->whereJsonContains('bulan', $bulanBerjalan)
                ->where('status', 'diterima')
                ->exists();

            $tunggakanSudahAda = Tunggakan::where('id_siswa', $siswa->id_siswa)
                ->where('bulan', $bulanBerjalan)
                ->where('tahun', $tahunBerjalan)
                ->exists();

                if (!$sudahLunas && !$tunggakanSudahAda) {
                    $tunggakanBaru = Tunggakan::create([ // DIUBAH
                        'id_siswa' => $siswa->id_siswa,
                        'bulan' => $bulanBerjalan,
                        'tahun' => $tahunBerjalan,
                        'jumlah_tunggakan' => $jumlahSPP,
                        'status' => 'belum_bayar'
                    ]);

                SendTunggakanNotification::dispatch($tunggakanBaru);

                $this->line('Tunggakan dibuat & notifikasi dikirim: ' . $siswa->nama_siswa . ' (' . $bulanBerjalan . ' ' . $tahunBerjalan . ')');
                $tunggakanDibuat++;
            }
        }

        $this->info("Proses selesai. Total tunggakan baru dibuat: " . $tunggakanDibuat);
        return 0;
    }
}
