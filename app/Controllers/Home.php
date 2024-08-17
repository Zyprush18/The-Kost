<?php

namespace App\Controllers;
use App\Models\ModelKost;

class Home extends BaseController
{
  protected $kost;
  public function __construct()
  {
    $this->kost = new ModelKost();
  }
    public function index()
    {
      $data =[
        'kost' => $this->kost->data(),
        // 'datakost' => $this->kostModel->Alata($id_user),


    ];
      return view('pengguna',$data);
    }

    public function Contact()
    {
      return view('contact');
    }
}
