<div class="card mb-3">
	<div class="card-header">
	<i class="fas fa-table center" ></i>
    Data Pupuk Berimbang Komoditi Pertanian
	</div>
	<a class='btn btn-primary' href="<?php echo site_url('admin/alokasis/add')?>">Tambah Data</a>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr class='text-center'>
					<th>No</th>
					<th>Nama Pupuk</th>
					<th>Musim Tanam</th>
					<th>Jatah / 0,1 Ha</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<tr>
					<?php 
						$No = 1;
						foreach ($data as $d => $row) {?>

							<td><div class="text-center"><?php echo $No++; ?></div></td>
						 	<td><?php echo $row->nama_pupuk; ?></td>
						 	<td><div class="text-center"><?php echo $row->musim; ?></div></td>
						 	<td><div class="text-center"><?php echo $row->jatah; ?></div></td>
							<td><div class="text-center">
								<a href="<?php echo site_url('admin/alokasis/edit/'.$row->alokasi_id)?>">
								<i class="fas fa-edit" style="color: #03ad30"" title="Edit"></i></a>
								<a href="<?php echo site_url('admin/alokasis/del/'.$row->alokasi_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
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