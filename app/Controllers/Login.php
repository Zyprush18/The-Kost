<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Login extends BaseController
{

    protected $modelUser;
    public function __construct(){
        $this->modelUser = new ModelUser();
    }
    public function index()
    {
        $data=[
            'title' => 'Login | The Kost',

        ];
        // if(session('id_user')){
        //     return redirect()->to(base_url('Admin'));
        // }
        return view('login',$data);
    }

    public function CekLogin()
    {
      
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
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
            $nama_user = $this->request->getPost('nama_user');
            // $email = $this->request->getPost('email');
            // $passwordInput = $this->request->getPost('password');
            $password = sha1($this->request->getPost('password'));
            $cek_login = $this->modelUser->LoginUser($nama_user,$password);
            
            if ($cek_login) {
                // Jika login berhasil
                session()->set('id_user', $cek_login['id_user']);
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('level', $cek_login['level']);
                if ($cek_login['level'] == 1) {
                    return redirect()->to(base_url('Admin'));
                }else {
                    return redirect()->to(base_url('Pemasaran'));
                }
            } else {
                // Gagal login
                session()->setFlashdata('gagal', 'Nama atau Password salah !!!');
                return redirect()->to(base_url('Login'));
            } // Tutup blok if-else dengan benar
        }
            // Tangani kesalahan validasi
            else {
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url('Login'))->withInput('validation', \Config\Services::validation());
            }

          
        
    }

    public function Logout()
    {
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('logout', 'Berhasil LogOut !!');
        return redirect()->to(base_url('Login'));
    }
}
