<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Contracts\Console\Kernel as ConsoleKernelContract;
use App\Console\Kernel as ConsoleKernel;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => RoleMiddleware::class,
            
        ]);
        // Tambahkan baris ini untuk mengecualikan Webhook dari CSRF
        $middleware->validateCsrfTokens(except: [
            '/midtrans/callback'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })

    ->withSingletons([
        ConsoleKernelContract::class => ConsoleKernel::class,
    ])
    ->create();

    
