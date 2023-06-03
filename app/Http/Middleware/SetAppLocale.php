<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetAppLocale
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if ($request->locale) {
            app()->setLocale($request->locale);
        }

        return $next($request);
    }
}
