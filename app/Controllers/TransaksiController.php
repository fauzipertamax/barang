<?php

namespace App\Controllers;
use App\Libraries\DataTables;
use App\Models\TransaksiModel;
use Illuminate\Support\Facades\DB;

class TransaksiController extends BaseController
{
	public function __construct()
    {
        $this->DataTables = new DataTables();
		$this->ModelTransaksi = new TransaksiModel();
    }

	public function index()
	{
        echo view("Transaksi");
	}
	
	public function getAllTransaksi()
    {
        // sql query
        $query = "SELECT a.id_transaksi, a.id_barang, b.nama_barang, a.stock, a.jml_jual, a.tgl_transaksi, b.jenis_barang from tb_transaksi a left join tb_barang b on a.id_barang = b.id_barang";
        // $where  = array('nama_kategori' => 'Tutorial');
        $where  = null; 
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        $search = array('a.id_transaksi', 'a.id_barang', 'b.nama_barang', 'a.stock', 'a.jml_jual', 'a.tgl_transaksi', 'b.jenis_barang');
		
		$groupBy = null;

        echo $this->DataTables->BuildDatatables($query, $where, $isWhere, $search, $groupBy);
    }	

	public function getSelectBarang(){
		$transaksiModel = new \App\Models\TransaksiModel();
        $info = $transaksiModel->getModelBarang();
		
		if($info){
            //echo json_encode(['code'=>1, 'msg'=>'', 'results'=>$info]);
            echo json_encode(['results'=>$info]);
        }else{
            echo json_encode(['code'=>0, 'msg'=>'No results found', 'results'=>null]);
        }
		//return response()->json($info);
    }
	
	
	public function getSelectBarangs()
    {
        // Example data, you can replace this with a database query
        $data = [
            "results" => [
                ["id_barang" => "1", "nama_barang" => "Kopi"],
                ["id_barang" => "2", "nama_barang" => "Teh"],
                ["id_barang" => "3", "nama_barang" => "Pasta Gigi"],
                ["id_barang" => "4", "nama_barang" => "Sabun Mandi"],
                ["id_barang" => "5", "nama_barang" => "Shampo"],
                ["id_barang" => "6", "nama_barang" => "Susu"],
                ["id_barang" => "8", "nama_barang" => "Roti"],
                ["id_barang" => "9", "nama_barang" => "Deterjen"],
                ["id_barang" => "10", "nama_barang" => "Autan"],
                ["id_barang" => "11", "nama_barang" => "asdsadadad"],
                ["id_barang" => "12", "nama_barang" => "SA"],
                ["id_barang" => "13", "nama_barang" => "sfe"],
                ["id_barang" => "14", "nama_barang" => "asd"],
                ["id_barang" => "15", "nama_barang" => "dsf"]
            ]
        ];

        return response()->json($data);
    }
	

	public function addTransaksi()
	{
		$TransaksiModel = new \App\Models\TransaksiModel();
		$data = [
                 'id_barang'=>$this->request->getPost('id_barang'),
                 'stock'=>$this->request->getPost('stock'),	
                 'jml_jual'=>$this->request->getPost('jml_jual'),	
                 'jml_sisa'=>$this->request->getPost('jml_sisa'),	
                 'tgl_transaksi'=>$this->request->getPost('tgl_transaksi'),
                 'keterangan'=>$this->request->getPost('keterangan'),
             ];	
			
		$query = $TransaksiModel->insert($data);
		
		if($query){
                 echo json_encode(['code'=>1,'msg'=>'Transaksi Baru sudah disimpan di database']);
             }else{
                 echo json_encode(['code'=>0,'msg'=>'Ada Kesalahan Entry']);
             }			 
	}
	
    public function getTransaksiById(){
		$TransaksiModel = new \App\Models\TransaksiModel();
        $id_transaksi = $this->request->getPost('id_transaksi');
        $info = $TransaksiModel->find($id_transaksi);
        if($info){
            echo json_encode(['code'=>1, 'msg'=>'', 'results'=>$info]);
        }else{
            echo json_encode(['code'=>0, 'msg'=>'No results found', 'results'=>null]);
        }
    }

    public function updateTransaksi(){
		$TransaksiModel = new \App\Models\TransaksiModel();
        $id_transaksi = $this->request->getPost('id_transaksi');
		$data = [
		   'id_barang'=>$this->request->getPost('id_barang'),
		   'stock'=>$this->request->getPost('stock'),
		   'jml_jual'=>$this->request->getPost('jml_jual'),
		   'jml_sisa'=>$this->request->getPost('jml_sisa'),
		   'tgl_transaksi'=>$this->request->getPost('tgl_transaksi'),		   
		   'keterangan'=>$this->request->getPost('keterangan'),
		];
        $query = $TransaksiModel->update($id,$data);
		if($query){
			echo json_encode(['code'=>1, 'msg'=>'Transaksi berhasil di update']);
		}else{
			echo json_encode(['code'=>0, 'msg'=>'Ada Kesalahan']);
		}
    }

    public function deleteTransaksi(){
        $TransaksiModel = new \App\Models\TransaksiModel();
        $id_transaksi = $this->request->getPost('id_transaksi');
        $query = $TransaksiModel->delete($id_transaksi);

        if($query){
            echo json_encode(['code'=>1,'msg'=>'Transaksi berhasil dihapus']);
        }else{
            echo json_encode(['code'=>0,'msg'=>'Ada kesalahan']);
        }
	}
		
}