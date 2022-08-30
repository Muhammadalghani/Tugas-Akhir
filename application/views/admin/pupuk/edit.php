<title><?= $header ?></title>

<?php echo form_open('admin/pupuks/proses', '', array('id' =>$puk->pupuk_id)); ?>

	<table>
		<tr>
			<td>Nama Pupuk</td>
			<td>:</td>
			<td>
				<?php echo form_input('nama', $puk->nama_pupuk, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td>
				<?php echo form_input('jenis', $puk->jenis, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Bentuk</td>
			<td>:</td>
			<td>
				<?php echo form_input('bentuk', $puk->bentuk, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Warna</td>
			<td>:</td>
			<td>
				<?php echo form_input('warna', $puk->warna, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Harga(Rp&nbsp/&nbspKg)</td>
			<td>:</td>
			<td>
				<?php echo form_input(
					array(	'type' => 'number', 
							'name' => 'harga', 
							'value'=> $puk->harga,
							'required' => 'required')); ?>
			</td>
		</tr>
		<tr>
			<td>Kemasan(Kg)</td>
			<td>:</td>
			<td>
				<?php echo form_input(array(
											'type'		=> 'number',
											'name'		=> 'kemasan',
											'value'		=> $puk->kemasan,
											'required' 	=> 'required')); ?>
			</td>
		</tr>
		<tr>
			<td>Kandungan</td>
			<td>:</td>
			<td>
				<?php echo form_input('kandungan', $puk->kandungan, 'required="required"'); ?>
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














