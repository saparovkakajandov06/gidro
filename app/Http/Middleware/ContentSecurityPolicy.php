<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class ContentSecurityPolicy
{
    public function handle($request, Closure $next)
    {
         $response = $next($request);

         $response->headers->set('Content-Security-Policy', "default-src 'self' 'unsafe-inline' https://www.gstatic.com/ https://www.google.com/ font-src 'self' ;img-src * 'self' data: https: 'unsafe-inline' style-src 'self' 'unsafe-inline' 'sha-512{4BC90D935BC7BC1EE8A051DB9EC0598FFB6ED9B89F8CB2FDD9A1531D0A5EB42D7932D84FB66C8F78260FA68244E17CD2F0FD6D53E0A32610145F87225EFA1479}'  script-src 'nonce-EDNnf03nceIOfn39fn3e9h3sdfa'");
         $response->headers->set('Strict-Transport-Security', "max-age=31536000; includeSubDomains; preload");
         $response->headers->set('X-XSS-Protection', "1");
         $response->headers->set('X-Frame-Options', "SAMEORIGIN");
         $response->headers->set('X-Content-Type-Options', "nosniff");
         $response->headers->set('Referrer-Policy', "same-origin");
         $response->headers->set('Permissions-Policy', "geolocation=(),midi=(),sync-xhr=(),microphone=(),camera=(),magnetometer=(),gyroscope=(),fullscreen=(self),payment=()");
         return $response;
    }
}
