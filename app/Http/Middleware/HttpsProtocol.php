<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class HttpsProtocol
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
        $request->setTrustedProxies( [ $request->getClientIp() ] );
        if ($request->secure() && env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        return $next($request);
    }
}
