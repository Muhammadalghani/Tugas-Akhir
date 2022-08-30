<title><?= $header ?></title>

<?php echo form_open('admin/poktans/proses'); ?>

<div class="form-group">
	<label class="control-label col-sm-2">Nama&nbsp;Kelompok&nbsp;Tani:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type'    => 'text', 
			'name'    => 'nama', 
			'value'   => '', 
			'class'   => 'form-control', 
			'required'=> 'required')); ?>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Nama&nbsp;Ketua:</label>
		<div class="col-sm-10">
			<?php echo form_input(array(
				'type'    => 'text', 
				'name'    => 'namak', 
				'value'   => '', 
				'class'   => 'form-control', 
				'required'=> 'required')); ?>
			</div>
		</div>

<div class="form-group">
	<label class="control-label col-sm-2">Gapoktan:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type'    => 'text', 
			'name'    => 'nama_gapoktan', 
			'value'   => '', 
			'class'   => 'form-control', 
			'required'=> 'required')); ?>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Desa:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type'    => 'text', 
			'name'    => 'nama_desa', 
			'value'   => '', 
			'class'   => 'form-control', 
			'required'=> 'required')); ?>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Kecamatan:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type'    => 'text', 
			'name'    => 'nama_kecamatan', 
			'value'   => '', 
			'class'   => 'form-control', 
			'required'=> 'required')); ?>
	</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Tahun&nbsp;Berdiri:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type' => 'date', 
			'name' => 'tahun_berdiri', 
			'class'=>'form-control', 
			'required' => 'required')); ?>
	</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Luas&nbsp;Lahan:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type' => 'number', 
			'name' => 'luas_lahan', 
			'class'=>'form-control',
			'required' => 'required')); ?>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">No&nbsp;Hp:</label>
	<div class="col-sm-10">
		<?php echo form_input(array(
			'type' => 'number', 
			'name' => 'no_hp', 
			'class'=>'form-control',
			'required' => 'required')); ?>
		</div>
	</div>

<div class="col-sm-10">
	<?php 
	echo form_input(array(
		'type'	=> 'submit', 
		'name'	=> 'masuk', 
		'value'	=> 'Tambah Data',
		'class' => 'form-control')); ?>
	</div>
<?php echo form_close(); ?>














