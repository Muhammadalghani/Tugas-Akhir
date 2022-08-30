<title><?= $header ?></title>
<div class="container">
  <div>
  <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button>
</div>
<?php echo form_open('admin/pengecers/proses', 'class="form-horizontal"'); ?>
	<div class="form-group">
		<label class="control-label col-sm-2">Nama&nbsp;Pengecer:</label>
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
      <label for="" class="col-sm-2 col-form-label">Kecamatan:</label>
      <div class="col-sm-10">
        <select class="form-control" name="kecamatan_id">
          <option value="">-Pilih Kecamatan-</option>  
          <?php foreach($cont_kec as $row): ?>
            <option value="<?php echo $row->kecamatan_id; ?>"><?php echo $row->nama_kecamatan; ?></option>
          <?php endforeach; ?>
        </select>  
      </div>
    </div>

    <div class="form-group">
      <label for="" class="col-sm-2 col-form-label">Distributor:</label>
      <div class="col-sm-10">
        <select class="form-control" name="distributor">
          <option value="">-Pilih Distributor-</option>  
          <?php foreach($cont_dis as $row): ?>
            <option value="<?php echo $row->distributor_id; ?>"><?php echo $row->nama_distributor; ?></option>
          <?php endforeach; ?>
        </select>  
      </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Pemilik&nbsp;Kios:</label>
		<div class="col-sm-10">
			<?php echo form_input(array(
                          'type'    => 'text', 
                          'name'    => 'pemilik_kios', 
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
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Nomor&nbsp;Hp:</label>
		<div class="col-sm-10">
			<?php echo form_input(array(
                          'type'    => 'number', 
                          'name'    => 'no_hp', 
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