<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\CarbonPeriod;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Jobs\SendTunggakanNotification;
use Illuminate\Support\Facades\Log;

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

        $pengaturan = Pengaturan::whereIn('key', ['jumlah_spp_tk', 'jumlah_spp_sd'])
            ->pluck('value', 'key');

        $hargaSppTK = $pengaturan['jumlah_spp_tk'] ?? 0;
        $hargaSppSD = $pengaturan['jumlah_spp_sd'] ?? 0;

        if ($hargaSppTK == 0 || $hargaSppSD == 0) {
            Log::error('[TUNGGAKAN LAMPAU] Harga SPP TK/SD belum diatur. Command dihentikan.');
            $this->error('Harga SPP TK/SD belum diatur di Pengaturan. Command dihentikan.');
            return 0;
        }

        // 2. Ambil semua siswa aktif DENGAN relasi kelas (Lebih efisien)
        $siswas = Siswa::with('kelas')->get();

        $tunggakanDibuat = 0;


        foreach ($siswas as $siswa) {

            // 3. Tentukan jumlah tunggakan berdasarkan jenjang siswa (Cukup 1x per siswa)
            $jenjang = 'SD (default)'; // Default
            if (!$siswa->kelas) {
                Log::warning("[TUNGGAKAN LAMPAU] Siswa ID {$siswa->id_siswa} ({$siswa->nama_siswa}) tidak memiliki kelas, menggunakan harga SD.");
                $jumlahTunggakan = $hargaSppSD;
            } else {
                $jenjang = $siswa->kelas->getJenjang(); // 'TK' atau 'SD'
                $jumlahTunggakan = ($jenjang === 'TK') ? $hargaSppTK : $hargaSppSD;
            }

            // Loop periode untuk siswa ini
            foreach ($periodePengecekan as $tanggal) {
                $bulan = $tanggal->translatedFormat('F');
                $tahun = $tanggal->year;

                // $this->info("Mengecek periode: {$bulan} {$tahun} untuk {$siswa->nama_siswa}"); // (Opsional: terlalu verbose)

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
                    $tunggakanBaru = Tunggakan::create([
                        'id_siswa' => $siswa->id_siswa,
                        'bulan' => $bulan,
                        'tahun' => $tahun,
                        'jumlah_tunggakan' => $jumlahTunggakan, // 4. Gunakan harga yang benar
                        'status' => 'belum_bayar'
                    ]);

                    // DITAMBAHKAN: Langsung kirim notifikasi
                    SendTunggakanNotification::dispatch($tunggakanBaru);

                    $this->line('Tunggakan lampau dibuat & notifikasi dikirim: ' . $siswa->nama_siswa . ' (' . $bulan . ' ' . $tahun . ')');
                    Log::info("[TUNGGAKAN] Dibuat (Lampau) untuk Siswa ID {$siswa->id_siswa} - {$bulan} {$tahun} - Jenjang: {$jenjang} - Rp {$jumlahTunggakan}");
                    $tunggakanDibuat++;
                }
            }
        }

        $this->info("Proses failsafe selesai. Total tunggakan lampau yang terlewat & berhasil dibuat: " . $tunggakanDibuat);
        return 0;
    }
}
