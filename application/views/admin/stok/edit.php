<title><?= $header ?></title>

<?php echo form_open('admin/stoks/proses', '', array('id' =>$tok->stokd_id)); ?>

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspDistributor:</label>
			<div class="col-sm-10">
			<select class="form-control" name="distributor" id="distributor">
                <option value="<?php echo $tok->nama_distributor; ?> ">-Pilih-</option>	
					<?php foreach ($content_dis as $key): ?>
                        <option value="<?= $key->distributor_id ?>"><?= $key->nama_distributor ?></option>
                    <?php endforeach; ?>
                </select>  
		</div></div>
		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspPupuk:</label>
			<div class="col-sm-10">
			<select class="form-control" name="pupuk" id="pupuk">
                <option value="<?php echo $tok->nama_pupuk; ?> ">-Pilih-</option>	
					<?php foreach ($content_puk as $key): ?>
                        <option value="<?= $key->pupuk_id ?>"><?= $key->nama_pupuk ?></option>
                    <?php endforeach; ?>
                </select>  
		</div></div>

		<div class="form-group">
		  <label class="control-label col-sm-2">Jumlah:</label>
			<div class="col-sm-10">
				<?php echo form_input(
					array(	'type' 		=> 'number', 
							'name' 		=> 'jumlah', 
							'value'		=> $tok->jumlah,
							'required' 	=> 'required',
							'class'		=> 'form-control')); ?>
			</div></div>
		<div class="col-sm-10">
				<?php 
				echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'edit', 
									'value'	=> 'Edit Data',
									'class'	=> 'form-control')); ?>
		</div>
<?php echo form_close(); ?>