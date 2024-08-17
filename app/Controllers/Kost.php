<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKost;


class Kost extends BaseController
{
    protected $kostModel;

    public function __construct(){
        $this->kostModel = new ModelKost();

    }
    public function index()
    {
        // $id_user = session()->get('id_user');
        $data =[
            'judul' => 'Data',
            'subjudul' => 'kost',
            'menu' => 'data',
            'submenu' => 'kost',
            'page' => 'kost',
            'title' => 'Data Kost | The Kost',
            'kost' => $this->kostModel->data(),
            // 'datakost' => $this->kostModel->Alata($id_user),


        ];
        return view('template',$data);
    }

    public function hapus($id_kost)
    {
        $data =[
            'id_kost' => $id_kost
        ];
        $this->kostModel->DeleteData($data);
        session()->setFlashdata('hapus','Data Berhasil DiHapus!!');
        return redirect()->to(base_url('kost'));
    }

    
}
