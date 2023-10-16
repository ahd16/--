<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;

class ControllerKategori extends BaseController
{
    public function index()
    {
        return view('Kategori/table', [
            'daftar_kategori' => (new ModelKategori())->findAll()
        ]);
    }
    public function create()
    {
        $data = [
            'kategori' => $this->request->getPost('kategori'),
            'kode_ddc' => $this->request->getPost('kode_ddc')
        ]; 

        $model = new ModelKategori();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('Kategori'));
    }
    public function form(){
        return view('Kategori/form');
    }
    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new ModelKategori();
        $m->delete($id);
        return redirect()->to(base_url('Kategori'));
    }
}