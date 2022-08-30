<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table center" ></i>
		Data Kelompok Tani
	</div>
	<a class='btn btn-primary' href="<?php echo site_url('admin/poktans/add')?>">Tambah Data</a>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col" rowspan="2">Kebutuhan Pupuk Bersubsidi (Kg)</th>
						<th scope="col" colspan="6">Area of workplace</th>
					</tr>

					<tr class='text-center'>
						<th>No</th>
						<th>Nama Kelompok Tani</th>
						<th>Nama Ketua</th>
						<th>Alamat</th>
						<th>Luas Lahan</th>
						<th>Nomor HP</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						$No = 1;
						foreach ($data as $d => $row) {?>

							<td><div class="text-center"><?php echo $No++; ?></div></td>
							<td><?php echo $row->nama_poktan; ?></td>
							<td><?php echo $row->nama_ketua; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td><?php echo $row->luas_lahan; ?></td>
							<td><?php echo $row->no_hp; ?></td>
							<td><div class="text-center">
								<a href="<?php echo site_url('admin/poktans/edit/'.$row->poktan_id)?>">
									<i class="fas fa-edit" style="color: #03ad30"" title="Edit"></i></a>&nbsp&nbsp
									<a href="<?php echo site_url('admin/poktans/del/'.$row->poktan_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
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