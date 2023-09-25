<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penerbit extends BaseController
{
    protected $penerbitModel;

    public function __construct()
    {
        $this->penerbitModel = new PenerbitModel();
    }

    public function index()
    {
        $data['penerbit'] = $this->penerbitModel->findAll();
        return view('penerbit/index', $data);
    }

    public function create()
    {
        return view('penerbit/create');
    }

    public function store()
    {
        // Lakukan validasi data yang diterima dari form

        // Simpan data ke dalam database menggunakan model
        $data = [
            'nama_penerbit' => $this->request->getPost('nama_penerbit')
            // Tambahkan kolom lain sesuai kebutuhan Anda
        ];
        $this->penerbitModel->insert($data);

        // Redirect kembali ke halaman index
        return redirect()->to('/penerbit');
    }

    public function edit($id)
    {
        $data['penerbit'] = $this->penerbitModel->find($id);
        return view('penerbit/edit', $data);
    }

    public function update($id)
    {
        // Lakukan validasi data yang diterima dari form

        // Simpan perubahan data ke dalam database menggunakan model
        $data = [
            'nama_penerbit' => $this->request->getPost('nama_penerbit')
            // Tambahkan kolom lain sesuai kebutuhan Anda
        ];
        $this->penerbitModel->update($id, $data);

        // Redirect kembali ke halaman index
        return redirect()->to('/penerbit');
    }

    public function delete($id)
    {
        $this->penerbitModel->delete($id);

        // Redirect kembali ke halaman index
        return redirect()->to('/penerbit');
    }
}