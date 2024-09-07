<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

	<ul class="nav nav-list">
		
		<li class="hover">
			<a href="<?php echo base_url('transaksi');?>">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">Data Transaksi</span>
			</a>		
		</li>

		<li class="active open hover">
			<a href="<?php echo base_url('rekap');?>">
				<i class="menu-icon fa fa-edit"></i>
				<span class="menu-text">Rekap Data Penjualan</span>
			</a>		
		</li>
		
		<li class="hover">
			<a href="<?php echo base_url('barang');?>">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Data Master Barang </span>
			</a>
		</li>		

	</ul><!-- /.nav-list -->
</div>

<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<div class="page-header">

<div class="row">
		<div class="col-xs-6">
		<h3 class="smaller blue">Rekap Data Penjualan</h3>
		</div>
		<div class="col-xs-6" style="text-align:right";>
		</div>
</div>

<hr style="color:#000000;margin-top:1px;margin-bottom:5px;width:15;">
 
            <div class="card">
                &nbsp;
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table-rekap-query">
                        <thead>
                            <tr>
                                <th width="5%"> No. </th>
                                <th width="12%"> Nama Barang </th>
                                <th width="21%"> Jumlah Transaksi </th>
                                <th width="7%"> Aksi </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
			
<script src="assets/js/jquery.dataTables.min.js"></script>

<script>
 
	var tabel = null;
	$(document).ready(function() {
		tabel = $('#table-rekap-query').DataTable({
			"processing": true,
			"responsive": true,
			"serverSide": true,
			"ordering": true, // Set true agar bisa di sorting
			"order": [
				[0, 'asc']
			],
			"ajax": {
				"url": "<?= site_url('rekap/data');?>",
				//"url": "<?= route_to('get.all.rekap'); ?>",
				"type": "POST",
			},
			"deferRender": true,
			"aLengthMenu": [
				[10, 20, 50],
				[10, 20, 50]
			], 
			"columns": [
				{"data": 'id_barang',"sortable": false, 
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}  
				},
				{ "data": "nama_barang" },  
				{ "data": "jml_transaksi" },
				{ "data": "id_barang", 
				"render": 
					function( data, type, row, meta ) {
						return '<button class="btn btn-xs btn-info" data-id_barang="'+row.id_barang+'" id="updateBarangBtn">'
						      +'<i class="ace-icon fa fa-pencil bigger-120"></i></button>'
					}
				},
			],
		});
	});
 </script>
       			
			</div><!-- /.page-header -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<?= $this->endSection() ?>