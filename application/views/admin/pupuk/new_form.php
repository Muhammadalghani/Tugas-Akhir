<title><?= $header ?></title>

<?php echo form_open('admin/pupuks/proses'); ?>

	<table>
		<tr>
			<td>Nama Pupuk</td>
			<td>:</td>
			<td>
				<?php echo form_input('nama', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td>
				<?php echo form_input('jenis', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Bentuk</td>
			<td>:</td>
			<td>
				<?php echo form_input('bentuk', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Warna</td>
			<td>:</td>
			<td>
				<?php echo form_input('warna', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Harga(Rp&nbsp/&nbspKg)</td>
			<td>:</td>
			<td>
				<?php echo form_input(array('type' => 'number', 'name' => 'harga', 'required' => 'required')); ?>
			</td>
		</tr>
		<tr>
			<td>Kemasan&nbsp(Kg)</td>
			<td>:</td>
			<td>
				<?php echo form_input(array(
											'type'	=> 'number',
											'name'	=> 'kemasan',
											'value' => '',
											'required'=>'required')); ?>
			</td>
		</tr>
		<tr>
			<td>Kandungan</td>
			<td>:</td>
			<td>
				<?php echo form_input('kandungan', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php 
				echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'masuk', 
									'value'	=> 'Tambah Data')); ?>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>














