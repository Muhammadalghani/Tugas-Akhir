<title><?= $header ?></title>

<?php echo form_open('admin/stokpusat/proses', '', array('id' =>$pusat->total_id)); ?>

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbspPupuk:</label>
			<div class="col-sm-10">
			<select class="form-control" name="pupuk" id="pupuk">
                <option value="<?php echo $pusat->nama_pupuk; ?> ">Nama pupuk</option>	
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
							'value'		=> $pusat->jumlah,
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