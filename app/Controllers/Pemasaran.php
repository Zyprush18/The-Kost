<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use App\Models\ModelKost;

class Pemasaran extends BaseController
{
    protected $ModelUser;
    protected $ModelKost;
    public function __construct(){
        $this->ModelUser = new ModelUser();
        $this->ModelKost = new ModelKost();
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        $data=[
            'title' => 'Pemasaran | The Kost',
            'page' =>'pemasaran',
            'user' => $this->ModelUser->AllData(),
            'kost' => $this->ModelKost->AllData($id_user)
            
        ];
        return view('pemasaranTemplate',$data);
    }

    public function Datatambah()
    {
        
        $id_user = session()->get('id_user');
        $data=[
            'title' => 'Tambah Pemasaran',
            'page' => 'tambahpemasaran',
            'kost' => $this->ModelKost->AllData($id_user)
           
        ];
        return view('pemasaranTemplate',$data);

    }

    public function Simpan()
    {
        $id_user = session()->get('id_user');

        if ($this->validate([
            'nama_kost' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                ]
            ],
            'alamat_kost' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                ]
            ],
            'jumlah_kamar' => [
                'label' => 'Jumlah Kamar',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                ]
            ],
            'kamar_tersedia' => [
                'label' => 'Kamar Tersedia',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Di Isi !!',
                ]
            ],
             
        ])){

            $fileFoto = $this->request->getFile('foto');
            $namaFoto = $fileFoto->getRandomName();

            $data =[
                'nama_kost' => $this->request->getPost('nama_kost'),
                'slug' => url_title($this->request->getPost('nama_kost'), '-', true),
                'alamat_kost' => $this->request->getPost('alamat_kost'),
                'jumlah_kamar' => $this->request->getPost('jumlah_kamar'),
                'kamar_tersedia' => $this->request->getPost('kamar_tersedia'),
                'harga_sewa' =>  str_replace(',', '',$this->request->getPost('harga_sewa')),
                'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                'tipe_kost' => $this->request->getPost('tipe_kost'),
                'lokasi' => $this->request->getPost('lokasi'),
                'foto' => $namaFoto,
                'deskripsi' => $this->request->getPost('deskripsi'),
                'id_user' => $id_user
            ];
            $fileFoto->move('img',$namaFoto);
            $this->ModelKost->InsertData($data);
            session()->setFlashdata('tambah','Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('Pemasaran'));
        }else{
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Pemasaran/Datatambah'))->withInput();
        }


    }
  
    public function update($id_kost)
{
    $id_user = session()->get('id_user');

    if ($this->validate([
        'nama_kost' => [
            'label' => 'Nama',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Belum Di Isi !!',
            ]
        ],
        'alamat_kost' => [
            'label' => 'Alamat',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Belum Di Isi !!',
            ]
        ],
        'jumlah_kamar' => [
            'label' => 'Jumlah Kamar',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Belum Di Isi !!',
            ]
        ],
        'kamar_tersedia' => [
            'label' => 'Kamar Tersedia',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} Belum Di Isi !!',
            ]
        ],
    ])) {
        $data = [
            'id_kost' => $id_kost,
            'nama_kost' => $this->request->getPost('nama_kost'),
            'slug' => url_title($this->request->getPost('nama_kost'), '-', true),
            'alamat_kost' => $this->request->getPost('alamat_kost'),
            'jumlah_kamar' => $this->request->getPost('jumlah_kamar'),
            'kamar_tersedia' => $this->request->getPost('kamar_tersedia'),
            'harga_sewa' => str_replace(',', '', $this->request->getPost('harga_sewa')),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'tipe_kost' => $this->request->getPost('tipe_kost'),
            'lokasi' => $this->request->getPost('lokasi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'id_user' => $id_user
        ];

        $fileFoto = $this->request->getFile('foto');
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            // Menggunakan id_kost untuk mendapatkan foto lama
            $oldFoto = $this->ModelKost->getFotoById($id_kost);
            if ($oldFoto) {
                $pathToOldFoto = FCPATH . 'img/' . $oldFoto;
                if (file_exists($pathToOldFoto)) {
                    unlink($pathToOldFoto);
                }
            }

            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFoto);

            $data['foto'] = $namaFoto;
        }

        $this->ModelKost->updateData($data);

        session()->setFlashdata('ubah', 'Data Berhasil Diupdate!!');
        return redirect()->to(base_url('Pemasaran'));
    } else {
        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        return redirect()->to(base_url('Pemasaran/Datatambah'))->withInput();
    }
}

    

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail',
            'detail' => $this->ModelKost->detail($slug),
            'page' => 'detailPemasaran' 
        ];
        return view('pemasaranTemplate',$data);
    }

    public function hapus($id_kost)
    {
        $data =[
            'id_kost' => $id_kost
        ];
        $this->ModelKost->DeleteData($data);
        session()->setFlashdata('hapus','Data Berhasil DiHapus!!');
        return redirect()->to(base_url('Pemasaran'));
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
