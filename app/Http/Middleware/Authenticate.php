<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
       if (!$request->expectsJson()) {
            \Log::info('Unauthenticated request detected. Redirecting to login.');
            return route('login');
        }
    }
}