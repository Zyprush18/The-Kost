<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKost;
use App\Models\ModelUser;

class Admin extends BaseController
{
    protected $kostModel;
    protected $userModel;
    public function __construct(){
        $this->kostModel = new ModelKost();
        $this->userModel = new ModelUser();
    }
    
    public function index()
    {
        $data =[
            'judul' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'admin',
            'title' => 'Dashboard | The Kost',
            'jumlah_user' => $this->userModel->JumlahData(),
            'jumlah_kost' => $this->kostModel->JumlahData(),
        ];
     
        return view('template',$data);
    }
}
