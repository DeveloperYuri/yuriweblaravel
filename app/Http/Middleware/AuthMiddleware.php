<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         // Untuk request API, gunakan autentikasi Sanctum
        if ($request->is('api/*')) {
            if (!Auth::guard('sanctum')->check()) {
                return response()->json([
                    'message' => 'Unauthenticated.',
                ], 401);
            }

            return $next($request);
        }

        // Untuk halaman web/dashboard, tetap gunakan session login
        if (Auth::check()) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
