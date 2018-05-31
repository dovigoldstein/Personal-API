<?php

namespace App\Http\Middleware;

use Closure;

class GetOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('get')) {
            return $next($request);
        }
        return response()->json([
            'message' => 'Unsupported Method',
        ], 405);
    }
}
