# Project Digest (Full Content)
_Generated: 2025-10-03 21:30:30_
**Root:** D:\Laragon\www\alazharskripsi


## Struktur Proyek (filtered, no depth limit)
```
.git
app
bootstrap
config
database
node_modules
public
resources
routes
storage
tests
vendor
whatsapp-service
.editorconfig
.env
.env.backup
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
digest.ps1
package-lock.json
package.json
phpunit.xml
postcss.config.js
project_digest.md
project_digest_full.md
README.md
routes.txt
seeder.md
structure.txt
tailwind.config.js
tes-geocoding.html
vite.config.js
app\Console
app\Exports
app\Helpers
app\Http
app\Jobs
app\Models
app\Providers
app\View
app\Console\Commands
app\Console\Kernel.php
app\Console\Commands\GenerateTunggakan.php
app\Console\Commands\SendTunggakanReminders.php
app\Exports\PembayaranExport.php
app\Helpers\TerbilangHelper.php
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Controllers\Api
app\Http\Controllers\Auth
app\Http\Controllers\Bendahara
app\Http\Controllers\KetuaYayasan
app\Http\Controllers\AkunWaliController.php
app\Http\Controllers\BendaharaController.php
app\Http\Controllers\Controller.php
app\Http\Controllers\DashboardController.php
app\Http\Controllers\DetailSiswaController.php
app\Http\Controllers\KwitansiController.php
app\Http\Controllers\LaporanController.php
app\Http\Controllers\MidtransController.php
app\Http\Controllers\MidtransWebhookController.php
app\Http\Controllers\PaymentController.php
app\Http\Controllers\PembayaranController.php
app\Http\Controllers\PemetaanController.php
app\Http\Controllers\PengaturanController.php
app\Http\Controllers\PilihMetodeController.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\RiwayatController.php
app\Http\Controllers\SiswaController.php
app\Http\Controllers\TunggakanController.php
app\Http\Controllers\Api\LocationController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Controllers\Bendahara\DashboardController.php
app\Http\Controllers\KetuaYayasan\DashboardController.php
app\Http\Middleware\RoleMiddleware.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Jobs\SendPasswordResetNotification.php
app\Jobs\SendTunggakanNotification.php
app\Jobs\SendWhatsappNotification.php
app\Models\Kwitansi.php
app\Models\Pembayaran.php
app\Models\Pengaturan.php
app\Models\Siswa.php
app\Models\Tunggakan.php
app\Models\User.php
app\Providers\AppServiceProvider.php
app\View\Components
app\View\Components\AppLayout.php
app\View\Components\GuestLayout.php
bootstrap\cache
bootstrap\app.php
bootstrap\providers.php
bootstrap\cache\packages.php
bootstrap\cache\services.php
config\app.php
config\auth.php
config\cache.php
config\database.php
config\filesystems.php
config\logging.php
config\mail.php
config\midtrans.php
config\queue.php
config\services.php
config\session.php
database\factories
database\migrations
database\seeders
database\.gitignore
database\factories\UserFactory.php
database\migrations\0001_01_01_000000_create_users_table.php
database\migrations\0001_01_01_000001_create_cache_table.php
database\migrations\0001_01_01_000002_create_jobs_table.php
database\migrations\2025_05_31_142310_create_gurus_table.php
database\migrations\2025_05_31_142329_create_siswas_table.php
database\migrations\2025_05_31_142348_create_pembayarans_table.php
database\migrations\2025_05_31_142400_create_kwitansis_table.php
database\migrations\2025_05_31_142417_create_tunggakans_table.php
database\migrations\2025_05_31_142419_create_pengaturans_table.php
database\migrations\2025_07_23_045357_add_snap_token_to_pembayaran_table.php
database\migrations\2025_09_15_072256_add_nomor_wa_to_users_table.php
database\migrations\2025_09_16_051807_add_location_columns_to_gurus_and_siswas_tables.php
database\migrations\2025_09_18_113003_add_last_reminder_sent_at_to_tunggakan_table.php
database\migrations\2025_09_25_015523_remove_guru_functionality.php
database\seeders\DatabaseSeeder.php
database\seeders\PengaturanSeeder.php
database\seeders\SiswaSeeder.php
database\seeders\UserSeeder.php
public\build
public\images
public\storage
public\.htaccess
public\favicon.ico
public\hot
public\index.php
public\robots.txt
public\images\historyicon.png
public\images\homeicon.png
public\images\inputicon.png
public\images\logoalazhar.png
public\images\logoyayasan.jpg
public\images\uploadicon.png
public\images\verifyicon.png
public\images\walleticon.png
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\akun
resources\views\auth
resources\views\bendahara
resources\views\components
resources\views\ketua
resources\views\kwitansi
resources\views\laporan
resources\views\layouts
resources\views\pembayaran
resources\views\pemetaan
resources\views\pengaturan
resources\views\profile
resources\views\riwayat
resources\views\siswa
resources\views\tunggakan
resources\views\wali
resources\views\dashboard.blade.php
resources\views\payment.blade.php
resources\views\welcome.blade.php
resources\views\akun\edit.blade.php
resources\views\akun\index.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\bendahara\dashboard.blade.php
resources\views\bendahara\verifikasi.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\ketua\dashboard.blade.php
resources\views\kwitansi\template.blade.php
resources\views\laporan\index.blade.php
resources\views\laporan\pdf.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\pembayaran\manual_create.blade.php
resources\views\pembayaran\manual_index.blade.php
resources\views\pembayaran\midtrans.blade.php
resources\views\pembayaran\pilih-metode.blade.php
resources\views\pembayaran\upload_transfer.blade.php
resources\views\pemetaan\index.blade.php
resources\views\pengaturan\index.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\riwayat\index.blade.php
resources\views\siswa\create.blade.php
resources\views\siswa\edit.blade.php
resources\views\siswa\index.blade.php
resources\views\tunggakan\index.blade.php
resources\views\wali\dashboard.blade.php
resources\views\wali\detail-siswa.blade.php
routes\auth.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\private
storage\app\public
storage\app\templates
storage\app\.gitignore
storage\app\private\.gitignore
storage\app\public\bukti-transfer
storage\app\public\kwitansi
storage\app\public\.gitignore
storage\app\public\bukti-transfer\0tckG9rLMm36iir2z0etRn5dRBRdE38lARFokqCz.jpg
storage\app\public\bukti-transfer\3Djwu8Pu2v5pbAReb1LjCNySF3GbR6twsyWSaHil.jpg
storage\app\public\bukti-transfer\591cEnxJb6pEIpnzRISPk7DhR0mYbwyGq0Oavzag.jpg
storage\app\public\bukti-transfer\6WH9rukC3oWZA7g3OT4sWnI7bj3IWHz7qMx2mzhx.jpg
storage\app\public\bukti-transfer\94wzukONzR3kAjn5sYdNZzWOQSdJdeQzZH5b9aaA.jpg
storage\app\public\bukti-transfer\bXIVwy5AcJSKvCw8GdUze3T5ry9lsojzmgDsi011.png
storage\app\public\bukti-transfer\DMPh4D6Rq9X1EGbiTGCCIo37MZDtQAuO2KokdgTu.jpg
storage\app\public\bukti-transfer\hwbEM4LkBzTGljIqDoDSxCWbuDY0sI8d0nt8O6nS.jpg
storage\app\public\bukti-transfer\ifJ9CSoYFQyOPsT8YxKmUkdZF9HZp691Pk5HQMQ6.jpg
storage\app\public\bukti-transfer\JmAQfqBXjq6N68PYof8U18sxYgxj6cKg7oc4honl.jpg
storage\app\public\bukti-transfer\LNLfheIQA0fiMm2uOtS9MpIyerI3ltQ5FChsxkz1.png
storage\app\public\bukti-transfer\Ndh2J63qwMTM6v6n46KYOlNSwDjUcGhjaYB8imfj.jpg
storage\app\public\bukti-transfer\pDcmEWuNbmHYqEnBRpYFFgDMcmJsK5H7YdwV7MiM.jpg
storage\app\public\bukti-transfer\pI9L5Vox6UAMdopDkebC1qJAB8gtpxgwZbPwUuW4.jpg
storage\app\public\bukti-transfer\SM413rJ1ZcpfIbotqrprEOvF7cCO4KVkfYhvBo6s.jpg
storage\app\public\bukti-transfer\U0zUzLbD5WcEKBkXVxTNV3SSY2bQycZr9BHq8ZF2.jpg
storage\app\public\bukti-transfer\UxWlgIYFjNoinwgVG85pgGiAX6FEdXcrgzhqsYM1.jpg
storage\app\public\bukti-transfer\WYe5AjmxR7UnJwmbeAphVfyCFNLgKxyxHFy7HnWv.jpg
storage\app\public\bukti-transfer\yo484sRCnSF1Lpl0bgVqiNyJduY2qqKuqfgBVo6n.jpg
storage\app\public\bukti-transfer\ZS9wSnPMw8pYYZFcQ2wMgqMEw92MXoIazN2tiXlu.jpg
storage\app\public\kwitansi\kwitansi-1-1757915108.pdf
storage\app\public\kwitansi\kwitansi-1-1758376778.docx
storage\app\public\kwitansi\kwitansi-1-1758384368.docx
storage\app\public\kwitansi\kwitansi-1-1758436498.docx
storage\app\public\kwitansi\kwitansi-1-1758453915.docx
storage\app\public\kwitansi\kwitansi-1-1758853481.docx
storage\app\public\kwitansi\kwitansi-1-1758889832.docx
storage\app\public\kwitansi\kwitansi-10-1755671825.pdf
storage\app\public\kwitansi\kwitansi-10-1757922868.docx
storage\app\public\kwitansi\kwitansi-11-1757923712.docx
storage\app\public\kwitansi\kwitansi-12-1757988452.docx
storage\app\public\kwitansi\kwitansi-13-1757988568.docx
storage\app\public\kwitansi\kwitansi-14-1757988728.docx
storage\app\public\kwitansi\kwitansi-15-1757988812.docx
storage\app\public\kwitansi\kwitansi-16-1757988853.docx
storage\app\public\kwitansi\kwitansi-17-1757989031.docx
storage\app\public\kwitansi\kwitansi-18-1757989250.docx
storage\app\public\kwitansi\kwitansi-19-1757989447.docx
storage\app\public\kwitansi\kwitansi-2-1757915457.pdf
storage\app\public\kwitansi\kwitansi-2-1758384375.docx
storage\app\public\kwitansi\kwitansi-2-1758438196.docx
storage\app\public\kwitansi\kwitansi-2-1758853571.docx
storage\app\public\kwitansi\kwitansi-2-1758877175.docx
storage\app\public\kwitansi\kwitansi-2-1759426763.docx
storage\app\public\kwitansi\kwitansi-20-1757989499.docx
storage\app\public\kwitansi\kwitansi-21-1757989922.docx
storage\app\public\kwitansi\kwitansi-22-1758003206.docx
storage\app\public\kwitansi\kwitansi-3-1758438216.docx
storage\app\public\kwitansi\kwitansi-3-1758877180.docx
storage\app\public\kwitansi\kwitansi-5-1757917613.docx
storage\app\public\kwitansi\kwitansi-6-1757918608.docx
storage\app\public\kwitansi\kwitansi-7-1755669945.pdf
storage\app\public\kwitansi\kwitansi-7-1757922454.docx
storage\app\public\kwitansi\kwitansi-8-1755670220.pdf
storage\app\public\kwitansi\kwitansi-8-1757922509.docx
storage\app\public\kwitansi\kwitansi-9-1755670818.pdf
storage\app\public\kwitansi\kwitansi-9-1757922644.docx
storage\app\public\kwitansi\kwitansi-KW-2025-8-6.pdf
storage\app\templates\kwitansi_template.docx
storage\app\templates\kwitansi_template1.docx
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\laravel-excel
storage\framework\cache\.gitignore
storage\framework\cache\data\.gitignore
storage\framework\cache\laravel-excel\laravel-excel-5d4dQei8S0VZtHkJ27NMjoS7OBBAPlg3.xlsx
storage\framework\sessions\.gitignore
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\020ba7464e85f87c4475ed38c04322b9.php
storage\framework\views\09a7c8482c6e5a17a0a9a25432fbe547.php
storage\framework\views\105b5ff0c377491b0ac4a9b05e57a80f.php
storage\framework\views\140be810c6d1d8c5493a22d62b12e637.php
storage\framework\views\17626ff0a0bc9a01edf0f8bed992c842.php
storage\framework\views\228bd0b4605bbaec738e75e233f26191.php
storage\framework\views\273988ab71d8dce2d7ebd15d7d39b1a0.php
storage\framework\views\29b9873d46b252660074688efa1aaccd.php
storage\framework\views\3320c1723d088fe593f5f39481f5b5eb.php
storage\framework\views\3383ecbf1addae63c1a04ef88a765118.php
storage\framework\views\3b240750f1d842552d0ea4b7d88091c7.php
storage\framework\views\40b6ff27839d47f455db6a794796a233.php
storage\framework\views\4508058a6e0ff5db2e085cfc0bdd9f7a.php
storage\framework\views\4b20185d74f69916349b547af5921882.php
storage\framework\views\4b58e8a6b6736953110312d54bf38d31.php
storage\framework\views\4f95587a7658cb05735a80cb093a497f.php
storage\framework\views\56595294ee291b65fac38c234a14d063.php
storage\framework\views\5b290d1076a93087c074cb9b13187cf0.php
storage\framework\views\5c0bdedc719924690cced7e302b8bf67.php
storage\framework\views\61dcbe8020a7f47c9b9ec8b6c99f47fb.php
storage\framework\views\65df369a4528e71cd6754e70ddb11ac3.php
storage\framework\views\689d09919c93a0fe09463f0b752ab503.php
storage\framework\views\68e6789bd5943954ba36bbc75954e838.php
storage\framework\views\6a938c9f296bb062f05de09fdd65ff72.php
storage\framework\views\70d31578ce1dab60794f303e4fae25d2.php
storage\framework\views\72b8fde34fcf0549588b5a90e3193918.php
storage\framework\views\7328c19bf1b41f51f3599077ae7c3a26.php
storage\framework\views\73d95d1859230ec11dca0301b54505d0.php
storage\framework\views\759f27bd6a6de3dfeecf83ef19d91e1b.php
storage\framework\views\803f96141da497d312849f0f99b6b1f2.php
storage\framework\views\8e2060a2c7709d5097a3f934e7f4a5ce.php
storage\framework\views\8ee76bf2dadea44b9e71d6509922d5d2.php
storage\framework\views\92c395475f552d2d1cedc1d7cf9abdd0.php
storage\framework\views\986af5cca8def713706249e59bf409fd.php
storage\framework\views\9b9a37feb8df6f7efbb959e98db31a46.php
storage\framework\views\9f65c276834c7f4cdec5b39fc5432ff9.php
storage\framework\views\a6b5dbc9773c165592b1a4e398445956.php
storage\framework\views\a6f3e9c7fb94fda00f7a95338dde382b.php
storage\framework\views\a998dc2a3f7f3986099df1ce97876943.php
storage\framework\views\aeaeafba3e10b429d9b038f56fbfedcf.php
storage\framework\views\aef77bd3098e4b4d81b83abaa7cdc437.php
storage\framework\views\b0a54795e0c776b45801907991c89cf4.php
storage\framework\views\b5d814926f19b152feef1701b7046d0a.php
storage\framework\views\c138776a780a86e1edc42a1a668b094c.php
storage\framework\views\c3d64acd4d1e73273b252f3b58d96f1d.php
storage\framework\views\c5ac81f5af9337b26dcb7a15ac07753a.php
storage\framework\views\ca2fe6989e6fde34b86ac36d3951f9d0.php
storage\framework\views\caba884bb2abeab7101e594d7d5487ca.php
storage\framework\views\cbc52b083f3936f9817447ed78b10c91.php
storage\framework\views\d2c1d62ba99d987ea7be6fb2c6fa66c2.php
storage\framework\views\d82724f8b123daa8a4067222ecb5de35.php
storage\framework\views\db45a5f7f23402fc46da9dc15d4920dc.php
storage\framework\views\e1175654487937b68c5f4f52e6a65eb8.php
storage\framework\views\e28065e432637db6ed8119ad0244e993.php
storage\framework\views\e299118d2668b3ebea456fb14f48c4ce.php
storage\framework\views\e853581d5a244b297cd5541739ccf847.php
storage\framework\views\f03997e446bad3f066fd89508960f607.php
storage\framework\views\f188a06199ad1d49f7dab7ff511d2a90.php
storage\framework\views\f49d54ba614b452869e77f68e82f8e78.php
storage\framework\views\fa54ba9e6927a3266ebc1f8a53442eb9.php
storage\framework\views\fae151e9517f1219a945f6532af53a86.php
tests\Feature
tests\Unit
tests\TestCase.php
tests\Feature\Auth
tests\Feature\ExampleTest.php
tests\Feature\ProfileTest.php
tests\Feature\Auth\AuthenticationTest.php
tests\Feature\Auth\EmailVerificationTest.php
tests\Feature\Auth\PasswordConfirmationTest.php
tests\Feature\Auth\PasswordResetTest.php
tests\Feature\Auth\PasswordUpdateTest.php
tests\Feature\Auth\RegistrationTest.php
tests\Unit\ExampleTest.php
whatsapp-service\node_modules
whatsapp-service\index.js
whatsapp-service\package-lock.json
whatsapp-service\package.json
```


## Info Git
```
Remote:
origin	https://github.com/frhanp/alazharskripsi.git (fetch)
origin	https://github.com/frhanp/alazharskripsi.git (push)

Branch:
main

Last 5 commits:
e018a25 test deploy
34889ab ubah format kwitansi
e2f5296 add filter akun wali dan siswa
220cb90 tadi hilang midtrans
1b209e4 fix 1
```


## Dependencies (summary)
```
composer.json (require):
  (parse error / none)
composer.json (require-dev):
  (parse error / none)

package.json (dependencies):
  (parse error / none)
package.json (devDependencies):
  (parse error / none)
```


## Routes Files Content
```
===== routes\auth.php =====
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

===== routes\console.php =====
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

===== routes\web.php =====
<?php

use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\MidtransWebhookController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\PemetaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Bendahara\DashboardController as BendaharaDashboardController; // Beri alias
use App\Http\Controllers\KetuaYayasan\DashboardController as KetuaYayasanDashboardController;
use App\Http\Controllers\TunggakanController;
use App\Http\Controllers\PilihMetodeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\DetailSiswaController;
use App\Http\Controllers\AkunWaliController;

Route::get('/', function () {
    return view('welcome');
});

// MENJADI SEPERTI INI
Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('siswa', SiswaController::class)->except(['show']);
    Route::get('/riwayat', [RiwayatController::class, 'index'])
        ->middleware('role:wali_murid,bendahara,ketua_yayasan') // <-- KUNCINYA DI SINI
        ->name('riwayat.index');

    Route::get('/kwitansi/download/{kwitansi}', [KwitansiController::class, 'download'])->name('kwitansi.download');
});

Route::post('/midtrans/token', [PembayaranController::class, 'snapToken'])->name('midtrans.token');

Route::middleware(['auth', 'role:bendahara'])->group(function () {
    Route::get('/pembayaran/manual/create', [PembayaranController::class, 'createManual'])->name('pembayaran.manual.create');
    Route::post('/pembayaran/manual/store', [PembayaranController::class, 'storeManual'])->name('pembayaran.manual.store');
    //Route::get('/pembayaran/manual', [BendaharaController::class, 'indexManual'])->name('pembayaran.manual.index');

    //PENGECEKAN PEMBAYARAN
    Route::get('pembayaran/verifikasi', [PembayaranController::class, 'indexVerifikasi'])->name('pembayaran.verifikasi');
    Route::patch('pembayaran/verifikasi/{id}', [PembayaranController::class, 'updateVerifikasi'])->name('pembayaran.verifikasi.update');
    Route::get('/bendahara/dashboard', [BendaharaDashboardController::class, 'index'])->name('bendahara.dashboard');

    Route::get('/tunggakan', [TunggakanController::class, 'index'])->name('tunggakan.index');
    Route::post('/tunggakan/{id_tunggakan}/send-reminder', [TunggakanController::class, 'sendReminder'])->name('tunggakan.send-reminder');
    Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
    Route::post('/pengaturan', [PengaturanController::class, 'update'])->name('pengaturan.update');

    Route::resource('siswa', SiswaController::class)->except(['index', 'show']);

    Route::post('/siswa/{siswa}/reset-password', [SiswaController::class, 'resetPassword'])->name('siswa.reset-password');
    Route::resource('akun', AkunWaliController::class)->except(['create', 'store', 'show', 'destroy'])->parameters(['akun' => 'user']);
Route::post('/akun/{user}/reset-password', [AkunWaliController::class, 'resetPassword'])->name('akun.reset-password');
});

Route::middleware(['auth', 'role:wali_murid'])->group(function () {
    Route::get('/upload-transfer', [PembayaranController::class, 'createUpload'])->name('pembayaran.upload.create');
    Route::post('/upload-transfer', [PembayaranController::class, 'storeUpload'])->name('pembayaran.upload.store');
    Route::get('/pembayaran/{siswa}/pilih-metode', [PilihMetodeController::class, 'index'])->name('pembayaran.pilih-metode');

    //Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');



    // Route GET: tampilkan form bulan/tahun + tombol bayar
    Route::get('/pembayaran/midtrans/{id_siswa}', [MidtransController::class, 'showForm'])
        ->name('pembayaran.midtrans.form');


    // Route POST: proses Midtrans + tampilkan Snap
    Route::post('/pembayaran/midtrans/{id_siswa}', [MidtransController::class, 'createMidtrans'])
        ->name('pembayaran.midtrans');

    Route::get('/detail-siswa/{siswa}', [DetailSiswaController::class, 'index'])->name('wali.detail-siswa');
});
Route::post('/midtrans/callback', [MidtransWebhookController::class, 'handle']);




Route::get('/pembayaran', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::post('/payment/token', [PaymentController::class, 'createTransaction'])->name('payment.token');
Route::get('/api/locations', [LocationController::class, 'index'])->name('api.locations');
Route::get('/pemetaan', [PemetaanController::class, 'index'])->name('pemetaan.index');




Route::middleware(['auth', 'role:ketua_yayasan'])->prefix('ketua')->name('ketua.')->group(function () {
    Route::get('/dashboard', [KetuaYayasanDashboardController::class, 'dashboard'])->name('dashboard');
    // Nanti kita tambahkan route untuk laporan di sini\
});


// Grup baru untuk fitur yang bisa diakses oleh Bendahara DAN Ketua Yayasan
Route::middleware(['auth', 'role:bendahara,ketua_yayasan'])->group(function () {
    // Semua route terkait laporan dipindahkan ke sini
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/pdf', [LaporanController::class, 'exportPdf'])->name('laporan.export.pdf');
    Route::get('/laporan/excel', [LaporanController::class, 'exportExcel'])->name('laporan.export.excel');

    Route::get('/pemetaan', [PemetaanController::class, 'index'])->name('pemetaan.index');
    
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
});
require __DIR__ . '/auth.php';

```


## Routes (from command)
```

  GET|HEAD        / ............................................................................................................................. 
  GET|HEAD        _debugbar/assets/javascript ....................................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets .................................... debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} .............................. debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} ............................. debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open ........................................ debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain ............................ debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  GET|HEAD        akun .................................................................................... akun.index ΓÇ║ AkunWaliController@index
  PUT|PATCH       akun/{user} ........................................................................... akun.update ΓÇ║ AkunWaliController@update
  GET|HEAD        akun/{user}/edit .......................................................................... akun.edit ΓÇ║ AkunWaliController@edit
  POST            akun/{user}/reset-password ............................................. akun.reset-password ΓÇ║ AkunWaliController@resetPassword
  GET|HEAD        api/locations .................................................................... api.locations ΓÇ║ Api\LocationController@index
  GET|HEAD        bendahara/dashboard ................................................. bendahara.dashboard ΓÇ║ Bendahara\DashboardController@index
  GET|HEAD        confirm-password ................................................... password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password ..................................................................... Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard ..................................................................................... dashboard ΓÇ║ DashboardController
  GET|HEAD        detail-siswa/{siswa} .......................................................... wali.detail-siswa ΓÇ║ DetailSiswaController@index
  POST            email/verification-notification ........................ verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password .................................................... password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password ....................................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        ketua/dashboard .................................................. ketua.dashboard ΓÇ║ KetuaYayasan\DashboardController@dashboard
  GET|HEAD        kwitansi/download/{kwitansi} .................................................. kwitansi.download ΓÇ║ KwitansiController@download
  GET|HEAD        laporan ............................................................................... laporan.index ΓÇ║ LaporanController@index
  GET|HEAD        laporan/excel ............................................................ laporan.export.excel ΓÇ║ LaporanController@exportExcel
  GET|HEAD        laporan/pdf .................................................................. laporan.export.pdf ΓÇ║ LaporanController@exportPdf
  GET|HEAD        login ...................................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login ............................................................................... Auth\AuthenticatedSessionController@store
  POST            logout ................................................................... logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  POST            midtrans/callback ............................................................................ MidtransWebhookController@handle
  POST            midtrans/token ................................................................ midtrans.token ΓÇ║ PembayaranController@snapToken
  PUT             password ..................................................................... password.update ΓÇ║ Auth\PasswordController@update
  POST            payment/token ............................................................. payment.token ΓÇ║ PaymentController@createTransaction
  GET|HEAD        pembayaran ................................................................... payment.page ΓÇ║ PaymentController@showPaymentPage
  GET|HEAD        pembayaran/manual/create ......................................... pembayaran.manual.create ΓÇ║ PembayaranController@createManual
  POST            pembayaran/manual/store ............................................ pembayaran.manual.store ΓÇ║ PembayaranController@storeManual
  GET|HEAD        pembayaran/midtrans/{id_siswa} ......................................... pembayaran.midtrans.form ΓÇ║ MidtransController@showForm
  POST            pembayaran/midtrans/{id_siswa} ........................................ pembayaran.midtrans ΓÇ║ MidtransController@createMidtrans
  GET|HEAD        pembayaran/verifikasi ............................................ pembayaran.verifikasi ΓÇ║ PembayaranController@indexVerifikasi
  PATCH           pembayaran/verifikasi/{id} ............................... pembayaran.verifikasi.update ΓÇ║ PembayaranController@updateVerifikasi
  GET|HEAD        pembayaran/{siswa}/pilih-metode ......................................... pembayaran.pilih-metode ΓÇ║ PilihMetodeController@index
  GET|HEAD        pemetaan ............................................................................ pemetaan.index ΓÇ║ PemetaanController@index
  GET|HEAD        pengaturan ...................................................................... pengaturan.index ΓÇ║ PengaturanController@index
  POST            pengaturan .................................................................... pengaturan.update ΓÇ║ PengaturanController@update
  GET|HEAD        profile ................................................................................. profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile ............................................................................. profile.update ΓÇ║ ProfileController@update
  DELETE          profile ........................................................................... profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register ...................................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST            register .................................................................................. Auth\RegisteredUserController@store
  POST            reset-password .............................................................. password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} ..................................................... password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        riwayat ............................................................................... riwayat.index ΓÇ║ RiwayatController@index
  GET|HEAD        siswa ..................................................................................... siswa.index ΓÇ║ SiswaController@index
  POST            siswa ..................................................................................... siswa.store ΓÇ║ SiswaController@store
  GET|HEAD        siswa/create ............................................................................ siswa.create ΓÇ║ SiswaController@create
  PUT|PATCH       siswa/{siswa} ........................................................................... siswa.update ΓÇ║ SiswaController@update
  DELETE          siswa/{siswa} ......................................................................... siswa.destroy ΓÇ║ SiswaController@destroy
  GET|HEAD        siswa/{siswa}/edit .......................................................................... siswa.edit ΓÇ║ SiswaController@edit
  POST            siswa/{siswa}/reset-password ............................................. siswa.reset-password ΓÇ║ SiswaController@resetPassword
  GET|HEAD        storage/{path} .................................................................................................. storage.local
  GET|HEAD        tunggakan ......................................................................... tunggakan.index ΓÇ║ TunggakanController@index
  POST            tunggakan/{id_tunggakan}/send-reminder ............................. tunggakan.send-reminder ΓÇ║ TunggakanController@sendReminder
  GET|HEAD        up ............................................................................................................................ 
  GET|HEAD        upload-transfer .................................................. pembayaran.upload.create ΓÇ║ PembayaranController@createUpload
  POST            upload-transfer .................................................... pembayaran.upload.store ΓÇ║ PembayaranController@storeUpload
  GET|HEAD        verify-email ..................................................... verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} ..................................................... verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                                              Showing [66] routes

```


## Controllers Content
```
===== app\Http\Controllers\Api\LocationController.php =====
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class LocationController extends Controller
{
    public function index()
    {
        // Ambil data guru yang memiliki koordinat
        // $gurus = Guru::whereNotNull('latitude')
        //     ->whereNotNull('longitude')
        //     ->get()
        //     ->map(function ($guru) {
        //         return [
        //             'nama' => $guru->nama_guru,
        //             'tipe' => 'guru',
        //             'info' => "Alamat: " . ($guru->alamat ?? '-'), // Info tambahan
        //             'latitude' => $guru->latitude,
        //             'longitude' => $guru->longitude,
        //         ];
        //     });

        // Ambil data siswa yang memiliki koordinat
        $siswas = Siswa::with('wali')->whereNotNull('latitude') // Eager load relasi wali
            ->whereNotNull('longitude')
            ->get()
            ->map(function ($siswa) {
                return [
                    'nama' => $siswa->nama_siswa,
                    'tipe' => 'siswa',
                    // Info tambahan untuk siswa
                    'info' => "Kelas: {$siswa->kelas}<br>Wali: {$siswa->wali->name}<br>Alamat: " . ($siswa->alamat ?? '-'),
                    'latitude' => $siswa->latitude,
                    'longitude' => $siswa->longitude,
                ];
            });

        // Gabungkan kedua data menjadi satu
        $locations = $siswas;

        // Kembalikan sebagai response JSON
        return response()->json($locations);
    }
}

===== app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Cek role setelah login
        if ($request->user()->role === 'bendahara') {
            return redirect()->route('bendahara.dashboard');
        }

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

===== app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

===== app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
    }
}

===== app\Http\Controllers\Auth\NewPasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\PasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}

===== app\Http\Controllers\Auth\PasswordResetLinkController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\RegisteredUserController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\VerifyEmailController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}

===== app\Http\Controllers\Bendahara\DashboardController.php =====
<?php

namespace App\Http\Controllers\Bendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        // 1. Kartu Statistik: Pemasukan terverifikasi bulan ini
        $pemasukanBulanIni = Pembayaran::where('status', 'diterima')
            ->whereYear('tanggal_verifikasi', now()->year)
            ->whereMonth('tanggal_verifikasi', now()->month)
            ->sum('jumlah');

        // 2. Kartu Statistik: Menunggu Verifikasi
        $menungguVerifikasi = Pembayaran::where('status', 'menunggu')->count();

        // 3. Kartu Statistik: Total Tunggakan
        $totalTunggakan = Tunggakan::where('status', 'belum_bayar')->sum('jumlah_tunggakan');

        // 4. Kartu Statistik: Siswa Aktif
        $siswaAktif = Siswa::count();

        // 5. Daftar "Perlu Tindakan": 5 pembayaran menunggu verifikasi
        $perluTindakan = Pembayaran::where('status', 'menunggu')
            ->with('siswa')
            ->latest()
            ->take(5)
            ->get();
            
        // 6. Aktivitas Terbaru: 5 pembayaran terakhir yang diterima
        $aktivitasTerbaru = Pembayaran::where('status', 'diterima')
            ->with('siswa')
            ->latest('tanggal_verifikasi')
            ->take(5)
            ->get();

        // 7. Data untuk Grafik Pemasukan 6 Bulan Terakhir
        $chartData = Pembayaran::select(
                DB::raw('YEAR(tanggal_verifikasi) as year'),
                DB::raw('MONTH(tanggal_verifikasi) as month'),
                DB::raw('SUM(jumlah) as total')
            )
            ->where('status', 'diterima')
            ->where('tanggal_verifikasi', '>=', Carbon::now()->subMonths(6))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $labels = $chartData->map(function($item) {
            return Carbon::create()->month($item->month)->format('F');
        });
        $data = $chartData->pluck('total');

        return view('bendahara.dashboard', compact(
            'pemasukanBulanIni',
            'menungguVerifikasi',
            'totalTunggakan',
            'siswaAktif',
            'perluTindakan',
            'aktivitasTerbaru',
            'labels',
            'data'
        ));
    }
}

===== app\Http\Controllers\KetuaYayasan\DashboardController.php =====
<?php

namespace App\Http\Controllers\KetuaYayasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard eksekutif untuk Ketua Yayasan.
     */
    public function dashboard()
    {
        // --- DATA UNTUK KARTU STATISTIK ---
        $pemasukanTotal = Pembayaran::where('status', 'diterima')->sum('jumlah');
        $siswaAktif = Siswa::count();
        $totalTunggakan = Tunggakan::where('status', 'belum_bayar')->sum('jumlah_tunggakan');
        
        // Menghitung jumlah wali murid unik yang anaknya terdaftar
        $waliMuridAktif = Siswa::distinct('id_wali')->count('id_wali');

        // --- DATA UNTUK GRAFIK PIE STATUS PEMBAYARAN ---
        $statusPembayaran = Pembayaran::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');

        // --- DATA UNTUK GRAFIK BATANG PEMASUKAN 12 BULAN ---
        $pemasukanPerBulan = Pembayaran::select(
                DB::raw('YEAR(tanggal_verifikasi) as year'),
                DB::raw('MONTH(tanggal_verifikasi) as month'),
                DB::raw('SUM(jumlah) as total')
            )
            ->where('status', 'diterima')
            ->where('tanggal_verifikasi', '>=', Carbon::now()->subYear())
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        
        $chartLabels = $pemasukanPerBulan->map(function($item) {
            return Carbon::create()->month($item->month)->format('M \''. substr($item->year, -2));
        });
        $chartData = $pemasukanPerBulan->pluck('total');

        return view('ketua.dashboard', compact(
            'pemasukanTotal',
            'siswaAktif',
            'waliMuridAktif', // Menggantikan guruAktif
            'totalTunggakan',
            'statusPembayaran',
            'chartLabels',
            'chartData'
        ));
    }
}

===== app\Http\Controllers\AkunWaliController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendPasswordResetNotification;

class AkunWaliController extends Controller
{
    // Menampilkan daftar semua akun wali murid
    public function index(Request $request) // Tambahkan Request
    {
        // =======================================================
        // AWAL PERUBAHAN
        // =======================================================
        $query = User::where('role', 'wali_murid')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $walis = $query->paginate(15)->withQueryString();
        // =======================================================
        // AKHIR PERUBAHAN
        // =======================================================

        return view('akun.index', compact('walis'));
    }

    // Menampilkan form edit untuk akun wali murid
    public function edit(User $user)
    {
        return view('akun.edit', compact('user'));
    }

    // Memperbarui data akun wali murid
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'nomor_wa' => 'nullable|string|max:15',
        ]);

        $user->update($request->only('name', 'email', 'nomor_wa'));

        return redirect()->route('akun.index')->with('success', 'Data akun wali murid berhasil diperbarui.');
    }

    // Mereset password dari halaman manajemen
    public function resetPassword(User $user)
    {
        $newPassword = 'Spp' . rand(1000, 9999);
        $user->password = Hash::make($newPassword);
        $user->save();

        SendPasswordResetNotification::dispatch($user, $newPassword);

        return back()->with('success', 'Password untuk ' . $user->name . ' berhasil di-reset dan notifikasi telah dikirim.');
    }
}

===== app\Http\Controllers\BendaharaController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kwitansi;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Http\Controllers\KwitansiController;

class BendaharaController extends Controller
{
    public function verifikasiPembayaran()
    {
        $pembayaranMenunggu = Pembayaran::where('status', 'menunggu')
            ->with('siswa')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('bendahara.verifikasi', compact('pembayaranMenunggu'));
    }

    public function detailPembayaran($id)
    {
        $pembayaran = Pembayaran::with('siswa')->findOrFail($id);
        return view('bendahara.detailpembayaran', compact('pembayaran'));
    }

    // Method prosesVerifikasi Anda akan menjadi pusat logika ACC
    public function prosesVerifikasi(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $request->validate([
            'status' => 'required|in:diterima,ditolak',
            'catatan' => 'nullable|string|max:255'
        ]);

        $pembayaran->update([
            'status' => $request->status,
            'verified_by' => Auth::id(),
            'tanggal_verifikasi' => now(),
            'catatan' => $request->catatan
        ]);

        // =======================================================
        // PEMICU PEMBUATAN KWITANSI
        // =======================================================
        if ($pembayaran->status === 'diterima') {
            (new KwitansiController)->generateAndSave($pembayaran);
        }
        // =======================================================

        return redirect()->route('bendahara.verifikasi')
            ->with('success', 'Pembayaran berhasil diverifikasi');
    }
}

===== app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

===== app\Http\Controllers\DashboardController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller
{
     /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();

        // Cek role dan arahkan ke view yang sesuai
        if ($user->role === 'bendahara') {
            return app(\App\Http\Controllers\Bendahara\DashboardController::class)->index();
        }

        if ($user->role === 'wali_murid') {
            $anakList = $user->siswa()->with('tunggakan')->get();
        
            $dataAnak = $anakList->map(function ($anak) {
                $bulanIni = Carbon::now()->format('F');
                $tahunIni = Carbon::now()->year;
        
                $sppBulanIniLunas = Pembayaran::where('id_siswa', $anak->id_siswa)
                    ->where('tahun', $tahunIni)
                    ->where(function ($query) use ($bulanIni) {
                        // cek kolom bulan baik JSON maupun string biasa
                        $query->orWhere(function ($q) use ($bulanIni) {
                            $q->whereRaw("JSON_VALID(bulan)")
                              ->whereJsonContains('bulan', $bulanIni);
                        })
                        ->orWhere('bulan', $bulanIni);
                    })
                    ->where('status', 'diterima')
                    ->exists();
        
                $totalTunggakan = $anak->tunggakan
                    ->where('status', 'belum_bayar')
                    ->sum('jumlah_tunggakan');
        
                return [
                    'id_siswa' => $anak->id_siswa,
                    'nama_siswa' => $anak->nama_siswa,
                    'kelas' => $anak->kelas,
                    'spp_bulan_ini_lunas' => $sppBulanIniLunas,
                    'total_tunggakan' => $totalTunggakan,
                ];
            });
        
            return view('wali.dashboard', ['dataAnak' => $dataAnak]);
        }
        

        if ($user->role === 'ketua_yayasan') {
            // Redirect ke route dashboard ketua yayasan yang baru kita buat
            return redirect()->route('ketua.dashboard');
        }

        // Default dashboard untuk role lain (misal: ketua_yayasan)
        return view('dashboard');
    }
}

===== app\Http\Controllers\DetailSiswaController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class DetailSiswaController extends Controller
{
    public function index(Siswa $siswa)
    {
        // Pastikan hanya wali murid yang bersangkutan yang bisa akses
        if ($siswa->id_wali !== Auth::user()->id) {
            abort(403, 'Akses Ditolak');
        }

        // Ambil semua pembayaran & tunggakan untuk siswa ini dalam tahun berjalan
        $pembayaranTahunIni = $siswa->pembayaran()
            ->where('tahun', now()->year)
            ->get()
            ->keyBy(function($item) {
                // Karena 'bulan' bisa array, kita ambil yang pertama untuk key
                return is_array($item->bulan) ? $item->bulan[0] : $item->bulan;
            });

        $tunggakanTahunIni = $siswa->tunggakan()
            ->where('tahun', now()->year)
            ->get()
            ->keyBy('bulan');

        // Siapkan data status untuk 12 bulan
        $statusPerBulan = [];
        $semuaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        foreach ($semuaBulan as $bulan) {
            $status = 'Belum Jatuh Tempo'; // Default
            if (isset($pembayaranTahunIni[$bulan])) {
                $status = $pembayaranTahunIni[$bulan]->status; // Ambil status dari pembayaran
            } elseif (isset($tunggakanTahunIni[$bulan])) {
                $status = 'belum_bayar'; // Ambil status dari tunggakan
            }
            $statusPerBulan[$bulan] = $status;
        }

        return view('wali.detail-siswa', compact('siswa', 'statusPerBulan'));
    }
}

===== app\Http\Controllers\KwitansiController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use PhpOffice\PhpWord\TemplateProcessor; // Ganti PDF dengan TemplateProcessor
use Carbon\Carbon; // Tambahkan untuk format tanggal
use App\Helpers\TerbilangHelper;
use App\Jobs\SendWhatsappNotification;


class KwitansiController extends Controller
{
    public function index()
    {
        $kwitansi = Kwitansi::with('pembayaran.siswa')->latest()->paginate(10);
        return view('kwitansi.index', compact('kwitansi'));
    }

    public function show($id)
    {
        $kwitansi = Kwitansi::with('pembayaran.siswa')->findOrFail($id);
        return view('kwitansi.show', compact('kwitansi'));
    }

    public function download(Kwitansi $kwitansi)
    {
        $pathToFile = $kwitansi->file_kwitansi;
        $fileName = basename($pathToFile);
        $fullPath = storage_path('app/public/' . $pathToFile);

        if (!file_exists($fullPath)) {
            abort(404, 'File kwitansi tidak ditemukan.');
        }

        return response()->download($fullPath, $fileName);
    }

    /**
     * Fungsi utama untuk membuat DOCX, menyimpannya, dan mencatat ke database.
     *
     * @param Pembayaran $pembayaran
     * @return Kwitansi|null
     */
    public function generateAndSave(Pembayaran $pembayaran): ?Kwitansi
    {
        if ($pembayaran->kwitansi) {
            return $pembayaran->kwitansi;
        }

        try {
            // =======================================================
            // AWAL PERUBAHAN
            // =======================================================
            
            // 1. Muat relasi siswa beserta walinya
            $pembayaran->load(['siswa.wali']);
            
            // =======================================================
            // AKHIR PERUBAHAN
            // =======================================================
            
            $noKwitansi = 'KW/' . now()->year . '/' . now()->month . '/' . $pembayaran->id_pembayaran;
            $kwitansi = Kwitansi::create([
                'id_pembayaran' => $pembayaran->id_pembayaran,
                'no_kwitansi' => $noKwitansi,
                'tanggal_terbit' => now(),
                'file_kwitansi' => '', // Kosongkan dulu, akan diisi nanti
            ]);
    
            $templatePath = storage_path('app/templates/kwitansi_template.docx');
            if (!file_exists($templatePath)) {
                Log::error("Template kwitansi tidak ditemukan di: " . $templatePath);
                return null;
            }
    
            $directoryName = 'kwitansi';
            $fileName = 'kwitansi-' . $pembayaran->id_pembayaran . '-' . time() . '.docx';
            $databasePath = $directoryName . '/' . $fileName;
            $fullOutputPath = storage_path('app/public/' . $databasePath);
    
            Storage::disk('public')->makeDirectory($directoryName);
    
            $templateProcessor = new TemplateProcessor($templatePath);
    
            $bulanText = is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan;
            $terbilangText = ucwords(TerbilangHelper::convert($pembayaran->jumlah)) . ' Rupiah';
    
            $templateProcessor->setValue('no_kwitansi', $kwitansi->no_kwitansi);
            $templateProcessor->setValue('tanggal_terbit', Carbon::parse($kwitansi->tanggal_terbit)->translatedFormat('d F Y'));
            $templateProcessor->setValue('nama_siswa', $pembayaran->siswa->nama_siswa);
            
            // =======================================================
            // AWAL PERUBAHAN
            // =======================================================
            // Tambahkan variabel nama_wali di sini
            $templateProcessor->setValue('nama_wali', $pembayaran->siswa->wali->name ?? 'Wali Murid');
            // =======================================================
            // AKHIR PERUBAHAN
            // =======================================================
            
            $templateProcessor->setValue('nis_siswa', $pembayaran->siswa->nis ?? '-');
            $templateProcessor->setValue('bulan_pembayaran', $bulanText);
            $templateProcessor->setValue('tahun_pembayaran', $pembayaran->tahun);
            $templateProcessor->setValue('jumlah_rupiah', number_format($pembayaran->jumlah, 0, ',', '.'));
            $templateProcessor->setValue('jumlah_terbilang', $terbilangText);
    
            $templateProcessor->saveAs($fullOutputPath);
    
            $kwitansi->update(['file_kwitansi' => $databasePath]);
            SendWhatsappNotification::dispatch($kwitansi);
    
            Log::info("Kwitansi .docx berhasil dibuat untuk pembayaran ID {$pembayaran->id_pembayaran}.");
            return $kwitansi;
            
        } catch (\Exception $e) {
            Log::error("Gagal membuat kwitansi untuk pembayaran ID {$pembayaran->id_pembayaran}: " . $e->getMessage());
            Log::error($e->getTraceAsString());
            if (isset($kwitansi) && $kwitansi->exists) {
                $kwitansi->delete();
            }
            return null;
        }
    }
}

===== app\Http\Controllers\LaporanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PembayaranExport;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
    $query = Pembayaran::query()->with('siswa');

        // Terapkan filter berdasarkan input
        if ($request->filled('start_date')) {
            $query->whereDate('tanggal_verifikasi', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('tanggal_verifikasi', '<=', $request->end_date);
        }
        if ($request->filled('id_siswa')) {
            $query->where('id_siswa', $request->id_siswa);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $laporan = $query->latest('tanggal_verifikasi')->paginate(20)->withQueryString();
        $siswa = Siswa::orderBy('nama_siswa')->get();

        return view('laporan.index', compact('laporan', 'siswa'));
    }

    public function exportPdf(Request $request)
    {
        // Logika query sama persis dengan method index
        $query = Pembayaran::query()->with('siswa');
        if ($request->filled('start_date')) {
            $query->whereDate('tanggal_verifikasi', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('tanggal_verifikasi', '<=', $request->end_date);
        }
        if ($request->filled('id_siswa')) {
            $query->where('id_siswa', $request->id_siswa);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $laporan = $query->latest('tanggal_verifikasi')->get();

        // Buat PDF
        $pdf = Pdf::loadView('laporan.pdf', compact('laporan', 'request'));
        return $pdf->download('laporan-pembayaran-' . date('Y-m-d') . '.pdf');
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new PembayaranExport($request), 'laporan-pembayaran-' . date('Y-m-d') . '.xlsx');
    }
}

===== app\Http\Controllers\MidtransController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pengaturan;
use App\Models\Pembayaran;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;

class MidtransController extends Controller
{
    //PENGECEKAN PEMBAYARAN MIDTRANS

    public function showForm($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);
        // Di dalam method showForm()
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;

        return view('pembayaran.midtrans', compact('siswa', 'jumlahSPP'));
    }

    public function createMidtrans(Request $request, $id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);

        // Validasi input dasar
        $request->validate([
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'string|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'tahun' => 'required|integer',
        ]);

        // =======================================================
        // BLOK VALIDASI ANTI-DUPLIKAT
        // =======================================================
        $bulanYangDipilih = $request->bulan;
        $tahunYangDipilih = $request->tahun;
        $konflikBulan = [];

        foreach ($bulanYangDipilih as $bulan) {
            $pembayaranSudahAda = Pembayaran::where('id_siswa', $id_siswa)
                ->where('bulan', $bulan)
                ->where('tahun', $tahunYangDipilih)
                ->whereIn('status', ['menunggu', 'diterima'])
                ->exists();

            if ($pembayaranSudahAda) {
                $konflikBulan[] = $bulan;
            }
        }

        if (!empty($konflikBulan)) {
            $pesanError = 'Pembayaran untuk bulan ' . implode(', ', $konflikBulan) . ' sudah ada atau sedang menunggu konfirmasi.';
            return response()->json(['message' => $pesanError], 422);
        }
        // =======================================================
        // AKHIR BLOK VALIDASI
        // =======================================================

        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;
        $totalBayar = $jumlahSPP * count($request->bulan);

        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderId = 'SISWA-' . $siswa->id_siswa . '-' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $totalBayar,
            ],
            'customer_details' => [
                'first_name' => $siswa->nama_siswa,
                'email' => $siswa->wali->email ?? 'email@wali.com',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
        } catch (\Exception $e) {
            Log::error('Gagal membuat Snap Token: ' . $e->getMessage());
            return response()->json(['message' => 'Gagal terhubung dengan Midtrans.'], 500);
        }

        // Simpan pembayaran, buat satu record per bulan
        foreach ($request->bulan as $bulan) {
            Pembayaran::create([
                'id_siswa' => $siswa->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $jumlahSPP,
                'metode' => 'midtrans', // Ini akan diupdate oleh webhook nanti
                'status' => 'menunggu',
                'snap_token' => $snapToken,
                'midtrans_order_id' => $orderId,
                'is_midtrans' => true,
            ]);
        }

        return response()->json(['snapToken' => $snapToken, 'orderId' => $orderId]);
    }
}

===== app\Http\Controllers\MidtransWebhookController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;
use App\Models\Pembayaran;

class MidtransWebhookController extends Controller
{

    public function handle(Request $request)
    {
        // 1. Validasi Signature Key (Sudah Benar)
        $notificationPayload = $request->all();
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $orderId = $notificationPayload['order_id'] ?? null;
        $statusCode = $notificationPayload['status_code'] ?? null;
        $grossAmount = $notificationPayload['gross_amount'] ?? null;

        $stringToHash = $orderId . $statusCode . $grossAmount . $serverKey;
        $calculatedSignature = hash('sha512', $stringToHash);

        if (empty($notificationPayload['signature_key']) || $calculatedSignature !== $notificationPayload['signature_key']) {
            Log::error("Webhook Midtrans: Signature tidak valid untuk Order ID '$orderId'.");
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // 2. Tentukan status baru berdasarkan notifikasi
        $transactionStatus = $notificationPayload['transaction_status'];
        $fraudStatus = $notificationPayload['fraud_status'] ?? null;
        $newStatus = null;

        if ($transactionStatus == 'capture') {
            if ($fraudStatus == 'accept') {
                $newStatus = 'diterima';
            }
        } elseif ($transactionStatus == 'settlement') {
            $newStatus = 'diterima';
        } elseif ($transactionStatus == 'pending') {
            $newStatus = 'menunggu';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $newStatus = 'ditolak';
        }

        // 3. Jika ada status baru, lakukan update ke database
        if ($newStatus) {
            // --- INI BAGIAN YANG DIPERBAIKI ---
            // Lakukan update ke SEMUA record pembayaran yang cocok dengan order_id
            $updatedRows = Pembayaran::where('midtrans_order_id', $orderId)->update([
                'status' => $newStatus,
                'midtrans_transaction_status' => $transactionStatus // Simpan juga status asli dari Midtrans
            ]);
            // --- AKHIR PERBAIKAN ---

            if ($updatedRows > 0) {
                Log::info("Webhook Midtrans: $updatedRows baris untuk Order ID '$orderId' berhasil diupdate menjadi '$newStatus'.");

                // Buat kwitansi jika status berubah jadi 'diterima'
                if ($newStatus === 'diterima') {
                    $pembayaranList = Pembayaran::where('midtrans_order_id', $orderId)->get();
                    foreach ($pembayaranList as $pembayaran) {
                        (new KwitansiController)->generateAndSave($pembayaran);
                    }
                    Log::info("Webhook Midtrans: Kwitansi otomatis dibuat untuk Order ID '$orderId'.");
                }
            } else {
                // Abaikan notifikasi tes dari dashboard Midtrans
                if (str_starts_with($orderId, 'payment_notif_test_')) {
                    return response()->json(['message' => 'Notifikasi tes diterima dan diabaikan.'], 200);
                }
                Log::warning("Webhook Midtrans: Tidak ada baris yang diupdate untuk Order ID '$orderId'. Mungkin sudah diupdate sebelumnya atau tidak ditemukan.");
            }
        }

        return response()->json(['message' => 'Webhook berhasil diproses'], 200);
    }
}

===== app\Http\Controllers\PaymentController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        return view('payment');
    }

    public function createTransaction(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => rand(), // bisa diganti dengan ID transaksi nyata
                'gross_amount' => 100000,
            ],
            'customer_details' => [
                'first_name' => 'Budi',
                'email' => 'budi@example.com',
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return response()->json(['snapToken' => $snapToken]);
    }
}

===== app\Http\Controllers\PembayaranController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Kwitansi;
use App\Models\Tunggakan;
use App\Models\Pengaturan;
use Midtrans\Config;
use Midtrans\Snap;

class PembayaranController extends Controller
{
    public function create()
    {
        $siswas = Auth::user()->siswa;
        $selectedSiswa = $siswas->count() === 1 ? $siswas->first() : null;

        return view('pembayaran.create', [
            'siswas' => $siswas,
            'selectedSiswa' => $selectedSiswa
        ]);
    }

    public function store(Request $request)
    {
        $jumlah = 700000;
        $request->merge(['jumlah' => $jumlah]);

        $useMidtrans = Pengaturan::isMidtransActive();
        $metode = $useMidtrans ? 'midtrans' : 'transfer';
        $request->merge(['metode' => $metode]);

        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'tahun' => 'required|integer|min:2024|max:2030',
            'jumlah' => 'required|numeric|min:0',
            'metode' => 'required|in:transfer,langsung,midtrans',
            'bukti_transfer' => 'nullable|file|mimes:jpeg,png,pdf|max:2048'
        ]);

        $buktiTransferPath = $request->file('bukti_transfer')?->store('bukti_transfer', 'public');

        $failedMonths = [];
        $successMonths = [];

        foreach ($request->bulan as $bulan) {
            $existing = Pembayaran::where('id_siswa', $request->id_siswa)
                ->where('bulan', $bulan)->where('tahun', $request->tahun)->first();

            if ($existing) {
                $failedMonths[] = $bulan;
                continue;
            }

            Pembayaran::create([
                'id_siswa' => $request->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'metode' => $metode,
                'bukti_transfer' => $buktiTransferPath,
                'status' => 'menunggu',
                'id_wali' => Auth::id(),
                'is_midtrans' => $useMidtrans
            ]);

            $successMonths[] = $bulan;
        }

        if ($successMonths) {
            $message = "Berhasil membuat pembayaran untuk bulan: " . implode(', ', $successMonths);
            if ($failedMonths) {
                $message .= ". Gagal untuk bulan: " . implode(', ', $failedMonths);
            }
            return redirect()->route('pembayaran.create')->with('success', $message);
        }

        return redirect()->back()->with('error', 'Tidak ada pembayaran yang berhasil dibuat.');
    }

    public function riwayat()
    {
        $user = Auth::user();
        $siswaIds = $user->siswa->pluck('id_siswa');

        $pembayarans = Pembayaran::whereIn('id_siswa', $siswaIds)
            ->with('siswa')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pembayaran.riwayat', compact('pembayarans'));
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        if (!in_array($pembayaran->status, ['menunggu', 'ditolak'])) {
            return redirect()->route('pembayaran.riwayat')->with('error', 'Pembayaran tidak dapat diedit.');
        }

        return view('pembayaran.edit', compact('pembayaran'));
    }

    public function destroy($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);

            if (!in_array($pembayaran->status, ['menunggu', 'ditolak'])) {
                return response()->json(['success' => false, 'message' => 'Pembayaran tidak dapat dihapus.'], 400);
            }

            if ($pembayaran->bukti_transfer) {
                Storage::delete($pembayaran->bukti_transfer);
            }

            $pembayaran->delete();

            return response()->json(['success' => true, 'message' => 'Pembayaran berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        if (!in_array($pembayaran->status, ['menunggu', 'ditolak'])) {
            return redirect()->route('pembayaran.riwayat')->with('error', 'Pembayaran tidak dapat diubah.');
        }

        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array',
            'tahun' => 'required|integer|min:2020|max:' . (date('Y') + 1),
            'bukti_transfer' => 'nullable|file|max:2048|mimes:jpg,jpeg,png,pdf'
        ]);

        $pembayaran->bulan = $validated['bulan'];
        $pembayaran->tahun = $validated['tahun'];
        $pembayaran->status = 'menunggu';

        if ($request->hasFile('bukti_transfer')) {
            if ($pembayaran->bukti_transfer) {
                Storage::delete($pembayaran->bukti_transfer);
            }
            $pembayaran->bukti_transfer = $request->file('bukti_transfer')->store('bukti_transfer', 'public');
        }

        $pembayaran->save();

        return redirect()->route('pembayaran.riwayat')->with('success', 'Pembayaran berhasil diperbarui.');
    }
    public function snapToken(Request $request)
    {
        $pembayaran = Pembayaran::findOrFail($request->id);

        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . $pembayaran->id_pembayaran . '-' . time(),
                'gross_amount' => $pembayaran->jumlah,
            ],
            'customer_details' => [
                'first_name' => $pembayaran->siswa->nama_siswa,
                'email' => $pembayaran->siswa->wali->email,
            ],
            'callbacks' => [
                'finish' => route('pembayaran.riwayat')
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        // Simpan order_id dan flag midtrans
        $pembayaran->update([
            'midtrans_order_id' => $params['transaction_details']['order_id'],
            'midtrans_transaction_status' => 'pending',
            'is_midtrans' => true,
        ]);

        return response()->json(['token' => $snapToken]);
    }


    //PEMBAYARAN MANUAL
    public function createManual()
    {
        $siswa = Siswa::orderBy('nama_siswa')->get();
        // Di dalam method createManual() & createUpload()
        $defaultJumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;

        return view('pembayaran.manual_create', compact('siswa', 'defaultJumlahSPP'));
    }

    public function storeManual(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'string',
            'tahun' => 'required|integer|min:2000|max:2100',
            'jumlah' => 'required|numeric|min:0', // Tetap validasi untuk memastikan total di form
            'catatan' => 'nullable|string',
        ]);
        // =======================================================
        // BLOK VALIDASI ANTI-DUPLIKAT (INI PERBAIKANNYA)
        // =======================================================
        $bulanYangDipilih = $request->bulan;
        $tahunYangDipilih = $request->tahun;
        $konflikBulan = [];

        foreach ($bulanYangDipilih as $bulan) {
            $pembayaranSudahAda = Pembayaran::where('id_siswa', $request->id_siswa)
                ->where('bulan', $bulan)
                ->where('tahun', $tahunYangDipilih)
                ->whereIn('status', ['menunggu', 'diterima']) // Cek jika status 'menunggu' ATAU 'diterima'
                ->exists();

            if ($pembayaranSudahAda) {
                $konflikBulan[] = $bulan;
            }
        }

        // Jika ada bulan yang konflik, hentikan proses dan kirim pesan error
        if (!empty($konflikBulan)) {
            $pesanError = 'Pembayaran untuk bulan ' . implode(', ', $konflikBulan) . ' sudah ada atau sedang diproses.';
            // Kembali ke halaman sebelumnya dengan pesan error
            return back()->with('error', $pesanError)->withInput();
        }
        // =======================================================
        // AKHIR BLOK VALIDASI
        // =======================================================

        // Lanjutkan proses penyimpanan jika tidak ada konflik...

        // Ambil jumlah SPP per bulan dari tabel pengaturans
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;

        // Validasi bahwa jumlah di form sesuai dengan perhitungan (opsional, untuk keamanan)
        $expectedTotal = count($request->bulan) * $jumlahSPP;
        if ($request->jumlah != $expectedTotal) {
            return back()->withErrors(['jumlah' => 'Total jumlah tidak sesuai dengan perhitungan.']);
        }

        // Simpan pembayaran untuk setiap bulan
        foreach ($request->bulan as $bulan) {
            $pembayaran = Pembayaran::create([
                'id_siswa' => $request->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $jumlahSPP, // Gunakan jumlahSPP per bulan, bukan $request->jumlah
                'metode' => 'langsung',
                'status' => 'diterima',
                'verified_by' => Auth::id(),
                'tanggal_verifikasi' => now(),
                'catatan' => $request->catatan,
                'is_midtrans' => false,
            ]);

            // Langsung buat kwitansi karena statusnya sudah 'diterima'
            (new KwitansiController)->generateAndSave($pembayaran);
        }

        return redirect()->route('pembayaran.manual.create')->with('success', 'Pembayaran manual berhasil disimpan.');
    }


    //PEMBAYARAN UPLOAD
    public function createUpload()
    {
        $defaultJumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;
        // Ambil siswa yang terkait dengan wali murid yang login
        $siswa = Siswa::where('id_wali', Auth::id())->orderBy('nama_siswa')->get();

        return view('pembayaran.upload_transfer', compact('defaultJumlahSPP', 'siswa'));
    }

    public function storeUpload(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'string',
            'tahun' => 'required|integer|min:2000|max:2100',
            'jumlah' => 'required|numeric|min:0',
            'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'catatan' => 'nullable|string',
        ]);

        // Validasi bahwa siswa terkait dengan wali murid yang login
        $siswa = Siswa::where('id_wali', Auth::id())->where('id_siswa', $request->id_siswa)->first();
        if (!$siswa) {
            return back()->withErrors(['id_siswa' => 'Siswa tidak valid atau tidak terkait dengan akun Anda.'])->withInput();
        }

        // =======================================================
        // TAMBAHKAN BLOK VALIDASI ANTI-DUPLIKAT DI SINI
        // =======================================================
        $bulanYangDipilih = $request->bulan;
        $tahunYangDipilih = $request->tahun;
        $konflikBulan = [];

        foreach ($bulanYangDipilih as $bulan) {
            $pembayaranSudahAda = Pembayaran::where('id_siswa', $request->id_siswa)
                ->where('bulan', $bulan)
                ->where('tahun', $tahunYangDipilih)
                ->whereIn('status', ['menunggu', 'diterima']) // Cek jika status 'menunggu' ATAU 'diterima'
                ->exists();

            if ($pembayaranSudahAda) {
                $konflikBulan[] = $bulan;
            }
        }

        if (!empty($konflikBulan)) {
            $pesanError = 'Pembayaran untuk bulan ' . implode(', ', $konflikBulan) . ' sudah ada atau sedang diproses.';
            // Kembali ke halaman sebelumnya dengan pesan error
            return back()->with('error', $pesanError)->withInput();
        }
        // =======================================================
        // AKHIR BLOK VALIDASI
        // =======================================================

        // Lanjutkan proses jika tidak ada konflik...
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;
        $expectedTotal = count($request->bulan) * $jumlahSPP;
        if ($request->jumlah != $expectedTotal) {
            return back()->withErrors(['jumlah' => 'Total jumlah tidak sesuai dengan perhitungan.'])->withInput();
        }

        $path = $request->file('bukti_transfer')->store('bukti-transfer', 'public');

        foreach ($request->bulan as $bulan) {
            Pembayaran::create([
                'id_siswa' => $request->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $jumlahSPP,
                'bukti_transfer' => $path,
                'metode' => 'transfer',
                'status' => 'menunggu',
                'catatan' => $request->catatan,
                'is_midtrans' => false,
            ]);
        }

        return redirect()->route('riwayat.index')->with('success', 'Bukti transfer berhasil diunggah dan menunggu verifikasi.');
    }


    //PENGECEKAN PEMBAYARAN
    public function indexVerifikasi()
    {
        $pembayaranMenunggu = Pembayaran::where('status', 'menunggu')
            ->where('metode', 'transfer')
            ->with('siswa')
            ->get();
        return view('bendahara.verifikasi', compact('pembayaranMenunggu'));
    }

    public function updateVerifikasi(Request $request, $id)
    {
        $request->validate(['status' => 'required|in:diterima,ditolak']);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->status = $request->status;
        $pembayaran->save();

        // Buat kwitansi jika diterima
        if ($request->status === 'diterima') {
            (new KwitansiController)->generateAndSave($pembayaran);
        }

        return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}

===== app\Http\Controllers\PemetaanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemetaanController extends Controller
{
    public function index()
    {
        return view('pemetaan.index');
    }
}

===== app\Http\Controllers\PengaturanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Artisan;
class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::all()->pluck('value', 'key');
        return view('pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'jumlah_spp' => 'required|numeric|min:0',
            'midtrans_active' => 'required|in:true,false',
            'nomor_rekening' => 'nullable|string|max:255',
        ]);

        // Looping untuk menyimpan setiap pengaturan
        foreach ($validatedData as $key => $value) {
            // Hanya proses jika value tidak null. Jika null, ubah jadi string kosong.
            $valueToStore = $value ?? '';

            Pengaturan::updateOrCreate(
                ['key' => $key],
                ['value' => $valueToStore]
            );
        }

        // Hapus cache konfigurasi agar perubahan langsung diterapkan
        //Artisan::call('config:cache');

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}

===== app\Http\Controllers\PilihMetodeController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaturan;

class PilihMetodeController extends Controller
{
    public function index(Request $request, Siswa $siswa)
    {
        if ($siswa->id_wali !== Auth::user()->id) {
            abort(403, 'Akses Ditolak');
        }

        $totalTunggakan = Tunggakan::where('id_siswa', $siswa->id_siswa)
            ->where('status', 'belum_bayar')
            ->sum('jumlah_tunggakan');
        
        // =======================================================
        // PATOKAN: app/Http/Controllers/PilihMetodeController.php
        // AWAL PERUBAHAN
        // =======================================================
        // Pastikan variabel ini selalu terdefinisi
        $menunggakQuery = http_build_query($request->query());
        // =======================================================
        // AKHIR PERUBAHAN
        // =======================================================
        
        $midtransAktif = Pengaturan::where('key', 'midtrans_active')->value('value') === 'true';

        return view('pembayaran.pilih-metode', compact('siswa', 'totalTunggakan', 'menunggakQuery', 'midtransAktif'));
    }
}

===== app\Http\Controllers\ProfileController.php =====
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

===== app\Http\Controllers\RiwayatController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class RiwayatController extends Controller
{
    /**
     * Menampilkan halaman riwayat pembayaran yang cerdas.
     * Tampilannya akan beradaptasi berdasarkan peran pengguna yang login.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        // Selalu ambil data pembayaran beserta relasi siswa dan kwitansinya
        $query = Pembayaran::query()->with(['siswa', 'kwitansi']);

        // Filter data berdasarkan peran pengguna
        if ($user->role === 'wali_murid') {
            // Jika wali murid, hanya tampilkan data anak-anaknya
            $siswaIds = Siswa::where('id_wali', $user->id)->pluck('id_siswa');
            $query->whereIn('id_siswa', $siswaIds);
        }
        // Jika bendahara atau ketua_yayasan, tidak perlu filter tambahan, mereka bisa melihat semua.

        // Terapkan filter dari form pencarian jika ada
        if ($request->filled('siswa')) {
            $query->where('id_siswa', $request->siswa);
        }
        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }
        if ($request->filled('metode')) {
            $query->where('metode', $request->metode);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        // Ambil data yang sudah difilter dan diurutkan, lalu paginasi
        $pembayaran = $query->orderBy('created_at', 'desc')->paginate(10);

        // Siapkan data untuk dropdown filter siswa
        // Jika wali murid, dropdown hanya berisi nama anaknya.
        // Jika bendahara, dropdown berisi semua siswa.
        $siswa = ($user->role === 'wali_murid')
            ? Siswa::where('id_wali', $user->id)->orderBy('nama_siswa')->get()
            : Siswa::orderBy('nama_siswa')->get();

        // Kirim semua data yang dibutuhkan ke satu view yang sama
        return view('riwayat.index', compact('pembayaran', 'siswa'));
    }
}

===== app\Http\Controllers\SiswaController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Jobs\SendPasswordResetNotification;


class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::with('wali')->latest();

        // Logika untuk Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_siswa', 'like', "%{$search}%")
                  ->orWhere('nis', 'like', "%{$search}%");
            });
        }

        // Logika untuk Filter Kelas
        if ($request->filled('kelas')) {
            $query->where('kelas', $request->kelas);
        }

        $siswas = $query->paginate(15)->withQueryString();
        
        // Ambil daftar kelas unik untuk dropdown filter
        $kelasOptions = Siswa::distinct()->orderBy('kelas')->pluck('kelas');

        return view('siswa.index', compact('siswas', 'kelasOptions'));
    }

    public function create()
    {
        $walis = User::where('role', 'wali_murid')->orderBy('name')->get();
        return view('siswa.create', compact('walis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'kelas' => 'required|string|max:20',
            'wali_option' => 'required|in:existing,new', // Pilihan metode
        ]);

        $id_wali = null;

        // Jika bendahara memilih "wali yang sudah ada"
        if ($request->wali_option === 'existing') {
            $request->validate(['id_wali' => 'required|exists:users,id']);
            $id_wali = $request->id_wali;
        } 
        // Jika bendahara memilih "buat akun wali baru"
        else {
            $request->validate([
                'nama_wali' => 'required|string|max:255',
                'email_wali' => 'required|string|lowercase|email|max:255|unique:'.User::class.',email',
                'password_wali' => ['required', Rules\Password::defaults()],
            ]);

            $wali = User::create([
                'name' => $request->nama_wali,
                'email' => $request->email_wali,
                'password' => Hash::make($request->password_wali),
                'role' => 'wali_murid',
            ]);
            $id_wali = $wali->id;
        }

        // Buat data siswa dengan id_wali yang sudah ditentukan
        Siswa::create(array_merge($request->only('nama_siswa', 'nis', 'kelas', 'alamat', 'latitude', 'longitude'), ['id_wali' => $id_wali]));

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $walis = User::where('role', 'wali_murid')->orderBy('name')->get();
        return view('siswa.edit', compact('siswa', 'walis'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id_siswa . ',id_siswa',
            'kelas' => 'required|string|max:20',
            'id_wali' => 'required|exists:users,id',
        ]);
        
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }

    public function resetPassword(Siswa $siswa)
    {
        // Pastikan siswa memiliki wali yang tertaut
        if (!$siswa->wali) {
            return back()->with('error', 'Siswa ini tidak memiliki akun wali murid yang tertaut.');
        }

        $wali = $siswa->wali;
        
        // Buat password baru yang acak
        $newPassword = 'Spp' . rand(1000, 9999);

        // Update password di database
        $wali->password = Hash::make($newPassword);
        $wali->save();

        // Kirim notifikasi berisi password baru ke wali murid
        SendPasswordResetNotification::dispatch($wali, $newPassword);

        return back()->with('success', 'Password untuk wali murid ' . $wali->name . ' berhasil di-reset dan telah dikirimkan melalui WhatsApp.');
    }
}

===== app\Http\Controllers\TunggakanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunggakan;
use App\Models\Siswa;
use App\Jobs\SendTunggakanNotification;
class TunggakanController extends Controller
{
    /**
     * Menampilkan daftar semua tunggakan yang belum lunas.
     */
    public function index()
    {
        // Ambil semua tunggakan dengan status 'belum_bayar' beserta relasi siswa dan walinya
        $tunggakan = Tunggakan::where('status', 'belum_bayar')
            ->with('siswa.wali')
            ->latest()
            ->paginate(15);
            
        return view('tunggakan.index', compact('tunggakan'));
    }

    /**
     * Mengirim notifikasi pengingat tunggakan ke wali murid.
     */
     /**
     * Mengirim notifikasi pengingat tunggakan ke wali murid.
     */
    public function sendReminder($id_tunggakan)
    {
        try {
            $tunggakan = Tunggakan::with('siswa.wali')->findOrFail($id_tunggakan);

            if ($tunggakan->siswa && $tunggakan->siswa->wali && $tunggakan->siswa->wali->nomor_wa) {
                // Kirim tugas pengiriman WA ke antrian (queue)
                SendTunggakanNotification::dispatch($tunggakan);

                // Tandai bahwa pengingat telah dikirim
                $tunggakan->update(['last_reminder_sent_at' => now()]);

                return back()->with('success', 'Notifikasi pengingat untuk ' . $tunggakan->siswa->nama_siswa . ' telah dijadwalkan untuk dikirim.');
            }

            return back()->with('error', 'Gagal mengirim notifikasi karena wali murid tidak memiliki nomor WhatsApp.');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

```


## Models Content
```
===== app\Models\Kwitansi.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    protected $table = 'kwitansi';
    protected $primaryKey = 'id_kwitansi';
    public $incrementing = true;

    protected $fillable = [
        'id_pembayaran', 'no_kwitansi', 'tanggal_terbit', 'file_kwitansi', 'status_kirim'
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran');
    }
}

===== app\Models\Pembayaran.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = true;

    protected $fillable = [
        'id_siswa', 'bulan', 'tahun', 'jumlah', 'metode',
        'bukti_transfer', 'status', 'verified_by', 'tanggal_verifikasi', 'catatan',
        'midtrans_order_id', 'midtrans_transaction_status', 'is_midtrans', 'snap_token'
    ];

    protected $casts = [
        'bulan' => 'array',
    ];

    protected $attributes = [
        'status' => 'belum_bayar'
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // Event ini akan berjalan setiap kali record Pembayaran DIBUAT
        static::created(function (Pembayaran $pembayaran) {
            // Jika pembayaran baru langsung berstatus 'diterima' (misal: input manual)
            if ($pembayaran->status === 'diterima') {
                self::updateTunggakanLunas($pembayaran);
            }
        });

        // Event ini akan berjalan setiap kali record Pembayaran DIUPDATE
        static::updated(function (Pembayaran $pembayaran) {
            // Cek jika kolom 'status' baru saja diubah menjadi 'diterima'
            if ($pembayaran->wasChanged('status') && $pembayaran->status === 'diterima') {
                self::updateTunggakanLunas($pembayaran);
            }
        });
    }

    /**
     * Fungsi terpusat untuk mengupdate status tunggakan menjadi lunas.
     */
    public static function updateTunggakanLunas(Pembayaran $pembayaran)
    {
        // Karena 'bulan' bisa jadi array, kita proses satu per satu
        foreach ($pembayaran->bulan as $bulan) {
            Tunggakan::where('id_siswa', $pembayaran->id_siswa)
                ->where('bulan', $bulan)
                ->where('tahun', $pembayaran->tahun)
                ->where('status', 'belum_bayar')
                ->update(['status' => 'lunas']);
        }
    }
    
    /**
     * Helper untuk memastikan 'bulan' selalu array.
     */
    public function getBulanArray()
    {
        $bulanValue = $this->attributes['bulan'];
        return is_array($bulanValue) ? $bulanValue : explode(',', $bulanValue);
    }   

    public function getBulanAttribute($value)
    {
        return explode(',', $value);
    }

    public function setBulanAttribute($value)
    {
        $this->attributes['bulan'] = is_array($value) ? implode(',', $value) : $value;
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function kwitansi()
    {
        return $this->hasOne(Kwitansi::class, 'id_pembayaran');
    }

    public function setStatusAttribute($value)
    {
        $allowed = ['belum_bayar', 'menunggu', 'diterima', 'ditolak'];
        $this->attributes['status'] = in_array($value, $allowed) ? $value : 'belum_bayar';
    }

    public function isMidtrans()
    {
        return $this->is_midtrans === true;
    }
}

===== app\Models\Pengaturan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'key', 'value'
    ];

    public static function getValue(string $key, $default = null)
    {
        return optional(static::where('key', $key)->first())->value ?? $default;
    }

    public static function isMidtransActive(): bool
    {
        return static::getValue('midtrans_active', 'false') === 'true';
    }
}

===== app\Models\Siswa.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    public $incrementing = true;

    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas',
        'id_wali',
        'alamat',
        'latitude',
        'longitude'
    ];

    public function wali()
    {
        return $this->belongsTo(User::class, 'id_wali');
    }



    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_siswa');
    }

    public function tunggakan()
    {
        return $this->hasMany(Tunggakan::class, 'id_siswa');
    }
}

===== app\Models\Tunggakan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tunggakan extends Model
{
    protected $table = 'tunggakan';
    protected $primaryKey = 'id_tunggakan';
    public $incrementing = true;

    protected $fillable = [
        'id_siswa', 'bulan', 'tahun', 'jumlah_tunggakan', 'status', 'last_reminder_sent_at'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}


```


## Views & UI Files Content
```
===== resources\views\akun\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Akun: ') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                <form action="{{ route('akun.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="nomor_wa" class="block text-sm font-medium text-gray-700">No. WhatsApp</label>
                            <input type="text" name="nomor_wa" id="nomor_wa" value="{{ old('nomor_wa', $user->nomor_wa) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                    </div>

                    <div class="mt-8 border-t pt-6 flex justify-end">
                        <a href="{{ route('akun.index') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                        <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\akun\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Akun Wali Murid') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 bg-white p-4 rounded-xl shadow-md">
                <form action="{{ route('akun.index') }}" method="GET">
                    <div>
                        <label for="search" class="sr-only">Cari</label>
                        <input type="text" name="search" id="search" placeholder="Cari Nama Wali atau Email..." value="{{ request('search') }}" class="block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Wali Murid</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. WhatsApp</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($walis as $wali)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $wali->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $wali->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $wali->nomor_wa ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                                        <form action="{{ route('akun.reset-password', $wali) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin me-reset password untuk wali murid ini?')">
                                            @csrf
                                            <button type="submit" class="text-yellow-600 hover:text-yellow-900">Reset Pass</button>
                                        </form>
                                        <a href="{{ route('akun.edit', $wali) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="px-6 py-12 text-center text-gray-500">Belum ada data akun wali murid.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($walis->hasPages())
                    <div class="p-4 border-t border-gray-200">{{ $walis->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\auth\confirm-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\forgot-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\login.blade.php =====
<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-slate-800">Selamat Datang Kembali!</h2>
        <p class="text-slate-500 text-sm mt-1">Silakan masuk untuk melanjutkan.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            {{-- Wrapper untuk ikon --}}
            <div class="relative mt-1">
                {{-- Ikon Email --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" /><path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" /></svg>
                </div>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            {{-- Wrapper untuk ikon --}}
            <div class="relative mt-1">
                 {{-- Ikon Gembok --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" /></svg>
                </div>
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-sky-600 shadow-sm focus:ring-sky-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-sky-600 hover:text-sky-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full justify-center">
                {{ __('Log In') }}
            </x-primary-button>
        </div>

        {{-- <div class="mt-6 text-center">
            <p class="text-sm text-slate-500">
                Belum punya akun?
                <a href="{{ route('register') }}" class="font-medium text-sky-600 hover:underline">
                    Daftar di sini
                </a>
            </p>
        </div> --}}
    </form>
</x-guest-layout>

===== resources\views\auth\register.blade.php =====
<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-slate-800">Buat Akun Baru</h2>
        <p class="text-slate-500 text-sm mt-1">Daftarkan diri Anda untuk memulai.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" />
             {{-- Wrapper untuk ikon --}}
            <div class="relative mt-1">
                {{-- Ikon User --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                </div>
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            {{-- Wrapper untuk ikon --}}
            <div class="relative mt-1">
                {{-- Ikon Email --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" /><path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" /></svg>
                </div>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            {{-- Wrapper untuk ikon --}}
            <div class="relative mt-1">
                {{-- Ikon Gembok --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" /></svg>
                </div>
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
             {{-- Wrapper untuk ikon --}}
            <div class="relative mt-1">
                 {{-- Ikon Gembok --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" /></svg>
                </div>
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full justify-center">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="mt-6 text-center">
             <a class="text-sm text-slate-500 hover:text-sky-600 hover:underline" href="{{ route('login') }}">
                {{ __('Sudah punya akun? Masuk di sini') }}
            </a>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\reset-password.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\verify-email.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>

===== resources\views\bendahara\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Bendahara') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Pemasukan Bulan Ini</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">Rp {{ number_format($pemasukanBulanIni, 0, ',', '.') }}</p>
                    </div>
                    <div class="bg-green-100 text-green-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" />
                        </svg>
                    </div>
                </div>
                <a href="{{ route('pembayaran.verifikasi') }}" class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between transition-all duration-300 hover:shadow-lg hover:border-yellow-500 border border-transparent">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Menunggu Verifikasi</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $menungguVerifikasi }} Transaksi</p>
                    </div>
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </a>
                <div class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Tunggakan</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">Rp {{ number_format($totalTunggakan, 0, ',', '.') }}</p>
                    </div>
                    <div class="bg-red-100 text-red-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Siswa Aktif</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $siswaAktif }}</p>
                    </div>
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.084-1.284-.24-1.88M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.084-1.284.24-1.88M12 12c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md mb-8">
                <h3 class="font-semibold text-lg text-gray-800 mb-4">Grafik Pemasukan (6 Bulan Terakhir)</h3>
                <div id="incomeChart"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Perlu Tindakan Segera</h3>
                    <div class="space-y-4">
                        @forelse ($perluTindakan as $pembayaran)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $pembayaran->siswa->nama_siswa }}</p>
                                    <p class="text-sm text-gray-600">
                                        {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} {{ $pembayaran->tahun }} - <span class="font-semibold">Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</span>
                                    </p>
                                </div>
                                <a href="{{ route('pembayaran.verifikasi') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 transition-colors">
                                    Verifikasi
                                </a>
                            </div>
                        @empty
                            <div class="text-center py-4 border-2 border-dashed rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <p class="mt-2 text-sm text-gray-500">Kerja bagus! Tidak ada pembayaran yang perlu diverifikasi.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Aktivitas Terbaru (Lunas)</h3>
                    <div class="space-y-4">
                        @forelse ($aktivitasTerbaru as $pembayaran)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $pembayaran->siswa->nama_siswa }}</p>
                                    <p class="text-sm text-gray-600">
                                        {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }} {{ $pembayaran->tahun }} - <span class="font-semibold text-green-700">Lunas</span>
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($pembayaran->tanggal_verifikasi)->diffForHumans() }}</span>
                            </div>
                        @empty
                             <div class="text-center py-10 border-2 border-dashed rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                <p class="mt-2 text-sm text-gray-500">Belum ada aktivitas pembayaran yang diterima.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var options = {
                    series: [{
                        name: 'Pemasukan',
                        data: @json($data)
                    }],
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            borderRadius: 4,
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: @json($labels),
                    },
                    yaxis: {
                        title: {
                            text: 'Rp (Rupiah)'
                        },
                        labels: {
                            formatter: function (val) {
                                return (val / 1000000).toFixed(1) + ' Jt';
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return "Rp " + new Intl.NumberFormat('id-ID').format(val)
                            }
                        }
                    },
                    grid: {
                        borderColor: '#f1f1f1',
                    }
                };

                var chart = new ApexCharts(document.querySelector("#incomeChart"), options);
                chart.render();
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\bendahara\verifikasi.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Verifikasi Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="bg-white p-6 rounded shadow">
            @if($pembayaranMenunggu->isEmpty())
                <p class="text-gray-500">Tidak ada pembayaran yang menunggu verifikasi.</p>
            @else
                <table class="w-full table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-3 py-2">Siswa</th>
                            <th class="border border-gray-300 px-3 py-2">Bulan</th>
                            <th class="border border-gray-300 px-3 py-2">Tahun</th>
                            <th class="border border-gray-300 px-3 py-2">Jumlah</th>
                            <th class="border border-gray-300 px-3 py-2">Bukti Transfer</th>
                            <th class="border border-gray-300 px-3 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembayaranMenunggu as $pembayaran)
                        <tr>
                            <td class="border border-gray-300 px-3 py-2">
                                {{ $pembayaran->siswa ? $pembayaran->siswa->nama_siswa : 'Unknown' }}
                            </td>
                            <td class="border border-gray-300 px-3 py-2">
                                {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }}
                            </td>
                            <td class="border border-gray-300 px-3 py-2">{{ $pembayaran->tahun }}</td>
                            <td class="border border-gray-300 px-3 py-2">
                                Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="border border-gray-300 px-3 py-2">
                                @if($pembayaran->bukti_transfer)
                                    <a href="{{ asset('storage/' . $pembayaran->bukti_transfer) }}" target="_blank" class="text-indigo-600 underline">
                                        Lihat Bukti
                                    </a>
                                @else
                                    Tidak ada bukti
                                @endif
                            </td>
                            <td class="border border-gray-300 px-3 py-2 space-x-2">
                                <form action="{{ route('pembayaran.verifikasi.update', $pembayaran->id_pembayaran) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="diterima" />
                                    <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">Terima</button>
                                </form>

                                <form action="{{ route('pembayaran.verifikasi.update', $pembayaran->id_pembayaran) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="ditolak" />
                                    <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Tolak</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>

===== resources\views\components\application-logo.blade.php =====
<svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
</svg>

===== resources\views\components\auth-session-status.blade.php =====
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif

===== resources\views\components\danger-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\dropdown-link.blade.php =====
<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

===== resources\views\components\dropdown.blade.php =====
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

===== resources\views\components\input-error.blade.php =====
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

===== resources\views\components\input-label.blade.php =====
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

===== resources\views\components\modal.blade.php =====
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>

===== resources\views\components\nav-link.blade.php =====
@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center gap-2 w-full px-4 py-2 rounded-lg bg-gray-200 text-gray-900 font-medium'
                : 'flex items-center gap-2 w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\primary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-sky-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-700 focus:bg-sky-700 active:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\responsive-nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\secondary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\text-input.blade.php =====
@props(['disabled' => false])

{{-- Menambahkan pl-10 (padding left) untuk memberi ruang bagi ikon --}}
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full pl-10 border-gray-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm']) !!}>

===== resources\views\ketua\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Eksekutif') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Total Pemasukan SPP</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">Rp {{ number_format($pemasukanTotal, 0, ',', '.') }}
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Total Tunggakan</p>
                    <p class="text-3xl font-bold text-red-600 mt-1">Rp {{ number_format($totalTunggakan, 0, ',', '.') }}
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Siswa Aktif</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $siswaAktif }}</p>
                </div>
                {{-- Kartu Guru diganti dengan Wali Murid --}}
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-sm font-medium text-gray-500">Wali Murid Aktif</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $waliMuridAktif }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Grafik Pemasukan (12 Bulan Terakhir)</h3>
                    <div id="incomeChart"></div>
                </div>

                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="font-semibold text-lg text-gray-800 mb-4">Ringkasan Status Pembayaran</h3>
                        <div id="statusChart"></div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="font-semibold text-lg text-gray-800 mb-4">Preview Pemetaan Siswa</h3>
                        <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden relative">

                            <a href="{{ route('pemetaan.index') }}"
                                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 text-white font-bold text-lg opacity-0 hover:opacity-100 transition-opacity">
                                Buka Peta Interaktif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            // Grafik Pemasukan
            var incomeChartOptions = {
                series: [{
                    name: 'Pemasukan',
                    data: @json($chartData)
                }],
                chart: {
                    type: 'area',
                    height: 350,
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: @json($chartLabels)
                },
                yaxis: {
                    labels: {
                        formatter: (val) => (val / 1000000).toFixed(1) + ' Jt'
                    }
                },
                tooltip: {
                    y: {
                        formatter: (val) => "Rp " + new Intl.NumberFormat('id-ID').format(val)
                    }
                },
            };
            var incomeChart = new ApexCharts(document.querySelector("#incomeChart"), incomeChartOptions);
            incomeChart.render();

            // Grafik Status
            var statusChartOptions = {
                series: @json($statusPembayaran->values()),
                chart: {
                    type: 'donut',
                    height: 350
                },
                labels: @json($statusPembayaran->keys()->map(fn($key) => ucfirst($key))),
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };
            var statusChart = new ApexCharts(document.querySelector("#statusChart"), statusChartOptions);
            statusChart.render();
        </script>
    @endpush
</x-app-layout>

===== resources\views\kwitansi\template.blade.php =====
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
                <td>: {{ $pembayaran->siswa->nama_siswa }}</td>
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

===== resources\views\laporan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                <form action="{{ route('laporan.index') }}" method="GET">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Tanggal Awal</label>
                            <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700">Tanggal Akhir</label>
                            <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="id_siswa" class="block text-sm font-medium text-gray-700">Siswa</label>
                            <select name="id_siswa" id="id_siswa" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Siswa</option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id_siswa }}" @selected(request('id_siswa') == $s->id_siswa)>{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Status</option>
                                <option value="diterima" @selected(request('status') == 'diterima')>Diterima</option>
                                <option value="menunggu" @selected(request('status') == 'menunggu')>Menunggu</option>
                                <option value="ditolak" @selected(request('status') == 'ditolak')>Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-end space-x-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Filter</button>
                        <a href="{{ route('laporan.index') }}" class="text-gray-600 hover:underline">Reset</a>
                    </div>
                </form>
            </div>

            <div class="flex justify-end space-x-2 mb-4">
                <a href="{{ route('laporan.export.pdf', request()->query()) }}" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Ekspor PDF</a>
                <a href="{{ route('laporan.export.excel', request()->query()) }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Ekspor Excel</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembayaran</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tgl. Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($laporan as $item)
                                <tr>
                                    <td class="px-6 py-4">{{ $item->siswa->nama_siswa }}</td>
                                    <td class="px-6 py-4">{{ is_array($item->bulan) ? implode(', ', $item->bulan) : $item->bulan }} {{ $item->tahun }}</td>
                                    <td class="px-6 py-4">Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4">{{ ucfirst($item->status) }}</td>
                                    <td class="px-6 py-4">{{ $item->tanggal_verifikasi ? \Carbon\Carbon::parse($item->tanggal_verifikasi)->format('d-m-Y') : '-' }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="text-center py-4">Tidak ada data yang cocok dengan filter.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-4">
                    {{ $laporan->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\laporan\pdf.blade.php =====
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

===== resources\views\layouts\app.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Di dalam <head> atau sebelum </body> -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="{ sidebarOpen: false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto">
            @include('layouts.navigation')
        </div>

        <!-- Overlay -->
    <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak
            class="fixed inset-0 bg-black bg-opacity-25 z-20 md:hidden"></div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col w-full">
            <!-- Mobile topbar -->
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative p">
                <!-- Tombol hamburger -->
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Judul di tengah -->
                <div class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>

                <!-- User dropdown (mobile) -->
                <div x-data="{ open: false }" class="relative z-10">
                    <button @click="open = !open"
                        class="flex items-center space-x-1 px-3 py-2 text-sm font-medium bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                        <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                        <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-cloak
                        class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-1 text-sm text-gray-700">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">
                            {{ __('Profile') }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </header>



            <!-- Optional header (desktop only) -->
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-[22px] flex items-center justify-between">
                        {{ $header }}

                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="flex items-center space-x-2 px-4 py-2 text-sm font-medium bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                                <span>{{ Auth::user()->name }}</span>
                                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="open" x-cloak
                                class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-1 text-sm text-gray-700">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    {{ __('Profile') }}
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
            @endisset


            <!-- Page Content -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    timer: 2500,
                    showConfirmButton: false
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                    timer: 2500,
                    showConfirmButton: false
                });
            });
        </script>
    @endif

    @stack('scripts')
</body>

</html>

===== resources\views\layouts\guest.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Portal Login - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- Mengganti font default dengan Inter agar serasi --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            body { font-family: 'Inter', sans-serif; }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- Mengubah background menjadi biru pastel (sky-50) --}}
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-sky-50">
            
            {{-- Mengganti logo default dengan teks dan sub-judul --}}
            <div>
                <a href="/" class="text-4xl font-bold text-sky-600">
                    Al-Azhar 43 Gorontalo
                </a>
                <p class="text-center text-slate-500 mt-2">Portal Wali Murid & Staf</p>
            </div>

            {{-- Mempercantik card login --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-xl overflow-hidden sm:rounded-2xl border border-slate-200">
                {{ $slot }}
            </div>

             {{-- Menambahkan footer --}}
             <div class="mt-8 text-center text-sm text-slate-500">
                <p>&copy; {{ date('Y') }} YPI Al-Azhar. Seluruh Hak Cipta Dilindungi.</p>
                <a href="/" class="underline hover:text-sky-600 mt-2 inline-block">
                    &larr; Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </body>
</html>

===== resources\views\layouts\navigation.blade.php =====
<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <!-- Logo -->
    <div class="p-6 border-b border-gray-200">
        {{-- PATOKAN: resources/views/layouts/navigation.blade.php --}}
        {{-- AWAL PERUBAHAN --}}
        <a href="{{ route('dashboard') }}" class="flex items-center justify-center space-x-3">
            {{-- Logo Kiri --}}
            <img src="{{ asset('images/logoyayasan.jpg') }}" alt="Logo 1" class="h-10 w-auto">

            {{-- Tulisan di Tengah --}}
            <span class="text-xl font-bold text-gray-800 whitespace-nowrap">
                {{ config('app.name', 'Al Azhar') }}
            </span>

            {{-- Logo Kanan --}}
            <img src="{{ asset('images/logoalazhar.png') }}" alt="Logo 2" class="h-10 w-auto">
        </a>
        {{-- AKHIR PERUBAHAN --}}
    </div>
    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-6 space-y-2">

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs(['dashboard', 'bendahara.dashboard', 'ketua.dashboard'])">
            <img src="{{ asset('images/homeicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- =======================================================
            AWAL LOGIKA BARU UNTUK ROLE
        ======================================================= --}}

        {{-- Menu Khusus Bendahara (Operasional) --}}
        @if (auth()->user()?->role === 'bendahara')
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Operasional</p>

            <x-nav-link :href="route('pembayaran.manual.create')" :active="request()->routeIs('pembayaran.manual.create')">
                <img src="{{ asset('images/inputicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Input Pembayaran SPP Manual') }}
            </x-nav-link>

            <x-nav-link :href="route('pembayaran.verifikasi')" :active="request()->routeIs('pembayaran.verifikasi')">
                <img src="{{ asset('images/verifyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Verifikasi Pembayaran SPP') }}
            </x-nav-link>

            <x-nav-link :href="route('tunggakan.index')" :active="request()->routeIs('tunggakan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ __('Tunggakan SPP') }}
            </x-nav-link>

            <x-nav-link :href="route('pengaturan.index')" :active="request()->routeIs('pengaturan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ __('Pengaturan') }}
            </x-nav-link>
        @endif

        {{-- Menu Bersama Bendahara & Ketua Yayasan --}}
        @if (in_array(auth()->user()?->role, ['bendahara', 'ketua_yayasan']))
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Data & Laporan</p>

            <x-nav-link :href="route('siswa.index')" :active="request()->routeIs('siswa.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222 4 2.222V20M12 14.75V20" />
                </svg>
                {{ __('Data Siswa') }}
            </x-nav-link>

            <x-nav-link :href="route('riwayat.index')" :active="request()->routeIs('riwayat.index')">
                <img src="{{ asset('images/historyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Riwayat Pembayaran') }}
            </x-nav-link>

            <x-nav-link :href="route('pemetaan.index')" :active="request()->routeIs('pemetaan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ __('Pemetaan') }}
            </x-nav-link>

            <x-nav-link :href="route('laporan.index')" :active="request()->routeIs('laporan.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                {{ __('Laporan') }}
            </x-nav-link>
        @endif

        {{-- Menu Khusus Wali Murid --}}
        @if (auth()->user()?->role === 'wali_murid')
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Wali Murid</p>

            <x-nav-link :href="route('pembayaran.upload.create')" :active="request()->routeIs('pembayaran.upload.create')">
                <img src="{{ asset('images/uploadicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Upload Bukti Transfer') }}
            </x-nav-link>

            <x-nav-link :href="route('riwayat.index')" :active="request()->routeIs('riwayat.index')">
                <img src="{{ asset('images/historyicon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                {{ __('Riwayat Pembayaran') }}
            </x-nav-link>
            @if ($midtransAktif)
                @php
                    $anakWali = Auth::user()->siswa;
                @endphp

                {{-- Jika wali hanya punya 1 anak, tampilkan sebagai link biasa --}}
                @if ($anakWali->count() == 1)
                    <x-nav-link :href="route('pembayaran.midtrans.form', $anakWali->first()->id_siswa)" :active="request()->routeIs('pembayaran.midtrans.form')">
                        <img src="{{ asset('images/walleticon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                        {{ __('Pembayaran Online') }}
                    </x-nav-link>

                {{-- Jika punya lebih dari 1 anak, baru tampilkan dropdown --}}
                @elseif ($anakWali->count() > 1)
                    <div class="relative">
                        <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900" id="siswa-menu" aria-expanded="false" aria-haspopup="true">
                            <img src="{{ asset('images/walleticon.png') }}" alt="icon" class="w-4 h-4 mr-2">
                            <span class="text-sm font-medium">{{ __('Pembayaran Online') }}</span>
                            <svg class="ml-auto h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="absolute hidden mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10" id="siswa-menu-dropdown">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="siswa-menu">
                                @foreach ($anakWali as $item)
                                    <a href="{{ route('pembayaran.midtrans.form', $item->id_siswa) }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                        {{ $item->nama_siswa }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                
                @endif
            @else
                {{-- JIKA MIDTRANS NON-AKTIF: Tampilkan menu disabled --}}
                <div 
                    onclick="Swal.fire('Informasi', 'Pembayaran online saat ini sedang tidak tersedia.', 'info')"
                    class="flex items-center w-full px-4 py-2 rounded-lg text-gray-400 cursor-not-allowed bg-gray-50"
                >
                    <img src="{{ asset('images/walleticon.png') }}" alt="icon" class="w-4 h-4 mr-2 opacity-50">
                    <span class="text-sm font-medium">{{ __('Pembayaran Online') }}</span>
                </div>
            @endif

        @endif

        {{-- Akun Wali Murid hanya bendahara --}}
        @if (auth()->user()?->role === 'bendahara')
            <hr class="my-2 border-gray-200">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Manajemen</p>

            <x-nav-link :href="route('akun.index')" :active="request()->routeIs('akun.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                {{ __('Akun Wali Murid') }}
            </x-nav-link>
        @endif

    </nav>

    <!-- Sidebar Footer -->
    {{-- <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">
                {{ __('Profile') }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div> --}}
</aside>

===== resources\views\pembayaran\manual_create.blade.php =====
<x-app-layout>
    {{-- 1. Tambahkan CSS Tom Select di header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Manual Pembayaran') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('pembayaran.manual.store') }}" method="POST">
                    @csrf
    
                    {{-- Nama Siswa --}}
                    <div class="mb-4">
                        <label for="id_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                        {{-- 2. Hapus class bawaan dan berikan ID baru untuk Tom Select --}}
                        <select name="id_siswa" id="select-siswa" placeholder="Ketik untuk mencari siswa...">
                            @foreach ($siswa as $item)
                                <option value="{{ $item->id_siswa }}">{{ $item->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    {{-- Bulan (multi-select) dan Jumlah dalam satu x-data --}}
                    <div x-data="{
                        months: [
                            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                        ],
                        selectedMonths: [],
                        jumlahSPP: {{ $defaultJumlahSPP ?? 0 }},
                        get totalBayar() {
                            return this.selectedMonths.length * this.jumlahSPP;
                        }
                    }" x-init="console.log('Alpine initialized, jumlahSPP:', jumlahSPP)">
                        {{-- Bulan --}}
                        <div class="mb-4">
                            <x-input-label for="bulan" :value="__('Bulan Pembayaran')" />
                            <div>
                                <div class="flex flex-wrap gap-2 mb-2">
                                    <template x-for="month in selectedMonths" :key="month">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                            <span x-text="month"></span>
                                            <button
                                                @click.prevent="selectedMonths = selectedMonths.filter(m => m !== month)"
                                                class="ml-1 text-indigo-500 hover:text-indigo-700">
                                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                </div>
    
                                <select x-ref="monthSelect"
                                    @change="if ($event.target.value && !selectedMonths.includes($event.target.value)) {
                                        selectedMonths.push($event.target.value);
                                        $event.target.value = '';
                                    }"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Pilih Bulan</option>
                                    <template x-for="month in months.filter(m => !selectedMonths.includes(m))"
                                        :key="month">
                                        <option x-text="month" :value="month"></option>
                                    </template>
                                </select>
    
                                <template x-for="month in selectedMonths" :key="month">
                                    <input type="hidden" name="bulan[]" :value="month" />
                                </template>
    
                                <x-input-error :messages="$errors->get('bulan')" class="mt-2" />
                            </div>
                        </div>
    
                        {{-- Jumlah --}}
                        <div class="mb-4">
                            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah SPP</label>
                            <input type="number" name="jumlah" id="jumlah" x-bind:value="totalBayar"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly />
                            <small class="text-gray-500">Jumlah akan dihitung otomatis: jumlah bulan Ã—
                                {{ number_format($defaultJumlahSPP ?? 0, 0, ',', '.') }}</small>
                        </div>
                    </div>
    
                    {{-- Tahun --}}
                    <div class="mb-4">
                        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select name="tahun" id="tahun"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            @for ($year = now()->year - 2; $year <= now()->year + 1; $year++)
                                <option value="{{ $year }}" @selected($year == now()->year)>
                                    {{ $year }}
                                </option>
                            @endfor
                        </select>
                    </div>

                    {{-- Catatan --}}
                    <div class="mb-4">
                        <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan (Opsional)</label>
                        <textarea name="catatan" id="catatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
    
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan Pembayaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- 3. Tambahkan script Tom Select di akhir --}}
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                new TomSelect('#select-siswa', {
                    create: false,
                    sortField: {
                        field: "text",
                        direction: "asc"
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\pembayaran\manual_index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Daftar Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-5xl mx-auto">
        @if(session('success'))
            <div class="mb-4 text-green-600 bg-green-100 p-3 rounded-md">{{ session('success') }}</div>
        @endif

        <!-- Filter Form -->
        <div x-data="{ submitForm: function() { console.log('Submitting form'); document.getElementById('filterForm').submit(); } }">
            <form id="filterForm" action="{{ route('pembayaran.manual.index') }}" method="GET" class="mb-6 p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label for="siswa" class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                        <select name="siswa" id="siswa" @change="submitForm()" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">-- Semua --</option>
                            @foreach($siswa as $s)
                                <option value="{{ $s->id_siswa }}" {{ request('siswa') == $s->id_siswa ? 'selected' : '' }}>
                                    {{ $s->nama_siswa }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                        <input name="tahun" id="tahun" type="number" value="{{ request('tahun') }}" placeholder="2025" 
                               @input.debounce.500ms="submitForm()"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                    </div>

                    <div>
                        <label for="metode" class="block text-sm font-medium text-gray-700 mb-1">Metode</label>
                        <select name="metode" id="metode" @change="submitForm()" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">-- Semua --</option>
                            <option value="langsung" {{ request('metode') == 'langsung' ? 'selected' : '' }}>Langsung</option>
                            <option value="transfer" {{ request('metode') == 'transfer' ? 'selected' : '' }}>Transfer</option>
                            <option value="midtrans" {{ request('metode') == 'midtrans' ? 'selected' : '' }}>Midtrans</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabel Pembayaran -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            @if($pembayaranManual->isEmpty())
                <p class="text-gray-500 text-center py-4">Belum ada data pembayaran.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Siswa</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bulan</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($pembayaranManual as $pembayaran)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $pembayaran->siswa->nama_siswa ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $pembayaran->tahun }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 capitalize">
                                        {{ $pembayaran->status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $pembayaranManual->appends(request()->query())->links() }}
        </div>
    </div>
</x-app-layout>

===== resources\views\pembayaran\midtrans.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-gray-900">
            Pembayaran Onlines
        </h2>
    </x-slot>

    <form id="midtrans-form" action="{{ route('pembayaran.midtrans', $siswa->id_siswa) }}" method="POST">
        @csrf
        <div class="py-8 max-w-2xl mx-auto" x-data="{
            months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            selectedMonths: [],
            jumlahSPP: {{ $jumlahSPP ?? 0 }},
            get totalBayar() {
                return this.selectedMonths.length * this.jumlahSPP;
            }
        }" x-init="console.log('Jumlah SPP per bulan:', jumlahSPP)">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition-all duration-300">
                <div class="space-y-4">
                    <p class="text-lg text-gray-800">Nama Siswa: <span
                            class="font-medium">{{ $siswa->nama_siswa }}</span></p>
                    <p class="text-lg text-gray-800">SPP per bulan: <span class="font-medium">Rp
                            {{ number_format($jumlahSPP ?? 0, 0, ',', '.') }}</span></p>
                </div>

                <!-- Pilih bulan -->
                <div class="mt-6">
                    <label for="bulan" class="block text-sm font-semibold text-gray-700 mb-2">Bulan
                        Pembayaran</label>

                    <!-- Tag bulan yang sudah dipilih -->
                    <div class="flex flex-wrap gap-2 mb-3">
                        <template x-for="month in selectedMonths" :key="month">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 transition-all duration-200 hover:bg-indigo-200">
                                <span x-text="month"></span>
                                <button @click.prevent="selectedMonths = selectedMonths.filter(m => m !== month)"
                                    class="ml-2 text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </template>
                    </div>

                    <!-- Dropdown pilih bulan -->
                    <select x-ref="monthSelect"
                        @change="if ($event.target.value && !selectedMonths.includes($event.target.value)) {
                            selectedMonths.push($event.target.value);
                            $event.target.value = '';
                        }"
                        class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 bg-gray-50 text-gray-800">
                        <option value="">Pilih Bulan</option>
                        <template x-for="month in months.filter(m => !selectedMonths.includes(m))"
                            :key="month">
                            <option :value="month" x-text="month"></option>
                        </template>
                    </select>

                    <!-- Hidden input supaya data bulan terkirim ke server -->
                    <template x-for="month in selectedMonths" :key="month">
                        <input type="hidden" name="bulan[]" :value="month" />
                    </template>
                </div>

                <!-- Pilih tahun -->
                <div class="mt-6">
                    <label for="tahun" class="block text-sm font-semibold text-gray-700 mb-2">Tahun</label>
                    <select name="tahun" id="tahun" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 bg-gray-50 text-gray-800">
                        @for ($i = now()->year; $i >= now()->year - 5; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <!-- Total bayar -->
                <div class="mt-6 text-lg font-semibold text-indigo-800">
                    Total Bayar: <span x-text="'Rp ' + totalBayar.toLocaleString('id-ID')"
                        class="text-indigo-600"></span>
                </div>

                <!-- Form bayar -->
                <div class="mt-8">
                    <input type="hidden" name="jumlah" :value="totalBayar" />
                    <button type="submit" id="pay-button"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 shadow-md hover:shadow-lg">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </form>

    {{-- Ganti seluruh blok <script> di midtrans.blade.php dengan ini --}}

{{-- 1. Impor library SweetAlert dan Snap.js --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>

<script>
    const midtransForm = document.getElementById('midtrans-form');
    midtransForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(midtransForm);
        const formActionUrl = midtransForm.action;

        fetch(formActionUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": formData.get('_token')
            },
            body: JSON.stringify({
                bulan: formData.getAll('bulan[]'),
                tahun: formData.get('tahun'),
                jumlah: formData.get('jumlah')
            })
        })
        .then(res => {
            if (!res.ok) {
                // Jika server mengembalikan error (seperti 422 untuk duplikat),
                // kita coba baca pesannya sebagai JSON dan lemparkan sebagai error
                return res.json().then(errData => { throw errData; });
            }
            return res.json();
        })
        .then(data => {
            if (data.snapToken) {
                snap.pay(data.snapToken, {
                    onSuccess: function(result) {
                        Swal.fire('Berhasil!', 'Pembayaran Anda telah berhasil.', 'success')
                            .then(() => window.location.href = "{{ route('riwayat.index') }}");
                    },
                    onPending: function(result) {
                        Swal.fire('Menunggu', 'Pembayaran Anda sedang diproses.', 'info')
                            .then(() => window.location.href = "{{ route('riwayat.index') }}");
                    },
                    onError: function(result) {
                        Swal.fire('Gagal', 'Pembayaran gagal diproses.', 'error');
                    },
                    onClose: function() {
                        console.log('Anda menutup popup pembayaran.');
                        window.location.href = "{{ route('riwayat.index') }}";
                    }
                });
            } else {
                 // Ini terjadi jika ada masalah tak terduga tapi respons server OK
                 Swal.fire('Error', 'Gagal mendapatkan token pembayaran.', 'error');
            }
        })
        .catch(error => {
            // =======================================================
            // INI BAGIAN UTAMA UNTUK MENANGANI ERROR DARI SERVER
            // =======================================================
            console.error('Error:', error);
            Swal.fire({
                title: 'Terjadi Kesalahan',
                // Tampilkan pesan error dari controller (misal: "Pembayaran bulan... sudah ada")
                // atau tampilkan pesan default jika tidak ada
                text: error.message || 'Tidak bisa memproses permintaan. Coba lagi nanti.',
                icon: 'error'
            });
        });
    });
</script>
</x-app-layout>

===== resources\views\pembayaran\pilih-metode.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pilih Metode Pembayaran untuk {{ $siswa->nama_siswa }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md mb-8 text-center">
                <p class="text-gray-600">Total Tagihan SPP Saat Ini</p>
                <p class="text-4xl font-bold text-red-600">Rp {{ number_format($totalTunggakan, 0, ',', '.') }}</p>
                <p class="text-xs text-gray-500 mt-1">Ini adalah total dari semua bulan yang menunggak.</p>
            </div>

            <div class="grid grid-cols-1 {{ $midtransAktif ? 'md:grid-cols-2' : 'md:max-w-md md:mx-auto' }} gap-6">
                
                @if ($midtransAktif)
                    <a href="{{ route('pembayaran.midtrans.form', $siswa->id_siswa) }}?{{ $menunggakQuery }}" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-lg hover:border-indigo-500 border-2 border-transparent transition-all transform hover:-translate-y-1">
                        <h3 class="text-lg font-bold text-gray-900">Bayar Otomatis (Online)</h3>
                        <p class="text-sm text-gray-600 mt-2">Pilihan pembayaran instan melalui Virtual Account, E-Wallet, Kartu Kredit, dll.</p>
                        <div class="mt-4 text-indigo-600 font-semibold flex items-center">
                            Lanjutkan ke Midtrans <span class="ml-2">&rarr;</span>
                        </div>
                    </a>
                @endif

                <a href="{{ route('pembayaran.upload.create') }}?id_siswa={{ $siswa->id_siswa }}&{{ $menunggakQuery }}" class="block p-6 bg-white rounded-xl shadow-md hover:shadow-lg hover:border-green-500 border-2 border-transparent transition-all transform hover:-translate-y-1">
                    <h3 class="text-lg font-bold text-gray-900">Upload Bukti Transfer</h3>
                    <p class="text-sm text-gray-600 mt-2">Lakukan transfer manual ke rekening sekolah, lalu unggah bukti pembayaran untuk diverifikasi.</p>
                    <div class="mt-4 text-green-600 font-semibold flex items-center">
                        Upload Bukti <span class="ml-2">&rarr;</span>
                    </div>
                </a>
            </div>

            {{-- Info Bayar Langsung yang Sudah Diperbarui --}}
            <div class="mt-8 bg-white p-6 rounded-xl shadow-md flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="bg-gray-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900">Bayar Langsung di Sekolah</h3>
                    <p class="text-sm text-gray-600 mt-1">
                        Anda juga bisa melakukan pembayaran langsung di loket bendahara sekolah pada jam kerja.
                        <br>
                        <span class="text-xs text-gray-500">Alamat: Jl. Taman Pendidikan, Kel. Moodu, Kec. Kota Timur, Kota Gorontalo.</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

===== resources\views\pembayaran\upload_transfer.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Upload Bukti Transfer') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
            @if (session('success'))
                <div class="mb-4 text-green-600">{{ session('success') }}</div>
            @endif
    
            <form action="{{ route('pembayaran.upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <!-- Dropdown Siswa -->
                <div class="mb-4">
                    <x-input-label for="id_siswa" value="Nama Siswa" />
                    <select name="id_siswa" id="id_siswa"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="">Pilih Siswa</option>
                        @foreach ($siswa as $item)
                            <option value="{{ $item->id_siswa }}">{{ $item->nama_siswa }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('id_siswa')" class="mt-2" />
                </div>

                <!-- Multi-select Bulan dan Jumlah dalam satu x-data -->
                <div x-data="{
                    months: [
                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                    ],
                    selectedMonths: [],
                    jumlahSPP: {{ $defaultJumlahSPP ?? 0 }},
                    get totalBayar() {
                        return this.selectedMonths.length * this.jumlahSPP;
                    }
                }" x-init="console.log('Alpine initialized, jumlahSPP:', jumlahSPP)">
                    <!-- Multi-select Bulan -->
                    <div class="mb-4">
                        <x-input-label for="bulan" :value="__('Bulan Pembayaran')" />
                        <div class="flex flex-wrap gap-2 mb-2">
                            <template x-for="month in selectedMonths" :key="month">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                    <span x-text="month"></span>
                                    <button @click.prevent="selectedMonths = selectedMonths.filter(m => m !== month)"
                                        class="ml-1 text-indigo-500 hover:text-indigo-700">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </template>
                        </div>
    
                        <!-- Dropdown Bulan -->
                        <select x-ref="monthSelect"
                            @change="if ($event.target.value && !selectedMonths.includes($event.target.value)) {
                                selectedMonths.push($event.target.value);
                                $event.target.value = '';
                                console.log('Selected months:', selectedMonths, 'Total Bayar:', totalBayar);
                            }"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Pilih Bulan</option>
                            <template x-for="month in months.filter(m => !selectedMonths.includes(m))" :key="month">
                                <option x-text="month" :value="month"></option>
                            </template>
                        </select>
    
                        <!-- Hidden input untuk bulan -->
                        <template x-for="month in selectedMonths" :key="month">
                            <input type="hidden" name="bulan[]" :value="month" />
                        </template>
    
                        <x-input-error :messages="$errors->get('bulan')" class="mt-2" />
                    </div>
    
                    <!-- Jumlah -->
                    <div class="mb-4">
                        <x-input-label for="jumlah" value="Jumlah" />
                        <input id="jumlah" name="jumlah" type="number" class="mt-1 block w-full bg-gray-100"
                            x-bind:value="totalBayar" readonly />
                        <small class="text-gray-500">Jumlah akan dihitung otomatis: jumlah bulan Ã—
                            {{ number_format($defaultJumlahSPP ?? 0, 0, ',', '.') }}</small>
                        {{-- <!-- Debug -->
                        <div x-text="'Debug Total Bayar: ' + totalBayar"></div> --}}
                    </div>
                </div>
    
                <!-- Tahun -->
                <div class="mb-4">
                    <x-input-label for="tahun" value="Tahun" />
                    <select name="tahun" id="tahun"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @for ($year = now()->year; $year >= 2020; $year--)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>
                </div>
    
                <!-- Bukti Transfer -->
                <div class="mb-4">
                    <x-input-label for="bukti_transfer" value="Upload Bukti Transfer" />
                    <input type="file" name="bukti_transfer" id="bukti_transfer" class="block mt-1 w-full" required>
                    <x-input-error :messages="$errors->get('bukti_transfer')" class="mt-2" />
                </div>
    
                <!-- Catatan -->
                <div class="mb-4">
                    <x-input-label for="catatan" value="Catatan (Opsional)" />
                    <textarea name="catatan" id="catatan" class="block w-full mt-1 rounded-md"></textarea>
                </div>
    
                <x-primary-button>Upload</x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>

===== resources\views\pemetaan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pemetaan Siswa & Guru') }}
        </h2>
    </x-slot>

    {{-- Load Library Leaflet.js --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Elemen div untuk menampung peta --}}
                    <div id="map" style="height: 600px;"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const map = L.map('map').setView([0.542, 123.059], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: 'Â© OpenStreetMap'
            }).addTo(map);

            fetch('{{ route('api.locations') }}')
                .then(response => response.json())
                .then(data => {
                    data.forEach(location => {
                        const marker = L.marker([location.latitude, location.longitude]).addTo(map);
                        
                        // BUAT KONTEN TOOLTIP
                        const tooltipContent = `<b>${location.nama}</b><br>${location.info}`;

                        // GUNAKAN .bindTooltip() AGAR MUNCUL SAAT HOVER
                        marker.bindTooltip(tooltipContent);
                    });
                })
                .catch(error => console.error('Error fetching locations:', error));
        });
    </script>
</x-app-layout>

===== resources\views\pengaturan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan Aplikasi') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('pengaturan.update') }}" method="POST">
                        @csrf

                        <div 
                            x-data="{
                                amount: '{{ old('jumlah_spp', $pengaturan['jumlah_spp'] ?? 700000) }}',
                                formatAmount(value) {
                                    // Hapus semua karakter non-digit
                                    let cleanValue = value.toString().replace(/[^0-9]/g, '');
                                    // Jika kosong, anggap 0
                                    if (cleanValue === '' || cleanValue === null) cleanValue = '0';
                                    // Ubah menjadi angka, lalu format ke format Rupiah (tanpa 'Rp')
                                    return new Intl.NumberFormat('id-ID').format(parseInt(cleanValue, 10));
                                },
                                updateValue(event) {
                                    this.amount = event.target.value.replace(/[^0-9]/g, '');
                                }
                            }"
                            class="mb-4"
                        >
                            <label for="jumlah_spp_display" class="block text-sm font-medium text-gray-700">Nominal SPP (Rp)</label>
                            
                            {{-- Input yang dilihat pengguna, sekarang dengan event live formatting --}}
                            <input 
                                type="text" 
                                id="jumlah_spp_display"
                                x-on:input="event.target.value = formatAmount(event.target.value)"
                                x-init="$el.value = formatAmount(amount)"
                                @change="updateValue($event)"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" 
                                required
                            >
                            
                            {{-- Input tersembunyi yang dikirim ke server --}}
                            <input type="hidden" name="jumlah_spp" x-bind:value="amount">
                        </div>

                        <div class="mb-4">
                            <label for="midtrans_active" class="block text-sm font-medium text-gray-700">Pembayaran
                                Midtrans</label>
                            <select name="midtrans_active" id="midtrans_active"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="true" @selected(old('midtrans_active', $pengaturan['midtrans_active'] ?? 'false') == 'true')>Aktif</option>
                                <option value="false" @selected(old('midtrans_active', $pengaturan['midtrans_active'] ?? 'false') == 'false')>Non-Aktif</option>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Jika non-aktif, wali murid tidak akan melihat opsi
                                pembayaran online via Midtrans.</p>
                        </div>

                        <div class="mb-6">
                            <label for="nomor_rekening" class="block text-sm font-medium text-gray-700">Nomor Rekening
                                Sekolah</label>
                            <input type="text" name="nomor_rekening" id="nomor_rekening"
                                value="{{ old('nomor_rekening', $pengaturan['nomor_rekening'] ?? '') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                placeholder="Contoh: BCA 123456789 a/n Yayasan...">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Simpan Pengaturan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\profile\partials\delete-user-form.blade.php =====
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

===== resources\views\profile\partials\update-password-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\partials\update-profile-information-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\riwayat\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Riwayat Pembayaran') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        {{-- ======================================================= --}}
        {{-- FORM FILTER OTOMATIS --}}
        {{-- ======================================================= --}}
        <form id="filter-form" action="{{ route('riwayat.index') }}" method="GET"
            class="mb-6 p-4 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                {{-- Filter Siswa: Hanya muncul untuk Bendahara & Ketua Yayasan --}}
                @if (Auth::user()->role !== 'wali_murid')
                    <div>
                        <label for="siswa" class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                        <select name="siswa" id="siswa"
                            class="w-full border-gray-300 rounded-md shadow-sm text-sm">
                            <option value="">-- Semua Siswa --</option>
                            @foreach ($siswa as $s)
                                <option value="{{ $s->id_siswa }}"
                                    {{ request('siswa') == $s->id_siswa ? 'selected' : '' }}>
                                    {{ $s->nama_siswa }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif

                {{-- Filter Tahun --}}
                <div>
                    <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                    <input name="tahun" id="tahun" type="number" value="{{ request('tahun') }}"
                        placeholder="Contoh: 2025" class="w-full border-gray-300 rounded-md shadow-sm text-sm">
                </div>

                {{-- Filter Status --}}
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select name="status" id="status" class="w-full border-gray-300 rounded-md shadow-sm text-sm">
                        <option value="">-- Semua Status --</option>
                        <option value="diterima" {{ request('status') == 'diterima' ? 'selected' : '' }}>Diterima
                        </option>
                        <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Menunggu
                        </option>
                        <option value="ditolak" {{ request('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>
            </div>
        </form>

        {{-- ======================================================= --}}
        {{-- TABEL YANG LEBIH LENGKAP --}}
        {{-- ======================================================= --}}
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        {{-- Kolom Siswa: Sekarang tampil untuk SEMUA peran --}}
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Siswa</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Bulan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tahun</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                        {{-- Kolom Metode: Ditambahkan untuk semua peran --}}
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Metode</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($pembayaran as $p)
                        <tr class="hover:bg-gray-50">
                            {{-- Data Siswa: Sekarang tampil untuk SEMUA peran --}}
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->siswa->nama_siswa }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">
                                {{ is_array($p->bulan) ? implode(', ', $p->bulan) : $p->bulan }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $p->tahun }}</td>
                            <td class="px-4 py-3 text-sm text-gray-900">Rp {{ number_format($p->jumlah, 0, ',', '.') }}
                            </td>
                            {{-- Data Metode: Ditambahkan untuk semua peran --}}
                            <td class="px-4 py-3 text-sm text-gray-900">{{ ucfirst($p->metode) }}</td>
                            <td class="px-4 py-3 text-sm">
                                {{-- Badge Status --}}
                                @if ($p->status == 'diterima')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Lunas</span>
                                @elseif ($p->status == 'menunggu')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Menunggu</span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">{{ ucfirst($p->status) }}</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-900">
                                {{-- Tombol Aksi yang Cerdas (logika tetap sama) --}}
                                @if ($p->status == 'menunggu' && $p->is_midtrans)
                                    <button class="lanjut-bayar-btn ..." data-snap-token="{{ $p->snap_token }}">
                                        Lanjutkan Pembayaran
                                    </button>
                                @elseif ($p->status == 'diterima' && $p->kwitansi)
                                    <button>
                                        <a href="{{ route('kwitansi.download', $p->kwitansi) }}">
                                            Download
                                        </a>
                                    </button>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            {{-- Sesuaikan colspan karena ada penambahan kolom --}}
                            <td colspan="8" class="px-4 py-6 text-center text-sm text-gray-500">
                                Tidak ada riwayat pembayaran.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $pembayaran->links() }}
        </div>
    </div>

    {{-- Script untuk tombol "Lanjutkan Pembayaran" --}}
    @push('scripts')
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const continueButtons = document.querySelectorAll('.lanjut-bayar-btn');
                continueButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const snapToken = this.dataset.snapToken;
                        if (snapToken) {
                            window.snap.pay(snapToken, {
                                onSuccess: (result) => {
                                    window.location.reload();
                                },
                                onPending: (result) => {
                                    window.location.reload();
                                },
                                onError: (result) => {
                                    alert("Pembayaran gagal atau token kedaluwarsa.");
                                },
                                onClose: () => {
                                    console.log('Popup ditutup.');
                                }
                            });
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterForm = document.getElementById('filter-form');
                if (!filterForm) return; // Keluar jika form tidak ditemukan

                let debounceTimeout;

                // Fungsi untuk mengirim form dengan sedikit jeda
                const submitForm = () => {
                    clearTimeout(debounceTimeout);
                    debounceTimeout = setTimeout(() => {
                        filterForm.submit();
                    }, 500); // Jeda 0.5 detik setelah input terakhir
                };

                // Terapkan ke semua input dan select di dalam form
                filterForm.querySelectorAll('select, input').forEach(input => {
                    // Gunakan 'input' untuk reaksi instan saat mengetik
                    input.addEventListener('input', submitForm);
                });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\siswa\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Siswa Baru') }}
        </h2>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    
                    {{-- Informasi Siswa --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Siswa</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                            <input type="text" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                            <input type="text" name="nis" id="nis" value="{{ old('nis') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div class="md:col-span-2">
                             <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                            <input type="text" name="kelas" id="kelas" value="{{ old('kelas') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required placeholder="Contoh: 1A">
                        </div>
                    </div>

                    {{-- Informasi Wali Murid dengan Pilihan Dinamis --}}
                    <div x-data="{ waliOption: '{{ old('wali_option', 'existing') }}' }" class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Wali Murid</h3>
                        <div class="flex space-x-4 mb-4">
                            <label class="flex items-center">
                                <input type="radio" name="wali_option" value="existing" x-model="waliOption" class="text-indigo-600 focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-700">Pilih dari Wali Murid yang Sudah Ada</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="wali_option" value="new" x-model="waliOption" class="text-indigo-600 focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-700">Buat Akun Wali Murid Baru</span>
                            </label>
                        </div>

                        {{-- Opsi 1: Dropdown Wali yang Sudah Ada --}}
                        <div x-show="waliOption === 'existing'" class="space-y-4">
                            <select name="id_wali" id="id_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">- Pilih Wali Murid -</option>
                                @foreach ($walis as $wali)
                                    <option value="{{ $wali->id }}" @selected(old('id_wali') == $wali->id)>{{ $wali->name }} ({{ $wali->email }})</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Opsi 2: Form Buat Akun Baru --}}
                        <div x-show="waliOption === 'new'" class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4 border rounded-lg bg-gray-50">
                            <h4 class="md:col-span-2 font-semibold text-gray-700">Detail Akun Baru</h4>
                            <div>
                                <label for="nama_wali" class="block text-sm font-medium text-gray-700">Nama Lengkap Wali</label>
                                <input type="text" name="nama_wali" id="nama_wali" value="{{ old('nama_wali') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label for="email_wali" class="block text-sm font-medium text-gray-700">Email Wali</label>
                                <input type="email" name="email_wali" id="email_wali" value="{{ old('email_wali') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label for="password_wali" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" name="password_wali" id="password_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                             <div>
                                <label for="password_wali_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                                <input type="password" name="password_wali_confirmation" id="password_wali_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                        </div>
                    </div>

                    {{-- Informasi Lokasi --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Lokasi</h3>
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="space-y-4">
                             <div>
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('alamat') }}</textarea>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                                    <input type="text" name="latitude" id="latitude" value="{{ old('latitude') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly>
                                </div>
                                <div>
                                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                                    <input type="text" name="longitude" id="longitude" value="{{ old('longitude') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Tandai Lokasi di Peta</label>
                            <div id="map" style="height: 200px; cursor: pointer;" class="rounded-lg border z-0 mt-1"></div>
                            <button type="button" id="get-location-btn" class="text-sm text-indigo-600 hover:underline font-semibold mt-2">Gunakan Lokasi Saya</button>
                            <p id="status" class="text-xs text-gray-500"></p>
                        </div>
                    </div>

                    <div class="mt-8 border-t pt-6 flex justify-end">
                        <a href="{{ route('siswa.index') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                        <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Simpan Siswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const latInput = document.getElementById('latitude');
                const lonInput = document.getElementById('longitude');
                const getLocationBtn = document.getElementById('get-location-btn');
                const statusEl = document.getElementById('status');
                const defaultCoords = [0.542, 123.059];
                const map = L.map('map').setView(defaultCoords, 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                const marker = L.marker(defaultCoords, { draggable: true }).addTo(map);

                function updateInputs(latlng) {
                    latInput.value = latlng.lat.toFixed(7);
                    lonInput.value = latlng.lng.toFixed(7);
                }

                updateInputs(marker.getLatLng());

                marker.on('dragend', function(e) { updateInputs(e.target.getLatLng()); statusEl.textContent = 'Posisi disesuaikan.'; });
                map.on('click', function(e) { marker.setLatLng(e.latlng); updateInputs(e.latlng); statusEl.textContent = 'Posisi ditandai.'; });
                
                getLocationBtn.addEventListener('click', function() {
                    if (!navigator.geolocation) { statusEl.textContent = 'Geolocation tidak didukung.'; return; }
                    statusEl.textContent = 'Meminta lokasi...';
                    navigator.geolocation.getCurrentPosition(function(position) {
                        const userCoords = { lat: position.coords.latitude, lng: position.coords.longitude };
                        map.setView(userCoords, 16);
                        marker.setLatLng(userCoords);
                        updateInputs(userCoords);
                        statusEl.textContent = 'Lokasi ditemukan!';
                    }, function() { statusEl.textContent = 'Gagal mendapatkan lokasi.'; });
                });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\siswa\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Siswa: ') }} {{ $siswa->nama_siswa }}
        </h2>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md">
                
                {{-- FORM UTAMA UNTUK UPDATE DATA SISWA --}}
                <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST" id="edit-siswa-form">
                    @csrf
                    @method('PUT')
                    
                    {{-- Informasi Siswa --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Informasi Siswa</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                            <input type="text" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                            <input type="text" name="nis" id="nis" value="{{ old('nis', $siswa->nis) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div class="md:col-span-2">
                             <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                            <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $siswa->kelas) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                    </div>

                    {{-- Informasi Wali Murid --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mt-8 mb-4">Informasi Akun Wali Murid</h3>
                    @if ($siswa->wali)
                        {{-- Jika akun wali sudah ada, tampilkan dan berikan opsi ganti --}}
                        <div>
                            <label for="id_wali" class="block text-sm font-medium text-gray-700">Wali Murid (Induk)</label>
                            <select name="id_wali" id="id_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                @foreach ($walis as $wali)
                                    <option value="{{ $wali->id }}" @selected(old('id_wali', $siswa->id_wali) == $wali->id)>{{ $wali->name }} ({{ $wali->email }})</option>
                                @endforeach
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Siswa ini sudah terhubung. Anda bisa mengubah tautan wali murid jika diperlukan.</p>
                        </div>
                    @else
                        {{-- Jika akun wali belum ada, berikan opsi untuk menautkan --}}
                         <p class="text-sm text-gray-500 mb-4">Siswa ini belum memiliki akun wali murid. Silakan pilih dari daftar untuk menautkannya.</p>
                         <div>
                            <label for="id_wali" class="block text-sm font-medium text-gray-700">Pilih Akun Wali</label>
                             <select name="id_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="">- Pilih Wali Murid -</option>
                                @foreach ($walis as $wali)
                                    <option value="{{ $wali->id }}">{{ $wali->name }} ({{ $wali->email }})</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    
                    {{-- Informasi Lokasi --}}
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mt-8 mb-4">Informasi Lokasi</h3>
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="space-y-4">
                             <div>
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('alamat', $siswa->alamat) }}</textarea>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                                    <input type="text" name="latitude" id="latitude" value="{{ old('latitude', $siswa->latitude) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly>
                                </div>
                                <div>
                                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                                    <input type="text" name="longitude" id="longitude" value="{{ old('longitude', $siswa->longitude) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Tandai Lokasi di Peta</label>
                            <div id="map" style="height: 200px; cursor: pointer;" class="rounded-lg border z-0 mt-1"></div>
                        </div>
                    </div>
                </form>

                {{-- FORM TERPISAH UNTUK RESET PASSWORD (JIKA WALI SUDAH ADA) --}}
                @if ($siswa->wali)
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">Aksi Cepat</label>
                    <div class="mt-1">
                        <form action="{{ route('siswa.reset-password', $siswa) }}" method="POST" onsubmit="return confirm('Yakin ingin me-reset password untuk wali murid ini? Password baru akan dikirim melalui WhatsApp.')" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-yellow-500 text-white text-sm font-semibold rounded-lg shadow-sm hover:bg-yellow-600">
                                Reset Password Wali
                            </button>
                        </form>
                    </div>
                </div>
                @endif
                
                {{-- TOMBOL SUBMIT UNTUK FORM UTAMA --}}
                <div class="mt-8 border-t pt-6 flex justify-end">
                    <a href="{{ route('siswa.index') }}" class="text-gray-600 py-2 px-4 rounded-md hover:bg-gray-100">Batal</a>
                    <button type="submit" form="edit-siswa-form" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update Data</button>
                </div>

            </div>
        </div>
    </div>
    
    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const latInput = document.getElementById('latitude');
                const lonInput = document.getElementById('longitude');
                
                const initialLat = parseFloat(latInput.value) || 0.542;
                const initialLon = parseFloat(lonInput.value) || 123.059;
                const initialCoords = [initialLat, initialLon];
                const initialZoom = latInput.value ? 16 : 13;

                const map = L.map('map').setView(initialCoords, initialZoom);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                const marker = L.marker(initialCoords, { draggable: true }).addTo(map);

                function updateInputs(latlng) {
                    latInput.value = latlng.lat.toFixed(7);
                    lonInput.value = latlng.lng.toFixed(7);
                }

                marker.on('dragend', function(e) { updateInputs(e.target.getLatLng()); });
                map.on('click', function(e) { marker.setLatLng(e.latlng); updateInputs(e.latlng); });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\siswa\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Data Siswa') }}
            </h2>
            @if(auth()->user()->role === 'bendahara')
                <a href="{{ route('siswa.create') }}" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition-colors">
                    Tambah Siswa Baru
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 bg-white p-4 rounded-xl shadow-md">
                <form action="{{ route('siswa.index') }}" method="GET">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-2">
                            <label for="search" class="sr-only">Cari</label>
                            <input type="text" name="search" id="search" placeholder="Cari Nama Siswa atau NIS..." value="{{ request('search') }}" class="block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="kelas" class="sr-only">Kelas</label>
                            <select name="kelas" id="kelas" class="block w-full border-gray-300 rounded-md shadow-sm" onchange="this.form.submit()">
                                <option value="">Semua Kelas</option>
                                @foreach($kelasOptions as $kelas)
                                    <option value="{{ $kelas }}" @selected(request('kelas') == $kelas)>{{ $kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NIS</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                                @if(auth()->user()->role === 'bendahara')
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($siswas as $siswa)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $siswa->nama_siswa }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $siswa->nis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $siswa->kelas }}</td>
                                    @if(auth()->user()->role === 'bendahara')
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                                            <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ auth()->user()->role === 'bendahara' ? '4' : '3' }}" class="px-6 py-12 text-center text-sm text-gray-500">
                                        Belum ada data siswa yang ditambahkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($siswas->hasPages())
                    <div class="p-4 border-t border-gray-200">
                        {{ $siswas->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\tunggakan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Tunggakan') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Wali Murid</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tunggakan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($tunggakan as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->siswa->nama_siswa }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->siswa->wali->name ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->bulan }} {{ $item->tahun }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp {{ number_format($item->jumlah_tunggakan, 0, ',', '.') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Logika Tombol Pintar --}}
                                            @php
                                                $reminderSent = $item->last_reminder_sent_at;
                                                $canSendReminder = is_null($reminderSent) || \Carbon\Carbon::parse($reminderSent)->addDay()->isPast();
                                            @endphp

                                            @if ($canSendReminder)
                                                <form action="{{ route('tunggakan.send-reminder', $item->id_tunggakan) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900 font-semibold">Kirim Pengingat</button>
                                                </form>
                                            @else
                                                <div class="flex items-center text-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Terkirim</span>
                                                </div>
                                                <span class="text-xs text-gray-400">
                                                    {{ \Carbon\Carbon::parse($reminderSent)->diffForHumans() }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                            Tidak ada data tunggakan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $tunggakan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\wali\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Wali Murid') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <h3 class="text-2xl font-bold text-gray-800">Informasi Putra/i Anda</h3>
                <p class="text-gray-500">Ringkasan status pembayaran SPP untuk setiap anak.</p>
            </div>

            @if($dataAnak->isEmpty())
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center text-gray-500">
                        Anda belum memiliki data siswa yang terhubung dengan akun ini.
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($dataAnak as $anak)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col justify-between">
                            <div class="p-6">
                                <a href="{{ route('wali.detail-siswa', $anak['id_siswa']) }}" class="text-xl font-bold text-gray-900 hover:text-indigo-600 hover:underline">
                                    {{ $anak['nama_siswa'] }}
                                </a>
                                <p class="text-sm text-gray-600">Kelas: {{ $anak['kelas'] ?? '-' }}</p>

                                <div class="mt-4">
                                    <p class="text-xs font-semibold text-gray-400 uppercase">SPP Bulan {{ \Carbon\Carbon::now()->format('F') }}</p>
                                    @if ($anak['spp_bulan_ini_lunas'])
                                        <div class="flex items-center mt-1 text-green-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                            <span class="font-semibold">Lunas</span>
                                        </div>
                                    @else
                                        <div class="flex items-center mt-1 text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>
                                            <span class="font-semibold">Belum Lunas</span>
                                        </div>
                                    @endif
                                </div>
                                
                                {{-- ======================================================= --}}
                                {{-- PATOKAN: resources/views/wali/dashboard.blade.php --}}
                                {{-- AWAL PERUBAHAN --}}
                                {{-- ======================================================= --}}
                                <div class="mt-4">
                                    <p class="text-xs font-semibold text-gray-400 uppercase">Total Tunggakan (Bulan Lalu)</p>
                                    @if ($anak['total_tunggakan'] > 0)
                                        <p class="font-bold text-lg text-red-600">Rp {{ number_format($anak['total_tunggakan'], 0, ',', '.') }}</p>
                                    @else
                                        {{-- Tampilkan Rp 0 jika tidak ada tunggakan, bukan "-" --}}
                                        <p class="font-semibold text-lg text-gray-700">Rp 0</p>
                                    @endif
                                </div>
                                {{-- ======================================================= --}}
                                {{-- AKHIR PERUBAHAN --}}
                                {{-- ======================================================= --}}

                            </div>

                            <div class="bg-gray-50 px-6 py-4">
                                @if (!$anak['spp_bulan_ini_lunas'] || $anak['total_tunggakan'] > 0)
                                    <a href="{{ route('pembayaran.pilih-metode', $anak['id_siswa']) }}" class="block text-center w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors">
                                        Bayar Sekarang
                                    </a>
                                @else
                                    <a href="{{ route('riwayat.index') }}" class="block text-center w-full bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                                        Lihat Riwayat
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

===== resources\views\wali\detail-siswa.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Pembayaran SPP - {{ $siswa->nama_siswa }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                <p class="text-gray-600">Status Pembayaran Tahun Ajaran {{ now()->year }}</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach ($statusPerBulan as $bulan => $status)
                    @php
                        $bgColor = [
                            'diterima' => 'bg-green-100 border-green-500',
                            'menunggu' => 'bg-yellow-100 border-yellow-500',
                            'belum_bayar' => 'bg-red-100 border-red-500',
                            'ditolak' => 'bg-red-200 border-red-600',
                            'Belum Jatuh Tempo' => 'bg-gray-100 border-gray-300'
                        ][$status];

                        $textColor = [
                            'diterima' => 'text-green-800',
                            'menunggu' => 'text-yellow-800',
                            'belum_bayar' => 'text-red-800',
                            'ditolak' => 'text-red-900',
                            'Belum Jatuh Tempo' => 'text-gray-500'
                        ][$status];
                    @endphp
                    <div class="p-4 rounded-lg border-2 {{ $bgColor }}">
                        <p class="font-bold text-gray-800">{{ $bulan }}</p>
                        <p class="text-sm font-semibold {{ $textColor }} mt-1">
                            {{ $status == 'diterima' ? 'Lunas' : ($status == 'belum_bayar' ? 'Menunggak' : ucfirst($status)) }}
                        </p>
                    </div>
                @endforeach
            </div>
             <div class="mt-6 text-center">
                <a href="{{ route('dashboard') }}" class="text-indigo-600 hover:underline">
                    &larr; Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\payment.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pembayaran SPP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Klik tombol di bawah untuk melakukan pembayaran.</p>

                    <button id="pay-button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Script Midtrans --}}
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('#pay-button').click(function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('payment.token') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function (data) {
                    snap.pay(data.snapToken, {
                        onSuccess: function(result){
                            alert("Pembayaran sukses!");
                            console.log(result);
                        },
                        onPending: function(result){
                            alert("Menunggu pembayaran...");
                            console.log(result);
                        },
                        onError: function(result){
                            alert("Pembayaran gagal!");
                            console.log(result);
                        },
                        onClose: function(){
                            alert("Popup ditutup.");
                        }
                    });
                }
            });
        });
    </script>
</x-app-layout>

===== resources\views\welcome.blade.php =====
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website SPP KB TK SD Al-Azhar 43 Gorontalo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-white text-slate-900 antialiased">

    {{-- Latar belakang abstrak dengan gradien biru soft --}}
    <div class="absolute top-0 left-0 w-full h-[120vh] bg-slate-50 -z-10"></div>
    <div class="absolute inset-x-0 top-0 -z-10 h-full w-full bg-white [mask-image:radial-gradient(farthest-side,white,transparent)]"></div>


    <div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 10)">

        {{-- HEADER --}}
        <header x-data="{ mobileMenuOpen: false }" class="w-full sticky top-0 z-50 transition-all duration-300" :class="{ 'bg-white/80 shadow-lg backdrop-blur-sm': scrolled }">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-20">
                    <a href="/" class="text-xl md:text-2xl font-bold text-sky-600">Al-Azhar 43 Gorontalo</a>
                    <nav class="hidden md:flex items-center space-x-8">
                        <a href="#fitur" class="font-medium text-slate-600 hover:text-sky-600 transition-colors">Metode Bayar</a>
                        <a href="#testimoni" class="font-medium text-slate-600 hover:text-sky-600 transition-colors">Testimoni</a>
                        <a href="#faq" class="font-medium text-slate-600 hover:text-sky-600 transition-colors">FAQ</a>
                        <a href="{{ route('login') }}" 
                           class="bg-sky-500 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md hover:bg-sky-600 transition-all duration-200 transform hover:-translate-y-0.5">
                           Login
                        </a>
                    </nav>
                    
                    <div class="md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-800"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path></svg></button>
                    </div>
                </div>
            </div>
            <div x-show="mobileMenuOpen" x-transition @click.away="mobileMenuOpen = false" class="md:hidden absolute top-full w-full bg-white shadow-lg rounded-b-lg p-5 space-y-3">
                <a href="#fitur" @click="mobileMenuOpen=false" class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">Metode Bayar</a>
                <a href="#testimoni" @click="mobileMenuOpen=false" class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">Testimoni</a>
                <a href="#faq" @click="mobileMenuOpen=false" class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">FAQ</a>
                <a href="{{ route('login') }}" class="block w-full text-left font-medium text-slate-600 hover:text-sky-600">Login</a>
                <a href="{{ route('register') }}" class="block w-full text-left bg-sky-500 text-white font-semibold px-5 py-2.5 rounded-lg text-center">Daftar</a>
            </div>
        </header>

        <main>
            <section class="relative pt-16 md:pt-24 pb-24 md:pb-32">
                <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight text-slate-900 mb-6">
                            Pembayaran SPP <span class="text-sky-600">Al-Azhar 43 Gorontalo</span> Kini Lebih Mudah
                        </h1>
                        <p class="text-lg md:text-xl text-slate-600 max-w-xl mx-auto md:mx-0 mb-10">
                            Selamat datang di website pembayaran resmi kami. Pilih metode pembayaran yang paling nyaman untuk Ayah/Bunda, langsung dari rumah atau di sekolah.
                        </p>
                        <a href="{{ route('login') }}" class="inline-block bg-sky-500 text-white font-bold text-lg px-8 py-4 rounded-lg shadow-lg shadow-sky-500/25 hover:bg-sky-600 transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-2xl">
                            Masuk ke Website
                        </a>
                    </div>
                    <div>
                        <img src="https://cdni.iconscout.com/illustration/premium/thumb/online-payment-app-4348238-3615958.png" alt="Ilustrasi Pembayaran Online SPP Al-Azhar Gorontalo" class="w-full h-auto">
                    </div>
                </div>
            </section>

            <section id="fitur" class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl font-extrabold text-slate-900">Tiga Pilihan Pembayaran Untuk Anda</h2>
                    <p class="mt-4 text-lg text-slate-600">Kami menyediakan berbagai pilihan untuk kemudahan dan kenyamanan Ayah/Bunda.</p>
                    <div class="grid md:grid-cols-3 gap-8 mt-16">
                        {{-- Fitur Card 1 --}}
                        <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 text-center transition-all duration-300 ease-in-out hover:bg-white hover:border-sky-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer">
                            <div class="bg-sky-100 text-sky-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg></div><h3 class="text-xl font-bold mt-6">Bayar Langsung</h3><p class="mt-2 text-slate-600">Silakan datang ke sekolah dan lakukan pembayaran langsung di bagian bendahara.</p></div>
                        {{-- Fitur Card 2 --}}
                        <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 text-center transition-all duration-300 ease-in-out hover:bg-white hover:border-sky-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer">
                            <div class="bg-sky-100 text-sky-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg></div><h3 class="text-xl font-bold mt-6">Upload Bukti Transfer</h3><p class="mt-2 text-slate-600">Transfer manual ke rekening sekolah, lalu upload bukti bayar Anda melalui portal ini.</p></div>
                        {{-- Fitur Card 3 --}}
                        <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 text-center transition-all duration-300 ease-in-out hover:bg-white hover:border-sky-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer">
                            <div class="bg-sky-100 text-sky-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg></div><h3 class="text-xl font-bold mt-6">Bayar Otomatis (Midtrans)</h3><p class="mt-2 text-slate-600">Praktis dan instan! Bayar via Virtual Account, E-Wallet (OVO, Gopay), dan lainnya.</p></div>
                    </div>
                </div>
            </section>
            
            <section class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                    <div class="pr-8">
                        <h2 class="text-4xl font-extrabold text-slate-900 leading-snug">Dirancang untuk Kemudahan Semua Pihak</h2>
                        <p class="mt-4 text-lg text-slate-600">Tidak hanya mempermudah wali murid, sistem ini juga dilengkapi fitur canggih untuk membantu manajemen sekolah.</p>
                    </div>
                    <div class="space-y-8">
                        <div class="flex items-start gap-x-5"><div class="bg-sky-100 text-sky-600 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg></div><div><h3 class="text-xl font-bold">Pengingat Tagihan Cerdas</h3><p class="mt-1 text-slate-600">Ayah/Bunda tidak akan melewatkan jadwal pembayaran berkat notifikasi otomatis via Email atau WhatsApp.</p></div></div>
                        <div class="flex items-start gap-x-5"><div class="bg-sky-100 text-sky-600 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 16.382V5.618a1 1 0 00-1.447-.894L15 7m-6 3l6-3" /></svg></div><div><h3 class="text-xl font-bold">Pemetaan Siswa & Guru</h3><p class="mt-1 text-slate-600">Fitur khusus bagi manajemen sekolah untuk memvisualisasikan data sebaran domisili guru dan siswa.</p></div></div>
                    </div>
                </div>
            </section>

            <section id="testimoni" class="py-24 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl font-extrabold text-slate-900">Apa Kata Keluarga Al-Azhar 43?</h2>
                    <div class="grid md:grid-cols-3 gap-8 mt-16 text-left">
                        <div class="bg-white p-8 rounded-xl shadow-lg"><p class="text-slate-600">"Alhamdulillah, portal ini adalah langkah maju bagi digitalisasi Al-Azhar 43. Transparansi keuangan dan pelaporan kini jauh lebih mudah kami pantau."</p><div class="flex items-center mt-6"><img class="w-12 h-12 rounded-full" src="https://i.pravatar.cc/48?u=1" alt=""><div class="ml-4"><div class="font-bold text-slate-900">Bpk. Kepala Sekolah</div><div class="text-sm text-slate-500">KB TK SD Al-Azhar 43 Gto</div></div></div></div>
                        <div class="bg-white p-8 rounded-xl shadow-lg"><p class="text-slate-600">"Sebagai orang tua, saya senang sekali bisa bayar SPP anak dari rumah. Saya paling suka fitur Midtrans, sekali klik langsung lunas dan dapat notifikasi. Tidak perlu lagi simpan-simpan struk transfer."</p><div class="flex items-center mt-6"><img class="w-12 h-12 rounded-full" src="https://i.pravatar.cc/48?u=2" alt=""><div class="ml-4"><div class="font-bold text-slate-900">Bunda Salma</div><div class="text-sm text-slate-500">Orang Tua Murid</div></div></div></div>
                        <div class="bg-white p-8 rounded-xl shadow-lg"><p class="text-slate-600">"Fitur upload bukti transfer dan konfirmasi otomatis dari Midtrans sangat meringankan pekerjaan saya. Rekonsiliasi data jadi cepat dan minim kesalahan."</p><div class="flex items-center mt-6"><img class="w-12 h-12 rounded-full" src="https://i.pravatar.cc/48?u=3" alt=""><div class="ml-4"><div class="font-bold text-slate-900">Ibu Bendahara</div><div class="text-sm text-slate-500">Staf Keuangan Sekolah</div></div></div></div>
                    </div>
                </div>
            </section>

            <section id="faq" class="py-24 bg-white">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="text-center">
                        <h2 class="text-4xl font-extrabold text-slate-900">Pertanyaan Umum (FAQ)</h2>
                        <p class="mt-4 text-lg text-slate-600">Masih ada pertanyaan? Silakan <a href="#" class="text-sky-600 font-semibold">hubungi Tata Usaha</a>.</p>
                    </div>
                    <div class="mt-12 space-y-4">
                        <div x-data="{ open: false }" class="bg-slate-50 rounded-lg border border-slate-200"><h3 class="w-full"><button @click="open = !open" class="w-full flex justify-between items-center text-left text-lg font-semibold p-6"><span :class="{'text-sky-600': open}">Bagaimana cara membayar lewat Midtrans?</span><svg class="w-6 h-6 transform transition-transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></h3><div x-show="open" x-cloak x-transition class="px-6 pb-6 text-slate-600">Sangat mudah. Di halaman tagihan Anda, pilih metode 'Bayar Otomatis via Midtrans'. Anda akan diberi pilihan untuk membayar melalui Virtual Account (BCA, Mandiri, BNI, dll.), E-Wallet (GoPay, OVO), atau gerai ritel. Cukup ikuti instruksi yang tertera hingga selesai.</div></div>
                        <div x-data="{ open: false }" class="bg-slate-50 rounded-lg border border-slate-200"><h3 class="w-full"><button @click="open = !open" class="w-full flex justify-between items-center text-left text-lg font-semibold p-6"><span :class="{'text-blue-600': open}">Jika saya sudah transfer manual, apa yang harus dilakukan?</span><svg class="w-6 h-6 transform transition-transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></h3><div x-show="open" x-cloak x-transition class="px-6 pb-6 text-slate-600">Silakan masuk ke portal, pilih menu 'Upload Bukti Bayar', lalu unggah foto atau screenshot bukti transfer Anda. Tim bendahara kami akan melakukan verifikasi pada jam kerja dan status pembayaran Anda akan diperbarui.</div></div>
                        <div x-data="{ open: false }" class="bg-slate-50 rounded-lg border border-slate-200"><h3 class="w-full"><button @click="open = !open" class="w-full flex justify-between items-center text-left text-lg font-semibold p-6"><span :class="{'text-blue-600': open}">Apakah data pembayaran saya aman?</span><svg class="w-6 h-6 transform transition-transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></h3><div x-show="open" x-cloak x-transition class="px-6 pb-6 text-slate-600">Tentu. Keamanan data keluarga besar Al-Azhar 43 adalah prioritas kami. Portal ini didukung teknologi enkripsi dan bekerjasama dengan Midtrans, gerbang pembayaran berlisensi Bank Indonesia yang terjamin keamanannya.</div></div>
                    </div>
                </div>
            </section>

            <section class="bg-sky-600">
                <div class="max-w-5xl mx-auto px-6 py-20 text-center">
                    <h2 class="text-4xl font-extrabold text-white">Siap Merasakan Kemudahan Administrasi SPP?</h2>
                    <p class="mt-4 text-lg text-sky-100 max-w-2xl mx-auto">Masuk ke portal wali murid untuk melihat tagihan, riwayat pembayaran, dan memilih metode bayar yang paling sesuai untuk Anda.</p>
                    <a href="{{ route('login') }}" class="mt-8 inline-block bg-white text-sky-600 font-bold text-lg px-8 py-4 rounded-lg shadow-lg hover:bg-slate-100 transition-all duration-300 ease-in-out transform hover:scale-105">
                        Daftar Langsung
                    </a>
                </div>
            </section>

        </main>
        
        <footer class="bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-6 py-12 text-center">
                <h3 class="text-xl font-bold">KB - TK - SD Islam Al-Azhar 43 Gorontalo</h3>
                <p class="mt-2 text-slate-400">Jl. Taman Pendidikan, Kel. Moodu, Kec. Kota Timur, Kota Gorontalo</p>
                <div class="border-t border-slate-800 text-center py-6 mt-8">
                    <p class="text-slate-500">&copy; {{ date('Y') }} YPI Al-Azhar. Seluruh Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>

```


## Entry Points & Main Configs Content
```
===== public\index.php =====
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

===== artisan =====
#!/usr/bin/env php
<?php

use Illuminate\Foundation\Application;
use Symfony\Component\Console\Input\ArgvInput;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the command...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$status = $app->handleCommand(new ArgvInput);

exit($status);

===== app\Console\Kernel.php =====
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Jalankan command setiap bulan pada tanggal 2, pukul 01:00 pagi
        $schedule->command('app:generate-tunggakan')->monthlyOn(2, '01:00');
        $schedule->command('app:send-tunggakan-reminders')->dailyAt('08:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

===== resources\js\app.js =====
import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Swal = Swal;
window.Alpine = Alpine;

Alpine.start();

===== vite.config.js =====
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});

===== config\app.php =====
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];

===== config\database.php =====
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

```

== Selesai ==
