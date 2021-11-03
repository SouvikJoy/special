<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiAgent
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $key = $request->hasHeader('DT-API-KEY') ? $request->header('DT-API-KEY') : $request->query('key');
        $secret = $request->hasHeader('DT-API-SECRET') ? $request->header('DT-API-SECRET') : $request->query('secret');

        /*if(!$key || !$secret) {
            return jsonUnauthorised('You\'re a STUPID unknown API Client!');
        }*/

        $agent = \App\Models\ApiAgent::where('key', '=', $key)->first();

        $requestHost = $request->header('X-Forwarded-Host') ?: $request->header('Host');

        /*if(!$agent || \Crypt::decryptString($agent->secret) != $secret || ($agent->target == 'web' && !in_array($requestHost, $agent->hosts))) {
            return jsonUnauthorised('You\'re a STUPID unknown API Client!');
        }*/
        return $next($request);

    }
}
