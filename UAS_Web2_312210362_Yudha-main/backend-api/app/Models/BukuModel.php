<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    // CATATAN: Pastikan nama tabel di database kamu benar-benar 'bukus' (dengan s).
    // Jika di database nama tabelnya 'buku', ubah baris di bawah menjadi 'buku'.
    protected $table            = 'buku'; 
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    
    // PERBAIKAN: Field yang diizinkan untuk diisi (Mass Assignment)
    protected $allowedFields    = ['judul', 'penulis', 'kategori_id', 'tahun_terbit'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}