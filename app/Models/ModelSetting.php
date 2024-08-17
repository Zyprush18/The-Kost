<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSetting extends Model
{
   public function DetailData()
   {
    return $this->db->table('tbl_setting')
    ->where('id' , '1')
    ->get()
    ->getRowArray();

   }
   public function UpdateData($data)
   {
    $this->db->table('tbl_setting')
    ->where('id',$data['id'])
    ->update($data);
   }
}

