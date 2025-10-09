<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\CarbonPeriod;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Jobs\SendTunggakanNotification;

class BuatTunggakanLampau extends Command
{
    /**
     * Signature untuk memanggil command ini.
     */
    protected $signature = 'tunggakan:buat-lampau'; // nama command sesuai doc

    /**
     * Deskripsi command.
     */
    protected $description = 'Failsafe: Memastikan semua tunggakan dari bulan-bulan lalu yang terlewat sudah tercatat.';

    /**
     * Eksekusi logika command.
     */
    public function handle()
    {
        $this->info('Memulai proses pengecekan tunggakan lampau (failsafe)...');

        // Asumsi tahun ajaran dimulai bulan Juli. Ubah jika perlu.
        $awalTahunAjaran = now()->month >= 7 ? now()->year(now()->year)->month(7)->startOfMonth() : now()->year(now()->year - 1)->month(7)->startOfMonth();
        $bulanSebelumnya = now()->subMonth()->endOfMonth();
        
        // Hanya proses jika sudah ada periode yang lewat
        if ($awalTahunAjaran->gt($bulanSebelumnya)) {
            $this->info('Belum ada periode bulan lalu yang perlu dicek di tahun ajaran ini.');
            return 0;
        }
        
        $periodePengecekan = CarbonPeriod::create($awalTahunAjaran, '1 month', $bulanSebelumnya);
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;
        $siswas = Siswa::all();
        $tunggakanDibuat = 0;

        foreach ($periodePengecekan as $tanggal) {
            $bulan = $tanggal->translatedFormat('F');
            $tahun = $tanggal->year;

            $this->info("Mengecek periode: {$bulan} {$tahun}");

            foreach ($siswas as $siswa) {
                $pembayaranLunasAda = Pembayaran::where('id_siswa', $siswa->id_siswa)
                    ->where('tahun', $tahun)
                    ->whereJsonContains('bulan', $bulan)
                    ->where('status', 'diterima')
                    ->exists();

                $tunggakanSudahAda = Tunggakan::where('id_siswa', $siswa->id_siswa)
                    ->where('bulan', $bulan)
                    ->where('tahun', $tahun)
                    ->exists();

                    if (!$pembayaranLunasAda && !$tunggakanSudahAda) {
                        $tunggakanBaru = Tunggakan::create([ // DIUBAH
                            'id_siswa' => $siswa->id_siswa,
                            'bulan' => $bulan,
                            'tahun' => $tahun,
                            'jumlah_tunggakan' => $jumlahSPP,
                            'status' => 'belum_bayar'
                        ]);
    
                        // DITAMBAHKAN: Langsung kirim notifikasi
                        SendTunggakanNotification::dispatch($tunggakanBaru);
    
                        $this->line('Tunggakan lampau dibuat & notifikasi dikirim: ' . $siswa->nama_siswa . ' (' . $bulan . ' ' . $tahun . ')');
                        $tunggakanDibuat++;
                }
            }
        }

        $this->info("Proses failsafe selesai. Total tunggakan lampau yang terlewat & berhasil dibuat: " . $tunggakanDibuat);
        return 0;
    }
}
