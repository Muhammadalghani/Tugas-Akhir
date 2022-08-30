<title><?= $header ?></title>
<div class="box-tools pull-center">
	<div class="row-center">
		<div class="col-lg-6 col-lg-offset-3">
	<?php echo form_open('admin/stoks/proses', 'class="form-horizontal"'); ?>

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspDistributor:</label>
			<div class="col-sm-10">
			<select name="distributor" class="form-control">
				<option>-Pilih-</option>
				<?php foreach ($content_dis as $key): ?>
					<option value="<?= $key->distributor_id ?>"><?= $key->nama_distributor ?></option>
				<?php endforeach ?>
			</select>
		  </div>
		</div> 

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspPupuk:</label>
			<div class="col-sm-10">
			<select name="pupuk" class="form-control">
				<option>-Pilih-</option>
				<?php foreach ($content_puk as $key): ?>
					<option value="<?= $key->pupuk_id ?>"><?= $key->nama_pupuk ?></option>
					
				<?php endforeach ?>
			</select>
		  </div>
		</div>
    
    <div class="form-group">
		  <label class="control-label col-sm-2">Jumlah:</label>
			<div class="col-sm-10">
				<?php echo form_input(array(
                              'type'    => 'number', 
                              'name'    => 'jumlah', 
                              'value'   => '', 
                              'class'   => 'form-control', 
                              'required'=> 'required')); ?>
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
</div>
</div>
	</div>