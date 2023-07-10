<?php

namespace App\Http\Middleware;

use Closure;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        $logMessage = sprintf(
            'Request Method: %s | Request URL: %s ',
            $request->method(),
            $request->fullUrl(),
        );

        app('log')->info($logMessage);

        return $next($request);
    }
}
