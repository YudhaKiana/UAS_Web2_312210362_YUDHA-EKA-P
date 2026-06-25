<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use Firebase\JWT\JWT;

class Auth extends ResourceController
{
    use ResponseTrait;

    public function register()
    {
        $model = new UserModel();
        
        $data = [
            'username' => $this->request->getVar('username'),
            // Password dienkripsi menggunakan BCRYPT
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        // Cek apakah username sudah dipakai
        if($model->where('username', $data['username'])->first()){
            return $this->failResourceExists('Username sudah digunakan.');
        }

        $model->insert($data);
        return $this->respondCreated(['status' => 201, 'message' => 'Akun admin berhasil dibuat.']);
    }

    public function login()
    {
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $model->where('username', $username)->first();

        if (!$user) {
            return $this->failNotFound('Username tidak ditemukan.');
        }

        $verify = password_verify($password, $user['password']);
        if (!$verify) {
            return $this->fail('Password salah.');
        }

        // KUNCI RAHASIA INI HARUS SAMA DENGAN YANG ADA DI AUTH FILTER
        $key = "KUNCI_RAHASIA_ELIBRARY_AKRAM_123";
        $payload = [
            "iat" => time(),
            "exp" => time() + 3600, // Token berlaku selama 1 jam
            "uid" => $user['id'],
            "username" => $user['username']
        ];

        $token = JWT::encode($payload, $key, 'HS256');

        return $this->respond(['status' => 200, 'message' => 'Login berhasil', 'token' => $token]);
    }
}