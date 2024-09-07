<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

	<ul class="nav nav-list">
		
		<li class="hover">
			<a href="<?php echo base_url('transaksi');?>">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">Data Transaksi</span>
			</a>		
		</li>

		<li class="hover">
			<a href="<?php echo base_url('rekap');?>">
				<i class="menu-icon fa fa-edit"></i>
				<span class="menu-text">Rekap Data Penjualan</span>
			</a>		
		</li>
		
		<li class="active open hover">
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
		<h3 class="smaller blue">Data Master Barang</h3>
		</div>
		<div class="col-xs-6" style="text-align:right";>
		<button class="btn btn-primary" id="entryBarangBtn"><i class="glyphicon glyphicon-plus"></i> Tambah Barang </button>
		</div>
</div>

<hr style="color:#000000;margin-top:1px;margin-bottom:5px;width:15;">
 
            <div class="card">
                &nbsp;
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table-barang-query">
                        <thead>
                            <tr>
                                <th width="5%"> No. </th>
                                <th width="12%"> Nama Barang </th>
                                <th width="21%"> Jenis Barang </th>
								<th width="30%"> Keterangan </th>
                                <th width="7%"> Aksi </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
			
<script src="assets/js/jquery.dataTables.min.js"></script>

<div class="modal fade entryBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Entry Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!--<form action="<?//= site_url('Barang/addBarang'); ?>" method="post" id="entry-Barang-form">-->
                    <form action="<?= route_to('add.barang'); ?>" method="post" id="entry-barang-form">		
                           <div class="form-group">
                              <label for="">Nama Barang</label>
                              <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
                              <span class="text-danger error-text nama_barang_error"></span>
                           </div>
                           <div class="form-group">
                               <label for="">Jenis Barang</label>
							   <select class="form-control" aria-label="Pilih Jenis Barang" name="jenis_barang">
								<option value="" selected>-- Pilih Jenis Barang -- </option>
								<option value="Konsumsi">Konsumsi</option>
								<option value="Pembersih">Pembersih</option>
								</select>							   
                               <span class="text-danger error-text jenis_barang_error"></span>
                           </div>
 						   <div class="form-group">
                               <label for="">Keterangan</label>
							   <textarea name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" class="form-control" rows="2"></textarea> 
                               <span class="text-danger error-text keterangan_error"></span>
                           </div>
						   <div class="form-group">
                <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
             </form>	
            </div>
        </div>
    </div>
</div>


<div class="modal fade editBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!--<form action="<?//= site_url('Barang/updateBarang'); ?>" method="post" id="edit-Barang-form">-->
                    <form action="<?= route_to('update.barang'); ?>" method="post" id="edit-barang-form">		
                           <div class="form-group">
                              <label for="">Nama Barang</label>
                              <input type="hidden" name="id_barang">
                              <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
                              <span class="text-danger error-text nama_barang_error"></span>
                           </div>
                           <div class="form-group">
                               <label for="">Jenis Barang</label>
 							   <select class="form-control" aria-label="Pilih Jenis Barang" name="jenis_barang">
								<option  value="" selected>-- Pilih Jenis Barang -- </option>
								<option value="Konsumsi">Konsumsi</option>
								<option value="Pembersih">Pembersih</option>
								</select>							   
                               <span class="text-danger error-text jenis_barang_error"></span>
                           </div>
						   <div class="form-group">
                               <label for="">Keterangan</label>
							   <textarea name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" class="form-control" rows="2"></textarea> 
                               <span class="text-danger error-text keterangan_error"></span>
                           </div>
						   <div class="form-group">
                <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
             </form>	
            </div>
        </div>
    </div>
</div>

<script>
 
	var tabel = null;
	$(document).ready(function() {
		tabel = $('#table-barang-query').DataTable({
			"processing": true,
			"responsive": true,
			"serverSide": true,
			"ordering": true, // Set true agar bisa di sorting
			"order": [
				[0, 'asc']
			],
			"ajax": {
				//"url": "<?= site_url('Barang/getAllBarang');?>",
				"url": "<?= route_to('get.all.barang'); ?>",
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
				{ "data": "jenis_barang" },
				{ "data": "keterangan" },		
				{ "data": "id_barang", 
				"render": 
					function( data, type, row, meta ) {
						return '<button class="btn btn-xs btn-info" data-id_barang="'+row.id_barang+'" id="updateBarangBtn">'
						      +'<i class="ace-icon fa fa-pencil bigger-120"></i></button>&nbsp;'
							  +'<button class="btn btn-xs btn-danger" data-id_barang="'+row.id_barang+'" id="deleteBarangBtn">'
						      +'<i class="ace-icon fa fa-trash bigger-120"></i></button>';
					}
				},
			],
		});
	});
	
	$(document).on('click','#entryBarangBtn', function(){
		$('.entryBarang').modal('show');
	});
	
	
	$('#entry-barang-form').submit(function(e){
       e.preventDefault();
       var form = this;

       $.ajax({
           url: $(form).attr('action'),
           method:$(form).attr('method'),
           data: new FormData(form),
           processData: false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
               $(form).find('span.error-text').text('');
           },
           success:function(data){

               if($.isEmptyObject(data.error)){

                   if(data.code == 1){
					 $('.entryBarang').modal('hide');					 
					 $('#table-barang-query').DataTable().ajax.reload(null, false);
					 
					 $('.entryBarang').find('form').find('input[name="nama_barang"]').val('');
					 $('.entryBarang').find('form').find('select[name="jenis_barang"]').val('').change();
					 $('.entryBarang').find('form').find('textarea[name="keterangan"]').val('');
					 
                    }else{
                       alert(data.msg);
                   }
               }else{
                   $.each(data.error, function(prefix, val){
                       $(form).find('span.'+prefix+'_error').text(val);
                   });
               }
           }
       });
   });
   
    $(document).on('click','#updateBarangBtn', function(){	   
	   var id_barang = $(this).data('id_barang');
      
        $.post("<?= route_to('get.barang.info') ?>",{id_barang:id_barang}, function(data){
            $('.editBarang').find('form').find('input[name="id_barang"]').val(data.results.id_barang);
            $('.editBarang').find('form').find('input[name="nama_barang"]').val(data.results.nama_barang);
            $('.editBarang').find('form').find('select[name="jenis_barang"]').val(data.results.jenis_barang);
            $('.editBarang').find('form').find('textarea[name="keterangan"]').val(data.results.keterangan);
            $('.editBarang').find('form').find('span.error-text').text('');
            $('.editBarang').modal('show');
        },'json');
   });
   
    $('#edit-barang-form').submit(function(e){
       e.preventDefault();
       var form = this;

       $.ajax({
           url: $(form).attr('action'),
           method:$(form).attr('method'),
           data: new FormData(form),
           processData: false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
               $(form).find('span.error-text').text('');
           },
           success:function(data){

               if($.isEmptyObject(data.error)){

                   if(data.code == 1){					 
		 			 $('.editBarang').modal('hide');					 
					 $('#table-barang-query').DataTable().ajax.reload(null, false);
                   }else{
                       alert(data.msg);
                   }

               }else{
                   $.each(data.error, function(prefix, val){
                       $(form).find('span.'+prefix+'_error').text(val);
                   });
               }
           }
       });
   });


   $(document).on('click', '#deleteBarangBtn', function(){
       var id_barang = $(this).data('id_barang');
       var url = "<?= route_to('delete.barang'); ?>";

       swal.fire({

           title:'Apakah anda yakin?',
           html:'Anda akan menghapus Barang ini',
           showCloseButton:true,
           showCancelButton:true,
           cancelButtonText:'Cancel',
           confirmButtonText:'Yes, delete',
           cancelButtonColor:'#d33',
           confirmButtonColor:'#556eeb',
           width:300,
           allowOutsideClick:false

       }).then(function(result){
            if(result.value){

                $.post(url,{id_barang:id_barang}, function(data){
                     if(data.code == 1){
                        $('#table-barang-query').DataTable().ajax.reload(null, false);
                     }else{
                         alert(data.msg);
                     }
                },'json');
            }
       });
   });


 </script>
       			
			</div><!-- /.page-header -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<?= $this->endSection() ?>