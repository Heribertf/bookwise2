<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SetTenantFromSubdomain;
use App\Http\Middleware\EnsureMainDomain;
use App\Http\Middleware\EnsureTenantRole;
use App\Http\Middleware\EnsureClientRole;
use App\Http\Middleware\RedirectIfOnboardingCompleted;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web([
            // SetTenantFromSubdomain::class,
            // EnsureMainDomain::class,
            // EnsureTenantRole::class,
            // EnsureClientRole::class,
            // RedirectIfOnboardingCompleted::class,
        ]);

        $middleware->alias([
            'set.tenant.from.subdomain' => SetTenantFromSubdomain::class,
            'ensure.main.domain' => EnsureMainDomain::class,
            'tenant' => EnsureTenantRole::class,
            'client' => EnsureClientRole::class,
            'onboarding' => RedirectIfOnboardingCompleted::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
