# Alur Data Sistem Pembayaran SPP (Format DFD)

Dokumen ini menjabarkan alur data (alur panah) untuk setiap proses utama dalam sistem. Ini bisa menjadi panduan untuk menggambar Diagram Alir Data (DAD/DFD).

### Notasi
-   `[E] NamaEntitas`: Entitas Eksternal (contoh: [E] Bendahara)
-   `(P) Nomor.Proses`: Proses (contoh: (P) 1.1 Kelola Data Siswa)
-   `|D| NamaDataStore`: Data Store / Tabel Database (contoh: |D| Siswa)
-   `-- Nama Alur Data -->`: Arah alur data

---

## 1.0 Manajemen Data Siswa & Wali

Proses ini menangani semua data master terkait siswa dan akun walinya.

-   **Alur Pembuatan Data:**
    -   `[E] Bendahara -- Data Siswa & Wali Baru --> (P) 1.1 Kelola Data Siswa & Wali`
    -   `(P) 1.1 -- Data Siswa Tersimpan --> |D| Siswa`
    -   `(P) 1.1 -- Data Wali Tersimpan --> |D| Users`

-   **Alur Perubahan Data (Contoh "Arus Bolak-Balik"):**
    1.  `|D| Siswa -- Data Siswa Lama --> (P) 1.1` (Membaca data untuk ditampilkan di form edit)
    2.  `(P) 1.1 -- Tampilan Form Edit --> [E] Bendahara` (Menampilkan data ke pengguna)
    3.  `[E] Bendahara -- Perubahan Data Siswa --> (P) 1.1` (Menerima input perubahan dari pengguna)
    4.  `(P) 1.1 -- Data Siswa Terupdate --> |D| Siswa` (Menyimpan perubahan ke database)

-   **Alur Reset Password:**
    -   `[E] Bendahara -- Permintaan Reset Password --> (P) 1.2 Reset Password Wali`
    -   `(P) 1.2 -- Password Terupdate --> |D| Users`
    -   `(P) 1.2 -- Notifikasi WA Password Baru --> [E] Wali Murid`

---

## 2.0 Pengelolaan Pembayaran SPP

Proses inti yang paling kompleks, melibatkan banyak alur data.

-   **Alur Upload Transfer (Level 1):**
    -   `[E] Wali Murid -- Formulir & Bukti Transfer --> (P) 2.1 Catat Pembayaran Transfer`
    -   `(P) 2.1 -- Data Pembayaran (menunggu) --> |D| Pembayaran`
    -   `|D| Pembayaran -- Data Pembayaran Menunggu --> (P) 2.2 Verifikasi Pembayaran`
    -   `(P) 2.2 -- Daftar Verifikasi --> [E] Bendahara`
    -   `[E] Bendahara -- Input Verifikasi (Terima/Tolak) --> (P) 2.2 Verifikasi Pembayaran`
    -   `(P) 2.2 -- Status Pembayaran Update --> |D| Pembayaran`

-   **Alur Midtrans (Level 1):**
    -   `[E] Wali Murid -- Pilihan Bayar --> (P) 2.3 Proses Midtrans`
    -   `(P) 2.3 -- Data Pembayaran (menunggu) --> |D| Pembayaran`
    -   `(P) 2.3 -- Permintaan Token --> [E] Midtrans (Sistem Eksternal Pembayaran)`
    -   `[E] Midtrans (Sistem Eksternal Pembayaran) -- Snap Token --> (P) 2.3`
    -   `(P) 2.3 -- Tampilan Pembayaran Midtrans --> [E] Wali Murid`
    -   `[E] Midtrans (Sistem Eksternal Pembayaran) -- Webhook Notifikasi Sukses --> (P) 2.4 Handle Notifikasi Midtrans`
    -   `(P) 2.4 -- Status Pembayaran Update (diterima) --> |D| Pembayaran`

-   **Alur Pemicu Setelah Pembayaran Diterima (Level 1):**
    -   `|D| Pembayaran -- Data Pembayaran Lunas --> (P) 2.5 Buat Kwitansi`
    -   `(P) 2.5 -- Data Kwitansi Baru --> |D| Kwitansi`
    -   `(P) 2.5 -- Notifikasi Kwitansi via WA --> [E] Wali Murid`
    -   `|D| Pembayaran -- Data Pembayaran Lunas --> (P) 2.6 Update Status Tunggakan`
    -   `(P) 2.6 -- Status Lunas --> |D| Tunggakan`

---

## 3.0 Pengelolaan Tunggakan

-   **Alur Pembuatan Tunggakan Otomatis:**
    -   `[E] Scheduler -- Pemicu Waktu --> (P) 3.1 Buat Tunggakan Otomatis`
    -   `|D| Siswa -- Daftar Siswa --> (P) 3.1`
    -   `|D| Pembayaran -- Riwayat Pembayaran --> (P) 3.1`
    -   `(P) 3.1 -- Data Tunggakan Baru --> |D| Tunggakan`
    -   `(P) 3.1 -- Pemicu Kirim Notifikasi --> (P) 3.2 Kirim Notifikasi Tunggakan`

-   **Alur Pengiriman Notifikasi:**
    -   `|D| Tunggakan -- Data Tunggakan --> (P) 3.2 Kirim Notifikasi Tunggakan`
    -   `|D| Users -- Nomor WA Wali --> (P) 3.2`
    -   `(P) 3.2 -- Notifikasi WA Tunggakan --> [E] Wali Murid`

-   **Alur Pengingat Manual:**
    -   `[E] Bendahara -- Permintaan Kirim Ulang Notif --> (P) 3.2 Kirim Notifikasi Tunggakan` (Memanggil proses yang sama)

---

## 4.0 Pembuatan Laporan

-   `[E] Bendahara/Ketua Yayasan -- Permintaan & Filter Laporan --> (P) 4.0 Buat Laporan`
-   `|D| Pembayaran -- Data Transaksi --> (P) 4.0`
-   `|D| Siswa -- Data Siswa Terkait --> (P) 4.0`
-   `(P) 4.0 -- Laporan PDF/Excel/Web --> [E] Bendahara/Ketua Yayasan`

---

## 5.0 Pemetaan Lokasi

-   `[E] Bendahara/Ketua Yayasan -- Permintaan Buka Peta --> (P) 5.0 Ambil Data Lokasi`
-   `|D| Siswa -- Data Alamat & Koordinat --> (P) 5.0`
-   `(P) 5.0 -- Data Koordinat untuk Peta --> [E] Bendahara/Ketua Yayasan`

---

## 6.0 Pengelolaan Pengaturan Sistem

-   **Alur "Bolak-Balik" untuk Edit Pengaturan:**
    1.  `|D| Pengaturan -- Data Pengaturan Lama --> (P) 6.0 Kelola Pengaturan` (Membaca data)
    2.  `(P) 6.0 -- Tampilan Form Pengaturan --> [E] Bendahara` (Menampilkan data)
    3.  `[E] Bendahara -- Data Pengaturan Baru --> (P) 6.0` (Menerima input baru)
    4.  `(P) 6.0 -- Data Pengaturan Tersimpan --> |D| Pengaturan` (Menyimpan perubahan)