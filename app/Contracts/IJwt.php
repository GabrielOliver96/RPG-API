<?php

namespace App\Contracts;

interface IJwt{

    public function base64url_encode($data);
    public function base64url_decode($data);
    public function createJwt($data);
    public function validateJwt($token);

}   