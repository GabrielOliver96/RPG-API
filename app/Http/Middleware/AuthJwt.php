<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthJwt
{
    public function handle(Request $request, Closure $next)
    {

        dd($request);

        return $next($request);
    }
}
