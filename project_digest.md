# Project Digest
_Generated: 2025-09-15 13:34:15_
**Root:** D:\Laragon\www\alazharskripsi


## Struktur (filtered, no depth limit)
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
.editorconfig
.env
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
README.md
routes.txt
structure.txt
tailwind.config.js
vite.config.js
app\Http
app\Models
app\Providers
app\View
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Controllers\Auth
app\Http\Controllers\BendaharaController.php
app\Http\Controllers\Controller.php
app\Http\Controllers\GuruController.php
app\Http\Controllers\KwitansiController.php
app\Http\Controllers\MidtransController.php
app\Http\Controllers\MidtransWebhookController.php
app\Http\Controllers\PaymentController.php
app\Http\Controllers\PembayaranController.php
app\Http\Controllers\PengaturanController.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\RiwayatController.php
app\Http\Controllers\SiswaController.php
app\Http\Controllers\TunggakanController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Middleware\RoleMiddleware.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Models\Guru.php
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
bootstrap\cache\.gitignore
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
database\seeders\DatabaseSeeder.php
database\seeders\GuruSeeder.php
database\seeders\PengaturanSeeder.php
database\seeders\SiswaSeeder.php
database\seeders\UserSeeder.php
public\build
public\images
public\storage
public\.htaccess
public\favicon.ico
public\index.php
public\robots.txt
public\images\historyicon.png
public\images\homeicon.png
public\images\inputicon.png
public\images\uploadicon.png
public\images\verifyicon.png
public\images\walleticon.png
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\auth
resources\views\bendahara
resources\views\components
resources\views\guru
resources\views\kwitansi
resources\views\layouts
resources\views\pembayaran
resources\views\profile
resources\views\riwayat
resources\views\siswa
resources\views\dashboard.blade.php
resources\views\payment.blade.php
resources\views\welcome.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
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
resources\views\guru\create.blade.php
resources\views\guru\edit.blade.php
resources\views\guru\index.blade.php
resources\views\kwitansi\template.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\pembayaran\manual_create.blade.php
resources\views\pembayaran\manual_index.blade.php
resources\views\pembayaran\midtrans.blade.php
resources\views\pembayaran\upload_transfer.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\riwayat\index.blade.php
resources\views\siswa\create.blade.php
resources\views\siswa\edit.blade.php
resources\views\siswa\index.blade.php
routes\auth.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\private
storage\app\public
storage\app\.gitignore
storage\app\private\.gitignore
storage\app\public\bukti-transfer
storage\app\public\kwitansi
storage\app\public\.gitignore
storage\app\public\bukti-transfer\3Djwu8Pu2v5pbAReb1LjCNySF3GbR6twsyWSaHil.jpg
storage\app\public\bukti-transfer\94wzukONzR3kAjn5sYdNZzWOQSdJdeQzZH5b9aaA.jpg
storage\app\public\bukti-transfer\DMPh4D6Rq9X1EGbiTGCCIo37MZDtQAuO2KokdgTu.jpg
storage\app\public\bukti-transfer\hwbEM4LkBzTGljIqDoDSxCWbuDY0sI8d0nt8O6nS.jpg
storage\app\public\bukti-transfer\JmAQfqBXjq6N68PYof8U18sxYgxj6cKg7oc4honl.jpg
storage\app\public\bukti-transfer\LNLfheIQA0fiMm2uOtS9MpIyerI3ltQ5FChsxkz1.png
storage\app\public\bukti-transfer\Ndh2J63qwMTM6v6n46KYOlNSwDjUcGhjaYB8imfj.jpg
storage\app\public\bukti-transfer\pDcmEWuNbmHYqEnBRpYFFgDMcmJsK5H7YdwV7MiM.jpg
storage\app\public\bukti-transfer\pI9L5Vox6UAMdopDkebC1qJAB8gtpxgwZbPwUuW4.jpg
storage\app\public\bukti-transfer\U0zUzLbD5WcEKBkXVxTNV3SSY2bQycZr9BHq8ZF2.jpg
storage\app\public\bukti-transfer\UxWlgIYFjNoinwgVG85pgGiAX6FEdXcrgzhqsYM1.jpg
storage\app\public\bukti-transfer\yo484sRCnSF1Lpl0bgVqiNyJduY2qqKuqfgBVo6n.jpg
storage\app\public\bukti-transfer\ZS9wSnPMw8pYYZFcQ2wMgqMEw92MXoIazN2tiXlu.jpg
storage\app\public\kwitansi\kwitansi-10-1755671825.pdf
storage\app\public\kwitansi\kwitansi-7-1755669945.pdf
storage\app\public\kwitansi\kwitansi-8-1755670220.pdf
storage\app\public\kwitansi\kwitansi-9-1755670818.pdf
storage\app\public\kwitansi\kwitansi-KW-2025-8-6.pdf
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\.gitignore
storage\framework\cache\data\.gitignore
storage\framework\sessions\.gitignore
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\09a7c8482c6e5a17a0a9a25432fbe547.php
storage\framework\views\105b5ff0c377491b0ac4a9b05e57a80f.php
storage\framework\views\140be810c6d1d8c5493a22d62b12e637.php
storage\framework\views\17626ff0a0bc9a01edf0f8bed992c842.php
storage\framework\views\29b9873d46b252660074688efa1aaccd.php
storage\framework\views\3320c1723d088fe593f5f39481f5b5eb.php
storage\framework\views\3b240750f1d842552d0ea4b7d88091c7.php
storage\framework\views\40b6ff27839d47f455db6a794796a233.php
storage\framework\views\4b20185d74f69916349b547af5921882.php
storage\framework\views\4b58e8a6b6736953110312d54bf38d31.php
storage\framework\views\4f95587a7658cb05735a80cb093a497f.php
storage\framework\views\56595294ee291b65fac38c234a14d063.php
storage\framework\views\5c0bdedc719924690cced7e302b8bf67.php
storage\framework\views\61dcbe8020a7f47c9b9ec8b6c99f47fb.php
storage\framework\views\65df369a4528e71cd6754e70ddb11ac3.php
storage\framework\views\689d09919c93a0fe09463f0b752ab503.php
storage\framework\views\6a938c9f296bb062f05de09fdd65ff72.php
storage\framework\views\70d31578ce1dab60794f303e4fae25d2.php
storage\framework\views\72b8fde34fcf0549588b5a90e3193918.php
storage\framework\views\7328c19bf1b41f51f3599077ae7c3a26.php
storage\framework\views\759f27bd6a6de3dfeecf83ef19d91e1b.php
storage\framework\views\803f96141da497d312849f0f99b6b1f2.php
storage\framework\views\8e2060a2c7709d5097a3f934e7f4a5ce.php
storage\framework\views\8ee76bf2dadea44b9e71d6509922d5d2.php
storage\framework\views\92c395475f552d2d1cedc1d7cf9abdd0.php
storage\framework\views\986af5cca8def713706249e59bf409fd.php
storage\framework\views\9b9a37feb8df6f7efbb959e98db31a46.php
storage\framework\views\9f65c276834c7f4cdec5b39fc5432ff9.php
storage\framework\views\a6b5dbc9773c165592b1a4e398445956.php
storage\framework\views\a998dc2a3f7f3986099df1ce97876943.php
storage\framework\views\b0a54795e0c776b45801907991c89cf4.php
storage\framework\views\bab067e24dfd8e29a48d990e4f6cbb08.php
storage\framework\views\c138776a780a86e1edc42a1a668b094c.php
storage\framework\views\c3d64acd4d1e73273b252f3b58d96f1d.php
storage\framework\views\c5ac81f5af9337b26dcb7a15ac07753a.php
storage\framework\views\cbc52b083f3936f9817447ed78b10c91.php
storage\framework\views\cd069d3ea23f22e59f6b1cfb409430c2.php
storage\framework\views\d2c1d62ba99d987ea7be6fb2c6fa66c2.php
storage\framework\views\d82724f8b123daa8a4067222ecb5de35.php
storage\framework\views\db45a5f7f23402fc46da9dc15d4920dc.php
storage\framework\views\e28065e432637db6ed8119ad0244e993.php
storage\framework\views\e299118d2668b3ebea456fb14f48c4ce.php
storage\framework\views\e853581d5a244b297cd5541739ccf847.php
storage\framework\views\f03997e446bad3f066fd89508960f607.php
storage\framework\views\f49d54ba614b452869e77f68e82f8e78.php
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
```


## Git
```
Remote:
origin	https://github.com/frhanp/alazharskripsi.git (fetch)
origin	https://github.com/frhanp/alazharskripsi.git (push)

Branch:
main

Last 5 commits:
2162564 test kwitansi 4
8c2ae32 test kwitansi 3
bb1a349 test kwitansi 2
2247596 test kwitansi 1
77333ed riwayat jadi satu
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


## Routes (auto-detected, if any)
```

  GET|HEAD        / ............................................................................................................... 
  GET|HEAD        _debugbar/assets/javascript ......................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets ...................... debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} ................ debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} ............... debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open .......................... debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain .............. debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  GET|HEAD        confirm-password ..................................... password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password ....................................................... Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard ............................................................................................. dashboard
  POST            email/verification-notification .......... verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password ...................................... password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password ......................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        guru .......................................................................... guru.index ΓÇ║ GuruController@index
  POST            guru .......................................................................... guru.store ΓÇ║ GuruController@store
  GET|HEAD        guru/create ................................................................. guru.create ΓÇ║ GuruController@create
  PUT|PATCH       guru/{guru} ................................................................. guru.update ΓÇ║ GuruController@update
  DELETE          guru/{guru} ............................................................... guru.destroy ΓÇ║ GuruController@destroy
  GET|HEAD        guru/{guru}/edit ................................................................ guru.edit ΓÇ║ GuruController@edit
  GET|HEAD        kwitansi/download/{kwitansi} .................................... kwitansi.download ΓÇ║ KwitansiController@download
  GET|HEAD        login ........................................................ login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login ................................................................. Auth\AuthenticatedSessionController@store
  POST            logout ..................................................... logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  POST            midtrans/callback .............................................................. MidtransWebhookController@handle
  POST            midtrans/token .................................................. midtrans.token ΓÇ║ PembayaranController@snapToken
  PUT             password ....................................................... password.update ΓÇ║ Auth\PasswordController@update
  POST            payment/token ............................................... payment.token ΓÇ║ PaymentController@createTransaction
  GET|HEAD        pembayaran ..................................................... payment.page ΓÇ║ PaymentController@showPaymentPage
  GET|HEAD        pembayaran/manual/create ........................... pembayaran.manual.create ΓÇ║ PembayaranController@createManual
  POST            pembayaran/manual/store .............................. pembayaran.manual.store ΓÇ║ PembayaranController@storeManual
  GET|HEAD        pembayaran/midtrans/{id_siswa} ........................... pembayaran.midtrans.form ΓÇ║ MidtransController@showForm
  POST            pembayaran/midtrans/{id_siswa} .......................... pembayaran.midtrans ΓÇ║ MidtransController@createMidtrans
  GET|HEAD        pembayaran/verifikasi .............................. pembayaran.verifikasi ΓÇ║ PembayaranController@indexVerifikasi
  PATCH           pembayaran/verifikasi/{id} ................. pembayaran.verifikasi.update ΓÇ║ PembayaranController@updateVerifikasi
  GET|HEAD        profile ................................................................... profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile ............................................................... profile.update ΓÇ║ ProfileController@update
  DELETE          profile ............................................................. profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register ........................................................ register ΓÇ║ Auth\RegisteredUserController@create
  POST            register .................................................................... Auth\RegisteredUserController@store
  POST            reset-password ................................................ password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} ....................................... password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        riwayat ................................................................. riwayat.index ΓÇ║ RiwayatController@index
  GET|HEAD        siswa ....................................................................... siswa.index ΓÇ║ SiswaController@index
  POST            siswa ....................................................................... siswa.store ΓÇ║ SiswaController@store
  GET|HEAD        siswa/create .............................................................. siswa.create ΓÇ║ SiswaController@create
  PUT|PATCH       siswa/{siswa} ............................................................. siswa.update ΓÇ║ SiswaController@update
  DELETE          siswa/{siswa} ........................................................... siswa.destroy ΓÇ║ SiswaController@destroy
  GET|HEAD        siswa/{siswa}/edit ............................................................ siswa.edit ΓÇ║ SiswaController@edit
  GET|HEAD        storage/{path} .................................................................................... storage.local
  GET|HEAD        up .............................................................................................................. 
  GET|HEAD        upload-transfer .................................... pembayaran.upload.create ΓÇ║ PembayaranController@createUpload
  POST            upload-transfer ...................................... pembayaran.upload.store ΓÇ║ PembayaranController@storeUpload
  GET|HEAD        verify-email ....................................... verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} ....................................... verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                                Showing [54] routes

```


## Controllers (auto-detected)
```
===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\NewPasswordController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\PasswordController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\PasswordResetLinkController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\RegisteredUserController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Auth\VerifyEmailController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\BendaharaController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\GuruController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->paginate(10);
        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:100',
            'nip' => 'nullable|string|max:50',
            'mapel' => 'nullable|string|max:100',
        ]);

        Guru::create($request->all());
        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:100',
            'nip' => 'nullable|string|max:50',
            'mapel' => 'nullable|string|max:100',
        ]);

        $guru = Guru::findOrFail($id);
        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus.');
    }
}

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\KwitansiController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class KwitansiController extends Controller
{
    /**
     * Fungsi utama untuk membuat PDF, menyimpannya, dan mencatat ke database.
     * Ini akan menjadi pusat logika pembuatan kwitansi.
     *
     * @param Pembayaran $pembayaran
     * @return Kwitansi|null
     */

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
        // 1. Ambil path lengkap dari database.
        // Contoh: "kwitansi/kwitansi-9-1755670818.pdf"
        $pathToFile = $kwitansi->file_kwitansi;

        // 2. Ambil HANYA nama filenya saja menggunakan basename().
        // Hasilnya: "kwitansi-9-1755670818.pdf"
        $fileName = basename($pathToFile);

        // 3. Panggil fungsi download dengan path absolut dan nama file.
        $fullPath = storage_path('app/public/' . $pathToFile);

        if (!file_exists($fullPath)) {
            abort(404, 'File kwitansi tidak ditemukan.');
        }

        return response()->download($fullPath, $fileName);
    }

    public function generateAndSave(Pembayaran $pembayaran): ?Kwitansi
    {
        if ($pembayaran->kwitansi) {
            return $pembayaran->kwitansi;
        }

        try {
            $pembayaran->load(['siswa.wali']);

            $noKwitansi = 'KW/' . now()->year . '/' . now()->month . '/' . $pembayaran->id_pembayaran;
            $kwitansi = Kwitansi::create([
                'id_pembayaran' => $pembayaran->id_pembayaran,
                'no_kwitansi' => $noKwitansi,
                'tanggal_terbit' => now(),
                'file_kwitansi' => '',
            ]);

            $data = [
                'pembayaran' => $pembayaran,
                'kwitansi' => $kwitansi,
            ];

            $pdf = PDF::loadView('kwitansi.template', $data);

            // ===================================================================
            // SOLUSI ULTIMATE: MENYIMPAN FILE SECARA LANGSUNG
            // ===================================================================

            $directoryName = 'kwitansi';
            $fileName = 'kwitansi-' . $pembayaran->id_pembayaran . '-' . time() . '.pdf';

            // Path relatif untuk disimpan di database
            $databasePath = $directoryName . '/' . $fileName;

            // Dapatkan path absolut dari root storage 'public' Anda
            $absoluteStoragePath = storage_path('app/public/' . $directoryName);

            // 1. Pastikan folder tujuan ada, menggunakan fungsi dasar PHP
            if (!file_exists($absoluteStoragePath)) {
                mkdir($absoluteStoragePath, 0775, true);
            }

            // 2. Simpan file menggunakan fungsi dasar PHP, bukan Storage Facade
            $fullPathToFile = $absoluteStoragePath . '/' . $fileName;
            file_put_contents($fullPathToFile, $pdf->output());

            // =iatas
            Log::info("File berhasil disimpan di: " . $fullPathToFile);

            // 3. Update database dengan path relatif yang benar
            $kwitansi->update(['file_kwitansi' => $databasePath]);

            // ===================================================================

            Log::info("Kwitansi berhasil dibuat untuk pembayaran ID {$pembayaran->id_pembayaran}.");
            return $kwitansi;
        } catch (\Exception $e) {
            Log::error("Gagal membuat kwitansi untuk pembayaran ID {$pembayaran->id_pembayaran}: " . $e->getMessage());
            Log::error($e->getTraceAsString());
            return null;
        }
    }
}

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\MidtransController.php =====
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
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;

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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\MidtransWebhookController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\PaymentController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\PembayaranController.php =====
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

        return redirect()->route('pembayaran.upload.create')->with('success', 'Bukti transfer berhasil diunggah dan menunggu verifikasi.');
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\PengaturanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::all()->pluck('value', 'key');
        return view('pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'midtrans_active' => 'required|in:true,false'
        ]);

        Pengaturan::updateOrCreate(['key' => 'midtrans_active'], ['value' => $request->midtrans_active]);

        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui.');
    }
}

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\ProfileController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\RiwayatController.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\SiswaController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('guru')->latest()->paginate(10);
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('siswa.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'id_guru' => 'nullable|exists:guru,id_guru',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $gurus = Guru::all();
        return view('siswa.edit', compact('siswa', 'gurus'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id_siswa . ',id_siswa',
            'id_guru' => 'nullable|exists:guru,id_guru',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}

===== D:\Laragon\www\alazharskripsi\app\Http\Controllers\TunggakanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunggakan;
use App\Models\Siswa;

class TunggakanController extends Controller
{
    public function index()
    {
        $tunggakan = Tunggakan::with('siswa')->latest()->paginate(10);
        return view('tunggakan.index', compact('tunggakan'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        return view('tunggakan.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|string',
            'tahun' => 'required|integer|min:2020|max:2030',
            'jumlah_tunggakan' => 'required|numeric|min:0',
        ]);

        Tunggakan::create($validated);

        return redirect()->route('tunggakan.index')->with('success', 'Tunggakan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tunggakan = Tunggakan::findOrFail($id);
        $siswas = Siswa::all();

        return view('tunggakan.edit', compact('tunggakan', 'siswas'));
    }

    public function update(Request $request, $id)
    {
        $tunggakan = Tunggakan::findOrFail($id);

        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|string',
            'tahun' => 'required|integer|min:2020|max:2030',
            'jumlah_tunggakan' => 'required|numeric|min:0',
            'status' => 'required|in:belum_bayar,lunas'
        ]);

        $tunggakan->update($validated);

        return redirect()->route('tunggakan.index')->with('success', 'Tunggakan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tunggakan = Tunggakan::findOrFail($id);
        $tunggakan->delete();

        return redirect()->route('tunggakan.index')->with('success', 'Tunggakan berhasil dihapus.');
    }
}

```


## Models (auto-detected)
```
===== D:\Laragon\www\alazharskripsi\app\Models\Guru.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    public $incrementing = true;

    protected $fillable = [
        'nama_guru', 'nip', 'mapel'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_guru');
    }
}

===== D:\Laragon\www\alazharskripsi\app\Models\Kwitansi.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Models\Pembayaran.php =====
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

    protected $attributes = [
        'status' => 'belum_bayar'
    ];

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

===== D:\Laragon\www\alazharskripsi\app\Models\Pengaturan.php =====
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

===== D:\Laragon\www\alazharskripsi\app\Models\Siswa.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    public $incrementing = true;

    protected $fillable = [
        'nis', 'nama_siswa', 'kelas', 'id_wali', 'id_guru'
    ];

    public function wali()
    {
        return $this->belongsTo(User::class, 'id_wali');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_siswa');
    }
}

===== D:\Laragon\www\alazharskripsi\app\Models\Tunggakan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tunggakan extends Model
{
    protected $table = 'tunggakan';
    protected $primaryKey = 'id_tunggakan';
    public $incrementing = true;

    protected $fillable = [
        'id_siswa', 'bulan', 'tahun', 'jumlah_tunggakan', 'status'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}


===== D:\Laragon\www\alazharskripsi\app\Models\User.php =====
<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function isBendahara(): bool
    {
        return $this->role === 'bendahara';
    }

    public function isWaliMurid(): bool
    {
        return $this->role === 'wali_murid';
    }

    public function isKetuaYayasan(): bool
    {
        return $this->role === 'ketua_yayasan';
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_wali');
    }

    public function verifikasiPembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'verified_by');
    }
}

```


## Views & UI Files (listing)
```
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\bendahara\verifikasi.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\dashboard.blade.php
resources\views\guru\create.blade.php
resources\views\guru\edit.blade.php
resources\views\guru\index.blade.php
resources\views\kwitansi\template.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\payment.blade.php
resources\views\pembayaran\manual_create.blade.php
resources\views\pembayaran\manual_index.blade.php
resources\views\pembayaran\midtrans.blade.php
resources\views\pembayaran\upload_transfer.blade.php
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\riwayat\index.blade.php
resources\views\siswa\create.blade.php
resources\views\siswa\edit.blade.php
resources\views\siswa\index.blade.php
resources\views\welcome.blade.php
```


## Entry Points (heuristic)
```
artisan
vendor\laravel\breeze\stubs\default\vite.config.js
vendor\laravel\breeze\stubs\inertia-react\vite.config.js
vendor\laravel\breeze\stubs\inertia-vue\vite.config.js
vendor\laravel\framework\src\Illuminate\Foundation\resources\exceptions\renderer\vite.config.js
vendor\laravel\framework\src\Illuminate\Foundation\resources\server.php
vite.config.js
```

== Selesai ==
