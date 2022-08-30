<div class="card mb-3">
	<div class="card-header">
	<i class="fas fa-table center" ></i>
    Data Komoditas
	</div>
	<a class='col-2 btn btn-primary' href="<?php echo site_url('admin/komoditass/add')?>">Tambah Data</a>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="example" width="100%" cellspacing="0">
			<thead>
				<tr class='text-center'>
					<th>No</th>
					<th>Nama Komoditas</th>
					<th>Umur Tanam (Hari)</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<tr>
					<?php 
						$No = 1;
						foreach ($data as $d => $row) {?>

							<td><div class="text-center"><?php echo $No++; ?></div></td>
						 	<td><?php echo $row->nama; ?></td>
							<td></td>
							<td><div class="text-center">
								<a href="<?php echo site_url('admin/komoditass/edit/'.$row->komoditas_id)?>">
								<i class="fas fa-edit" style="color: #03ad30"" title="Edit"></i></a>
								&nbsp
								&nbsp
								<a href="<?php echo site_url('admin/komoditass/del/'.$row->komoditas_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
								<i class="fas fa-trash" style="color: #ff6b6b" title="Delete"></i></a>
							</div></td>
					</tr>									
					<?php 
						} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<link rel="stylesheet" href="<?php echo base_url();?>vendor/datatables/exporter/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>vendor/datatables/exporter/css/buttons.dataTables.min.css">

<script src="<?php echo base_url();?>vendor/datatables/exporter/jquery-3.3.1.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/jszip.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/buttons.print.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        responsive: true,
        paging: true,
        "processing": true, //Feature control the processing indicator.
        
    } );
} );
</script>