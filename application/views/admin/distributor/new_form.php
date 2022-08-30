<title><?= $header ?></title>
<div class="container">
  <div>
    <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button>
	</div>
  <?php echo form_open('admin/distributors/proses', 'class="form-horizontal"'); ?>

		<div class="form-group">
			<label class="control-label col-sm-2">Nama&nbsp;Pemilik&nbsp;Usaha:</label>
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
      <label class="control-label col-sm-2">Alamat:</label>
      <div class="col-sm-10">
        <?php echo form_input(array(
                              'type'    => 'text', 
                              'name'    => 'alamat', 
                              'value'   => '', 
                              'class'   => 'form-control', 
                              'required'=> 'required')); ?>
      </div>
    
		<div class="form-group">
      <label class="control-label col-sm-2">Nama&nbsp;Usaha:</label>
      <div class="col-sm-10">
				<?php echo form_input(array(
                              'type'    => 'text', 
                              'name'    => 'nama_usaha', 
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
      <label class="control-label col-sm-2">Nomor&nbsp;Hp:</label>
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
</div>