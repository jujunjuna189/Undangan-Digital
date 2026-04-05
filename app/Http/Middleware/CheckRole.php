<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user() || $request->user()->role !== $role) {
            if ($request->user() && $request->user()->role === 'admin') {
                return redirect()->route('admin.index');
            }
            if ($request->user() && $request->user()->role === 'user') {
                return redirect()->route('dashboard');
            }
            return redirect('/login');
        }

        return $next($request);
    }
}
