<?php

namespace App\Controllers;
use App\Libraries\DataTables;
use App\Models\RekapModel;

class RekapController extends BaseController
{
	public function __construct()
    {
        $this->DataTables = new DataTables();
		$this->ModelRekap = new RekapModel();
    }

	public function index()
	{
        echo view("Rekap");
	}
	
	public function getAllRekap()
    {
        // sql query
        $query = "SELECT count(*) jml_transaksi, a.id_barang, b.nama_barang FROM tb_transaksi a left join tb_barang b on a.id_barang = b.id_barang";

        // $where  = array('nama_kategori' => 'Tutorial');
        $where  = null; 
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        $search = array('a.id_barang', 'b.nama_barang');
		
		$groupBy = "group by a.id_barang";
		
        echo $this->DataTables->BuildDatatables($query, $where, $isWhere, $search, $groupBy);
    }	
		
}