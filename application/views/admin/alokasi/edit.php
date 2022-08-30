<title><?= $header ?></title>

<?php echo form_open('admin/alokasis/proses', '', array('id' =>$kasi->alokasi_id)); ?>

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspPupuk:</label>
			<div class="col-sm-10">
			<select class="form-control" name="pupuk" id="pupuk">
                <option value="<?php echo $kasi->nama_pupuk; ?> ">-Pilih-</option>	
					<?php foreach ($content_puk as $key): ?>
                        <option value="<?= $key->pupuk_id ?>"><?= $key->nama_pupuk ?></option>
                    <?php endforeach; ?>
                </select>  
		</div></div>
		<div class="form-group">
			<label class="control-label col-sm-2">Musim&nbspTanam:</label>
			<div class="col-sm-10">
			<select class="form-control" name="musim" id="musim">
                <option value="<?php echo $kasi->musim; ?> ">-Pilih-</option>	
					<?php foreach ($content_sim as $key): ?>
                        <option value="<?= $key->musim ?>"><?= $key->musim ?></option>
                    <?php endforeach; ?>
                </select>  
		</div></div>

		<div class="form-group">
		  <label class="control-label col-sm-2">Jatah/0,1Ha :</label>
			<div class="col-sm-10">
				<?php echo form_input(
					array(	'type' 		=> 'number', 
							'name' 		=> 'jatah', 
							'value'		=>  $kasi->jatah,
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