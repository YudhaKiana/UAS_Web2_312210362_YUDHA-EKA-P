<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // PENTING: Loloskan request OPTIONS (Preflight CORS) dari Axios VueJS
        if (strtolower($request->getMethod()) === 'options') {
            return; 
        }

        $key = "KUNCI_RAHASIA_ELIBRARY_AKRAM_123"; // HARUS SAMA dengan di Auth.php
        $authHeader = $request->getServer('HTTP_AUTHORIZATION');

        if (!$authHeader) {
            return service('response')->setJSON(['message' => 'Token tidak ditemukan.'])->setStatusCode(401);
        }

        // Token biasanya formatnya: "Bearer <token>"
        $token = explode(' ', $authHeader)[1] ?? null;

        try {
            JWT::decode($token, new Key($key, 'HS256'));
        } catch (\Exception $e) {
            return service('response')->setJSON(['message' => 'Token tidak valid.'])->setStatusCode(401);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu diisi
    }
}