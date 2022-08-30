<!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
        <i class="fas fa-table center" ></i>
          Data Kelompok Tani
      </h6>
    </div>
    <div>
      <!-- <a class='btn btn-primary' href="<?php echo site_url('admin/poktans/add')?>">Tambah Data</a> -->
      <button type="button" class='btn btn-primary' onclick="javascript:history.back()"><span ></span> Kembali</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-bordered nowrap" width="100%" cellspacing="0">
			<thead>
				<tr class='text-center'>
					<th>No</th>
					<th>Nama Kelompok Tani</th>
					<th>Nama Ketua</th>
					<th>Gapoktan</th>
					<th>Desa</th>
					<th>Kecamatan</th>
					<th>SK. Pengukuhan</th>
					<th>Komoditas</th>
					<th>Action</th>
				</tr>
			</thead> 
				<tbody>
					<tr>
					<?php 
						$No = 1;
						if ($data>0) {
						foreach ($data as $d => $row) {?>

							<td><div class="text-center"><?php echo $No++; ?></div></td>
						 	<td><?php echo $row->nama_poktan; ?></td>
						 	<td><?php echo $row->nama_ketua; ?></td>
						 	<td><?php echo $row->nama_gapoktan; ?></td>
						 	<td><?php echo $row->nama_desa; ?></td>
						 	<td><?php echo $row->nama_kecamatan; ?></td>
						 	<td><?php echo $row->sk; ?></td>
						 	<td><?php echo $row->komoditas; ?></td>
							<td>
								<div class="text-center">
								<a href="<?php echo site_url('admin/poktans/edit/'.$row->poktan_id)?>">
								<i class="fas fa-edit" style="color: #03ad30"" title="Edit"></i></a>&nbsp&nbsp
								<a href="<?php echo site_url('admin/poktans/del/'.$row->poktan_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
								<i class="fas fa-trash" style="color: #ff6b6b" title="Delete"></i></a>
								</div>
							</td>
					</tr>									
					<?php 
						} ?>
					<?php } else {
						echo '<center><b>';
						echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 0px"';
						echo '<p>Maaf Tidak Ada Informasi Kebutuhan Pupuk!';
						echo '</p>';
						echo '</div>';
						echo '</b></center>';
					}  ?>
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