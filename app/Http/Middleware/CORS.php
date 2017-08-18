<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, X-TOKEN, Origin, Authorization'
        ];

        $response = $next($request);

        foreach($headers as $key => $value)
            $response->headers->set($key, $value);

        return $response;
    }
}
