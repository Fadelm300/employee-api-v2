<?php

namespace App\Libraries;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTService
{
    public static function generate(array $payload, int $ttl = 3600): string
    {
        $payload = array_merge($payload, [
            'iss' => 'employee-api',
            'iat' => time(),
            'exp' => time() + $ttl,
        ]);

        return JWT::encode($payload, env('JWT_SECRET'), 'HS256');
    }

    public static function verify(string $token)
    {
        return JWT::decode(
            $token,
            new Key(env('JWT_SECRET'), 'HS256')
        );
    }
}
