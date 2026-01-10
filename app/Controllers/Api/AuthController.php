<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends BaseController
{
    public function login()
    {
        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON(['message' => 'Invalid input']);
        }

        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON(['errors' => $this->validator->getErrors()]);
        }

        $userModel = new User();
        $user = $userModel->where('email', $data['email'])->first();

        if (!$user || !password_verify($data['password'], $user['password'])) {
            return $this->response
                ->setStatusCode(401)
                ->setJSON(['message' => 'Invalid credentials']);
        }

        $payload = [
            'iss' => 'employee-api',
            'iat' => time(),
            'exp' => time() + (60 * 60), // 1 hour
            'uid' => $user['id'],
            'email' => $user['email'],
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        return $this->response->setJSON([
            'status' => 'success',
            'token'  => $token,
            'user'   => [
                'id'    => $user['id'],
                'name'  => $user['name'],
                'email' => $user['email'],
            ]
        ]);
    }
}
