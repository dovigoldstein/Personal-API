<?php

namespace App\Http\Middleware;

use Closure;

class NotFound
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
        $response = $next($request);
        if(is_null($response)){
            return response()->json([
                    'error' => [
                        'status' => '404',
                        'source' => ['pointer'],
                        'detail' => 'detail'
                    ]
                ], 404);
        }

        return $response;
    }
}
