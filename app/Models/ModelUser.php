<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    public function Alldata()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
    public function InsertData($data)
    {
        $this->db->table('user')->insert($data);
    }
    public function UpdateData($data)
    {
        $this->db->table('user')->where('id_user',$data['id_user'])->update($data);
    }
    public function DeleteData($data)
    {
        $this->db->table('user')->where('id_user',$data['id_user'])->delete($data);
    }
    public function JumlahData()
    {
        return $this->db->table('user')->countAll();
    }
    public function LoginUser ($nama_user,$password)
    {
     return $this->db->table('user')
     ->where([
         'nama_user' => $nama_user,
        //  'email' => $email,
         'password' => $password,
     ])->get()->getRowArray();
    }
}
