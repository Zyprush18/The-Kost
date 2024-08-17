<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSetting;




class Setting extends BaseController
{
    function __construct() {
        $this->ModelSetting = new ModelSetting();
    }
    public function index()
    {
        $data =[
                'judul' => 'Setting',
                'subjudul' => '',
                'menu' => 'setting',
                'submenu' => '',
                'page' => 'setting',
                'title'=> 'Data User | The Kost',
                'setting' => $this->ModelSetting->DetailData()
        ];
        return view('template',$data);
    }
    public function UpdateSetting()
    {
        $data =[
                'id'=> '1',
                'nama_toko'=>$this->request->getPost('nama_toko'),
                'slogan'=>$this->request->getPost('slogan'),
                'alamat'=> $this->request->getPost('alamat'),
                'no_telepon'=>$this->request->getPost('no_telepon'),
                'deskripsi'=>$this->request->getPost('deskripsi'),
            ];


            $this->ModelSetting->UpdateData($data);
            session()->setFlashdata('ubah','Data Berhasil Diubah!!');
            return redirect()->to(base_url('setting'));
        
        return view('template',$data);
    }
}
