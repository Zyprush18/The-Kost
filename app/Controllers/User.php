<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    protected $modelUser;
    public function __construct(){
        $this->modelUser = new ModelUser();
    }
    public function index()
    {
        $data =[
            'judul' => 'Data',
            'subjudul' => 'user',
            'menu' => 'data',
            'submenu' => 'user',
            'page' => 'user',
            'title'=> 'Data User | The Kost',
            'user' => $this->modelUser->Alldata()
        ];
        return view('template',$data);
    }

    public function tambah(){
        $data=[
            'nama_user'=>$this->request->getPost('nama_user'),
            'email'=>$this->request->getPost('email'),
            'password'=> sha1($this->request->getPost('password')),
            'level'=>$this->request->getPost('level')
        ];
        $this->modelUser->InsertData($data);
        session()->setFlashdata('tambah','Data Berhasil Ditambahkan!!');
        return redirect()->to(base_url('user'));
    }
    public function ubah($id_user){
        $data=[
            'id_user' => $id_user,
            'nama_user'=>$this->request->getPost('nama_user'),
            'email'=>$this->request->getPost('email'),
            'password'=> sha1($this->request->getPost('password')),
            'level'=>$this->request->getPost('level')
        ];
        $this->modelUser->UpdateData($data);
        session()->setFlashdata('ubah','Data Berhasil Diubah!!');
        return redirect()->to(base_url('user'));
    }
    public function hapus($id_user){
        $data=[
            'id_user' => $id_user,
        ];
        $this->modelUser->DeleteData($data);
        session()->setFlashdata('hapus','Data Berhasil Dihapus!!');
        return redirect()->to(base_url('user'));
    }
}
