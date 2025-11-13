<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Jobs\SendTunggakanNotification;
use Illuminate\Support\Facades\Log;

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

        $pengaturan = Pengaturan::whereIn('key', ['jumlah_spp_tk', 'jumlah_spp_sd'])
                                ->pluck('value', 'key');
        
        $hargaSppTK = $pengaturan['jumlah_spp_tk'] ?? 0;
        $hargaSppSD = $pengaturan['jumlah_spp_sd'] ?? 0;

        if ($hargaSppTK == 0 || $hargaSppSD == 0) {
            Log::error('[TUNGGAKAN] Harga SPP TK/SD belum diatur. Command dihentikan.');
            $this->error('Harga SPP TK/SD belum diatur di Pengaturan. Command dihentikan.');
            return 0;
        }

        // 2. Ambil semua siswa aktif DENGAN relasi kelas
        $siswas = Siswa::with('kelas')->get();
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

                    $jenjang = 'SD (default)'; // Default
                if (!$siswa->kelas) {
                    Log::warning("[TUNGGAKAN] Siswa ID {$siswa->id_siswa} ({$siswa->nama_siswa}) tidak memiliki kelas, menggunakan harga SD.");
                    $jumlahTunggakan = $hargaSppSD;
                } else {
                    $jenjang = $siswa->kelas->getJenjang(); // 'TK' atau 'SD'
                    $jumlahTunggakan = ($jenjang === 'TK') ? $hargaSppTK : $hargaSppSD;
                }

                    $tunggakanBaru = Tunggakan::create([
                    'id_siswa' => $siswa->id_siswa,
                    'bulan' => $bulanBerjalan,
                    'tahun' => $tahunBerjalan,
                    'jumlah_tunggakan' => $jumlahTunggakan, // Gunakan variabel baru
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
