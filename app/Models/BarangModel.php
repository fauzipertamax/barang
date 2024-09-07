<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{	
    protected $table      = 'tb_barang';
    protected $primaryKey = 'id_barang';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_barang', 'jenis_barang', 'keterangan'];

}