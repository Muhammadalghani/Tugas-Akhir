<div class="card mb-3">
	<div class="card-header">
	<i class="fas fa-table center" ></i>
    Data Stok
	</div>
	<a class='btn btn-primary' href="<?php echo site_url('admin/stokpusat/add')?>">Tambah Data</a>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr class='text-center'>
					<th>No</th>
					<th>Nama Pupuk</th>
					<th>Jumlah Stok</th>
					<th>Action</th>
				</tr>
			</thead> 
				<tbody>
					<tr>
					<?php 
						$No = 1;
						foreach ($data as $d => $row) {?>

							<td class='text-center'><?php echo $No++; ?></td>
						 	<td><?php echo $row->nama_pupuk; ?></td>
						 	<td><?php echo $row->jumlah; ?></td>
							<td><div class="text-center">
								<a href="<?php echo site_url('admin/stokpusat/edit/'.$row->total_id)?>">
								<i class="fas fa-edit" style="color: #03ad30"" title="Edit"></i></a>&nbsp&nbsp
								<a href="<?php echo site_url('admin/stokpusat/del/'.$row->total_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
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