<?php

namespace App\Controllers;
use App\Libraries\DataTables;
use App\Models\BarangModel;

class BarangController extends BaseController
{
	public function __construct()
    {
        $this->DataTables = new DataTables();
		$this->ModelBarang = new BarangModel();
    }

	public function index()
	{
        echo view("Barang");
	}
	
	public function getAllBarang()
    {
        // sql query
        $query = "SELECT id_barang, nama_barang, jenis_barang, keterangan from tb_barang";
        // $where  = array('nama_kategori' => 'Tutorial');
        $where  = null; 
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        $search = array('id_barang', 'nama_barang', 'jenis_barang', 'keterangan');
		
		$groupBy = null;

        echo $this->DataTables->BuildDatatables($query, $where, $isWhere, $search, $groupBy);
    }	

	public function addBarang()
	{
		$BarangModel = new \App\Models\BarangModel();
		$data = [
                 'nama_barang'=>$this->request->getPost('nama_barang'),
                 'jenis_barang'=>$this->request->getPost('jenis_barang'),
				 'keterangan'=>$this->request->getPost('keterangan'),
             ];	
			
		$query = $BarangModel->insert($data);
		
		if($query){
                 echo json_encode(['code'=>1,'msg'=>'Barang Baru sudah disimpan di database']);
             }else{
                 echo json_encode(['code'=>0,'msg'=>'Ada Kesalahan Entry']);
             }			 
	}
	
    public function getBarangById(){
		$BarangModel = new \App\Models\BarangModel();
        $id_barang = $this->request->getPost('id_barang');
        $info = $BarangModel->find($id_barang);
        if($info){
            echo json_encode(['code'=>1, 'msg'=>'', 'results'=>$info]);
        }else{
            echo json_encode(['code'=>0, 'msg'=>'No results found', 'results'=>null]);
        }
    }

    public function updateBarang(){
		$BarangModel = new \App\Models\BarangModel();
        $id_barang = $this->request->getPost('id_barang');
		$data = [
		   'nama_barang'=>$this->request->getPost('nama_barang'),
		   'jenis_barang'=>$this->request->getPost('jenis_barang'),
		   'keterangan'=>$this->request->getPost('keterangan'),
		];
        $query = $BarangModel->update($id_barang,$data);
		if($query){
			echo json_encode(['code'=>1, 'msg'=>'Barang berhasil di update']);
		}else{
			echo json_encode(['code'=>0, 'msg'=>'Ada Kesalahan']);
		}
    }

    public function deleteBarang(){
        $BarangModel = new \App\Models\BarangModel();
        $id_barang = $this->request->getPost('id_barang');
        $query = $BarangModel->delete($id_barang);

        if($query){
            echo json_encode(['code'=>1,'msg'=>'Barang berhasil dihapus']);
        }else{
            echo json_encode(['code'=>0,'msg'=>'Ada kesalahan']);
        }
	}
		
}