<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Jwt\Jwt;

class AuthJwt
{
    public function handle(Request $request, Closure $next)
    {

        $splitToken = explode(' ', $request->header('authorization'));
        //dd($splitToken[1]);

        if(!empty($splitToken[1])){

            $token = $splitToken[1];

            $validate = new Jwt;
            $validate = $validate->validateJwt($token);

            if(!$validate){

                $response['error'] = 'Necessário estar logado.';
                return response($response);
            }

            return $next($request);
        }

        $response['error'] = 'Necessário estar logado.';

        return response($response);
    }
}
