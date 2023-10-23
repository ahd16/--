<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPeminjaman;

class ControllerPeminjaman extends BaseController
{
    public function index()
    {
        $model = new ModelPeminjaman();
        $data['peminjaman'] = $model->findAll();
        return view('peminjaman/table', $data);
    }

    public function create()
    {
        return view('peminjaman/form');
    }

    public function save()
    {
        $model = new ModelPeminjaman();
        $data = [
            // Retrieve and validate input data from the form
            'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'tb_pengguna_id_peminjaman' => $this->request->getPost('tb_pengguna_id_peminjaman'),
            'tb_pengguna_id_pengembalian' => $this->request->getPost('tb_pengguna_id_pengembalian'),
            'tb_anggota_id' => $this->request->getPost('tb_anggota_id'),
            'tb_buku_id' => $this->request->getPost('tb_buku_id'),
            'denda' => $this->request->getPost('denda')
        ];

        // Perform data validation here

        // If data is valid, save it to the database
        $model->save($data);
        
        // Redirect to the peminjaman index page
        return redirect()->to('/peminjaman');
    }

    public function edit($id = null)
    {
        $model = new ModelPeminjaman();
        $data['peminjaman'] = $model->find($id);
        return view('peminjaman/form', $data);
    }

    public function update()
    {
        $model = new ModelPeminjaman();
        $id = $this->request->getPost('id');
        $data = [
            // Retrieve and validate input data from the form
            'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'tb_pengguna_id_peminjaman' => $this->request->getPost('tb_pengguna_id_peminjaman'),
            'tb_pengguna_id_pengembalian' => $this->request->getPost('tb_pengguna_id_pengembalian'),
            'tb_anggota_id' => $this->request->getPost('tb_anggota_id'),
            'tb_buku_id' => $this->request->getPost('tb_buku_id'),
            'denda' => $this->request->getPost('denda')
        ];

        // Perform data validation here

        // If data is valid, update it in the database
        $model->update($id, $data);
        
        // Redirect to the peminjaman index page
        return redirect()->to('/peminjaman');
    }

    public function delete($id = null)
    {
        $model = new ModelPeminjaman();
        $model->delete($id);
        
        // Redirect to the peminjaman index page
        return redirect()->to('/peminjaman');
    }
}
