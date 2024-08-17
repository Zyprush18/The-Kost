<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelKost;
use App\Models\ModelUser;

class DetailKost extends BaseController
{
    
    protected $ModelKost;
    protected $ModelUser;
    public function __construct(){

        $this->ModelKost = new ModelKost();
        $this->ModelUser = new ModelUser();
    }
    public function index($slug)
    {
        $id_user = session()->get('id_user');
        $data =[
            'kost' => $this->ModelKost->AllData($id_user),
            'detail' => $this->ModelKost->detail($slug),
            'user' => $this->ModelUser->AllData()
        ];
        return view('detailkost',$data);
    }
}
