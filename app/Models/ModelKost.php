<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKost extends Model
{
    public function data()
    {
        return $this->db->table('kost')->get()->getResultArray();
    }
   public function AllData($id_user)
   {
    return $this->db->table('kost')
    ->where('id_user', $id_user)
    ->orderBy('id_kost', 'DESC')
    ->get()->getResultArray();
   }
   public function InsertData($data)
   {
       $this->db->table('kost')->insert($data);
   }
   public function UpdateData($data)
   {
       $this->db->table('kost')->where('id_kost',$data['id_kost'])->update($data);
   }
//    public function DeleteData($data)
//    {
//     return $this->db->table('kost')->where('id_kost',$data['id_kost'])->delete();
//    }

public function DeleteData($data)
{
    // Ambil data foto berdasarkan id_kost
    $foto = $this->db->table('kost')->select('foto')->where('id_kost', $data['id_kost'])->get()->getRowArray();

    // Hapus foto dari folder "img"
    if ($foto) {
        $pathToPhoto = 'img/' . $foto['foto'];
        if (file_exists($pathToPhoto)) {
            unlink($pathToPhoto);
        }
    }

    // Hapus data dari database
    return $this->db->table('kost')->where('id_kost', $data['id_kost'])->delete();
}
public function getFotoById($id_kost)
{
    return $this->db->table('kost')->select('foto')->where('id_kost', $id_kost)->get()->getRow('foto');
}

   public function JumlahData()
    {
        return $this->db->table('kost')->countAll();
    }

    public function detail($slug = false)
    {
      if ($slug == false) {
        return $this->db->table('kost')->get()->getResultArray();
      }

      return $this->db->table('kost')->where(['slug' => $slug])->get()->getRow();
    }
}
