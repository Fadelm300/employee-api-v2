<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtAuthFilter implements FilterInterface
{
public function before(RequestInterface $request, $arguments = null)
{
    if ($request->getMethod() === 'options') {
        return;
    }

    $authHeader = $request->getHeaderLine('Authorization');

    if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
        return service('response')
            ->setStatusCode(401)
            ->setJSON(['message' => 'Unauthorized']);
    }

    $token = trim(str_replace('Bearer', '', $authHeader));

    try {
        JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));
    } catch (\Exception $e) {
        return service('response')
            ->setStatusCode(401)
            ->setJSON(['message' => 'Invalid token']);
    }
}


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
