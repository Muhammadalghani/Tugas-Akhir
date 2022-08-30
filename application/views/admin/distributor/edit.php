<title><?= $header ?></title>
<div>
	<button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button>
</div>
<?php echo form_open('admin/distributors/proses', '', array('id' =>$butor->distributor_id)); ?>

<div>
		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbsp;Pemilik&nbsp;Usaha:</label>
			<div class="col-sm-10">
				<?php echo form_input(array(
                              'type'    => 'text', 
                              'name'    => 'nama', 
                              'value'   => $butor->nama_distributor, 
                              'class'   => 'form-control', 
                              'required'=> 'required')); ?>
		  </div>
		</div>

		<div class="form-group">
      <label class="control-label col-sm-2">Alamat:</label>
      <div class="col-sm-10">
				<?php echo form_input(array(
                              'type'    => 'text', 
                              'name'    => 'alamat', 
                              'value'   => $butor->alamat, 
                              'class'   => 'form-control', 
                              'required'=> 'required')); ?>
      </div>

		<div class="form-group">
	    <label class="control-label col-sm-2">Nama&nbsp;Usaha:</label>
	    <div class="col-sm-10">
					<?php echo form_input(array(
	                              'type'    => 'text', 
	                              'name'    => 'nama_usaha', 
	                              'value'   => $butor->nama_usaha, 
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
		                                'value'=> $butor->tahun_berdiri, 
		                                'class'=>'form-control', 
		                                'required' => 'required')); ?>
		</div></div>		

		<div class="form-group">
      <label class="control-label col-sm-2">Nomor&nbsp;Hp:</label>
				<div class="col-sm-10">
          <?php echo form_input(array(
                                'type' => 'number', 
                                'name' => 'no_hp',
                                'value'=> $butor->no_hp, 
                                'class'=>'form-control',
                                'required' => 'required')); ?>
        </div>
		</div>

		<div>
				<?php 
				echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'edit', 
									'value'	=> 'Edit Data',
                  					'class' => 'btn btn-primary')); ?>
			</div>

<?php echo form_close(); ?>
</div>