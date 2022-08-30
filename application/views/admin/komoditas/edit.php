<title><?= $header ?></title>

<?php echo form_open('admin/komoditass/proses', '', array('id' =>$tas->komoditas_id)); ?>

	<table>
		<tr>
			<td>Nama Komoditas</td>
			<td>:</td>
			<td><div class="col-md-9">
				<?php echo form_input('nama', $tas->nama, 'required="required"'); ?>
			</div></td>
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