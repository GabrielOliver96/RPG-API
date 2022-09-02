<?php

namespace App\Jwt;

class Jwt{

    private $secret;

    public function __construct(){
        $this->secret = 'a39820988';
    }

    private function base64url_encode($data){
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
      
    private function base64url_decode($data){
        return base64_decode(strtr($data, '-_', '+/') . str_repeat('=', 3 - ( 3 + strlen($data)) % 4 ));
    }

    public function createJwt($data){

        $header = json_encode(array("typ" => "JWT", "alg" => "HS256"));
        $payload = json_encode(array("id" => $data['id'], "name" => $data['name']));

        $headerBase64UrlEncode = $this->base64url_encode($header);
        $payloadBase64UrlEncode = $this->base64url_encode($payload);
        
        $signature = hash_hmac("sha256", $headerBase64UrlEncode.'.'.$payloadBase64UrlEncode, $this->secret, true);

        $signatureBase64UrlEncode = $this->base64url_encode($signature);
        
        $jwt = $headerBase64UrlEncode.'.'.$payloadBase64UrlEncode.'.'.$signatureBase64UrlEncode;

        return $jwt;
    }

    public function validateJwt($token){

        $splitToken = explode('.', $token);

        if(count($splitToken) == 3){

            $signature = hash_hmac("sha256", $splitToken[0].'.'.$splitToken[1], $this->secret, true);
            $signatureBase64UrlEncode = $this->base64url_encode($signature);

            if($splitToken[2] == $signatureBase64UrlEncode){

                $response = json_decode($this->base64url_decode($splitToken[1]));

                return $response;
            }

            return false;
        }
        
        return false;
    }

}