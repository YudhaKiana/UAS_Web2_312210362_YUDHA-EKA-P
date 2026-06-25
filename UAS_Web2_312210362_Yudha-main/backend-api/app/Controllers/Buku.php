<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Buku extends ResourceController
{
    protected $modelName = 'App\Models\BukuModel';
    protected $format    = 'json';

    // Aturan validasi yang akan digunakan pada fungsi create & update
    protected $rules = [
        'judul'        => 'required|min_length[3]',
        'penulis'      => 'required',
        'kategori_id'  => 'required|numeric',
        'tahun_terbit' => 'required|numeric|exact_length[4]'
    ];

    // GET /buku - Menampilkan semua buku dengan data kategori
    public function index()
    {
        // Join ke tabel kategori agar frontend bisa menampilkan nama_kategori
        $data = $this->model->select('buku.*, kategori.nama_kategori')
                            ->join('kategori', 'kategori.id = buku.kategori_id', 'left')
                            ->findAll();
        return $this->respond($data);
    }

    // GET /buku/(:id) - Menampilkan detail buku
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Buku tidak ditemukan.');
        }
        return $this->respond($data);
    }

    // POST /buku - Menambah buku baru
    public function create()
    {
        // 1. Tangkap data JSON dari Axios
        $data = $this->request->getJSON(true);

        // 2. Gunakan Services Validation khusus untuk membaca Array JSON
        $validation = \Config\Services::validation();
        $validation->setRules($this->rules);
        if (!$validation->run($data)) {
            return $this->failValidationErrors($validation->getErrors());
        }

        // 3. Simpan ke Database
        if ($this->model->insert($data)) {
            return $this->respondCreated(['message' => 'Buku berhasil ditambahkan.']);
        }
        return $this->fail($this->model->errors());
    }

    // PUT /buku/(:id) - Mengupdate buku
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        
        // Gunakan validasi yang sama untuk proses update
        $validation = \Config\Services::validation();
        $validation->setRules($this->rules);
        if (!$validation->run($data)) {
            return $this->failValidationErrors($validation->getErrors());
        }

        // Cek keberadaan data
        if (!$this->model->find($id)) {
            return $this->failNotFound('Buku tidak ditemukan.');
        }

        if ($this->model->update($id, $data)) {
            return $this->respond(['message' => 'Buku berhasil diupdate.']);
        }
        return $this->fail($this->model->errors());
    }

    // DELETE /buku/(:id) - Menghapus buku
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Buku tidak ditemukan.');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Buku berhasil dihapus.']);
    }
}