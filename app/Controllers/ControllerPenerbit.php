<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPenerbit;

class ControllerPenerbit extends BaseController
{
    public function index()
    {
        return view('Penerbit/table', [
            'daftar_penerbit' => (new ModelPenerbit())->findAll()
        ]);
    }
    public function create()
    {
        $data = [
            'penerbit' => $this->request->getPost('penerbit'),
            'kota' => $this->request->getPost('kota')
        ]; 

        $model = new ModelPenerbit();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('Penerbit'));
    }
    public function form(){
        return view('Penerbit/form');
    }
    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new ModelPenerbit();
        $m->delete($id);
        return redirect()->to(base_url('Penerbit'));
    }
}