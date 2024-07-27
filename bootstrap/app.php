<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\UserAuth;
use App\Http\Middleware\VendorAuth;
use App\Http\Middleware\IfLoggedIn;
use App\Http\Middleware\IfNotLoggedIn;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    // 
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(UserAuth::class);

        // $middleware->append(IfLoggedIn::class);

        // $middleware->append(IfNotLoggedIn::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
