<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;


class Signup extends BaseController
{
    protected $modelUser;
    public function __construct(){
        $this->modelUser = new ModelUser();
    }
    public function index()
    {
        $data=[
            'title' => 'Sign Up | The Kost',
        ];
        // if(session('id_user')){
        //     return redirect()->to(base_url('signup'));
        // }
        return view('signup',$data);
    }
    public function daftar()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required|is_unique[user.nama_user]',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                    'is_unique' => '{field} Sudah Ada !!',
                ]
            ],
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                    'is_unique' => '{field} Sudah Ada !!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                ]
            ],
        ])){
        $data=[  
            'nama_user'=>$this->request->getPost('nama_user'),
            'email'=>$this->request->getPost('email'),
            'password'=> sha1($this->request->getPost('password')),
            'level'=>2
        ];
        $this->modelUser->InsertData($data);
        session()->setFlashdata('daftar','Berhasil Register!!');
        return redirect()->to(base_url('login'));
        }    else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Signup'))->withInput('validation', \Config\Services::validation());
        }
    }
}
