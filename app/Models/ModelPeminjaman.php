<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPeminjaman extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_peminjaman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    // Define the fields that are allowed to be mass-assigned
    protected $allowedFields = [
        'tgl_peminjaman',
        'tgl_pengembalian',
        'tb_pengguna_id_peminjaman',
        'tb_pengguna_id_pengembalian',
        'tb_anggota_id',
        'tb_buku_id',
        'denda',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'tgl_peminjaman' => 'required',
        'tb_pengguna_id_peminjaman' => 'required',
        'tb_anggota_id' => 'required',
    ];

    protected $validationMessages = [
        'tgl_peminjaman' => [
            'required' => 'Tanggal Peminjaman harus diisi.'
        ],
        'tb_pengguna_id_peminjaman' => [
            'required' => 'ID Pengguna Peminjaman harus diisi.'
        ],
        'tb_anggota_id' => [
            'required' => 'ID Anggota harus diisi.'
        ],
    ];

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
