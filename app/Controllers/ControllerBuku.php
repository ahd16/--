<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;

class ControllerBuku extends BaseController
{

    public function index(){
        return view('Buku/table', [
            'daftar_buku' => (new ModelBuku())->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'judul'         => $this->request->getPost('judul'),
            'edisi'         => $this->request->getPost('edisi'),
            'cetakan'         => $this->request->getPost('cetakan'),
            'sinopsis'         => $this->request->getPost('sinopsis'),
            'halaman'         => $this->request->getPost('halaman'),
            'penulis'         => $this->request->getPost('penulis'),
            'tahun'         => $this->request->getPost('tahun'),
            'cover_file'         => $this->request->getPost('cover_file')
        ]; 

        $model = new ModelBuku();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('Buku'));
    }

    public function form(){
        return view('Buku/form');
    }

    public function edit($id){
        $r = (new ModelBuku())->where('id', $id)->first();
        return view('Buku/form', [
            'data' => $r
        ]);
    }

    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new ModelBuku();
        $m->delete($id);
        return redirect()->to(base_url('Buku'));
    }
}
