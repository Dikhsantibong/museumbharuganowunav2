<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\VisitorLog;
use Illuminate\Http\Request;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->is('admin*')) {

            VisitorLog::firstOrCreate(
                [
                    'ip_address' => $request->ip(),
                    'tanggal' => now()->toDateString(),
                ],
                [
                    'user_agent' => substr($request->userAgent(), 0, 255),
                ]
            );
        }
        // sfskjf
        return $next($request);
    }
}
