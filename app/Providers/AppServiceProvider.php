<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('pengaturan')) {
            try {
                $midtransAktif = Pengaturan::where('key', 'midtrans_active')->value('value') === 'true';
                View::share('midtransAktif', $midtransAktif);
            } catch (\Exception $e) {
                View::share('midtransAktif', false);
            }
        } else {
            View::share('midtransAktif', false);
        }
    }
}
