<?php

namespace App\Models;

use CodeIgniter\Model;

class RekapModel extends Model
{	
    protected $table      = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_barang', 'stock', 'jml_jual', 'jml_sisa', 'tgl_transaksi',  'keterangan'];

}