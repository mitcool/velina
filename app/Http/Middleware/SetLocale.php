<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
         // Get locale from session or cookie
         $supportedLocales = ['en', 'bg'];

        // Retrieve locale from session or cookie
        $locale = session('locale') ?? config('app.locale');

        // Validate locale
        if (!in_array($locale, $supportedLocales)) {
            $locale = config('app.locale');
        }

        // Set Laravel application locale
        app()->setLocale($locale);

        return $next($request);
    }
}
