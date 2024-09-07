<?php

namespace App\Models;

use CodeIgniter\Model;
//use Illuminate\Support\Facades\DB; 

class TransaksiModel extends Model
{	
    protected $table      = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_barang', 'stock', 'jml_jual', 'jml_sisa', 'tgl_transaksi',  'keterangan'];


	public function getModelBarang(){
		$db = \Config\Database::connect();
		$query = $db->query(" SELECT id_barang, nama_barang from tb_barang ");	
		//return $row = $query->getRow();
		return $row = $query->getResult();
		
		/*return DB::table('tb_barang')
		->select('id_barang', 'nama_barang')
		->get();*/		
	}

}