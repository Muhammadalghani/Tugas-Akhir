<title><?= $header ?></title>

<?php echo form_open('admin/stoke/proses', '', array('id' =>$toke->stoke_id)); ?>

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbsppengecer:</label>
			<div class="col-sm-10">
			<select class="form-control" name="pengecer" id="pengecer">
                <option value="<?php echo $toke->nama_pengecer; ?> ">Nama pengecer</option>	
					<?php foreach ($content_cer as $key): ?>
                        <option value="<?= $key->pengecer_id ?>"><?= $key->nama_pengecer ?></option>
                    <?php endforeach; ?>
                </select>  
		</div></div>
		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspPupuk:</label>
			<div class="col-sm-10">
			<select class="form-control" name="pupuk" id="pupuk">
                <option value="<?php echo $toke->nama_pupuk; ?> ">Nama pupuk</option>	
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
							'value'		=> $toke->jumlah,
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