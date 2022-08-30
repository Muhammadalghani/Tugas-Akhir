<title><?= $header ?></title>

<?php echo form_open('admin/poktans/proses', '', array('id' =>$tan->poktan_id)); ?>

	<table>
		<tr>
			<td>Nama Kelompok Tani</td>
			<td>:</td>
			<td>
				<?php echo form_input('nama', $tan->nama_poktan, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Nama Ketua</td>
			<td>:</td>
			<td>
				<?php echo form_input('namak', $tan->nama_poktan, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<?php echo form_input('alamat', $tan->alamat, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Luas Lahan</td>
			<td>:</td>
			<td>
				<?php echo form_input(
					array(	'type' => 'number', 
							'name' => 'luas_lahan', 
							'value'=> $tan->luas_lahan,
							'required' => 'required')); ?>
			</td>
		</tr>
		<tr>
			<td>Nomor Hp</td>
			<td>:</td>
			<td>
				<?php echo form_input(
					array(	'type' => 'number', 
							'name' => 'no_hp', 
							'value'=> $tan->no_hp,
							'required' => 'required')); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php 
				echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'edit', 
									'value'	=> 'Edit Data')); ?>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>














