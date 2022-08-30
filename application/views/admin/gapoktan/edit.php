<title><?= $header ?></title>
  <div>
    <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button>
	</div>
<?php echo form_open('admin/gapoktan/proses', '', array('id' =>$gap->gapoktan_id)); ?>

<div class="form-group">
		<label class="control-label col-sm-2">Nama&nbsp;Gapoktan:</label>
		<div class="col-sm-10">
			<?php echo form_input(array(
                          'type'    => 'text', 
                          'name'    => 'nama', 
                          'value'   => $gap->nama_gapoktan, 
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
                          'value'   => $gap->nama_ketua, 
                          'class'   => 'form-control', 
                          'required'=> 'required')); ?>
	  	</div> 
	</div>

    <div class="form-group">
      <label for="" class="col-sm-2 col-form-label">Desa:</label>
      <div class="col-sm-10">
        <select class="form-control" name="desa">
          <option value="">-Pilih Desa-</option>  
          <?php foreach($cont_des as $row): ?>
            <option value="<?php echo $row->desa_id; ?>"><?php echo $row->nama_desa; ?></option>
          <?php endforeach; ?>
        </select>  
      </div>
    </div>

    <div class="form-group">
      <label for="" class="col-sm-2 col-form-label">Kecamatan:</label>
      <div class="col-sm-10">
        <select class="form-control" name="kecamatan">
          <option value="">-Pilih Kecamatan-</option>  
          <?php foreach($cont_kec as $row): ?>
            <option value="<?php echo $row->kecamatan_id; ?>"><?php echo $row->nama_kecamatan; ?></option>
          <?php endforeach; ?>
        </select>  
      </div>
    </div>
	
	<div class="form-group">
		<label class="control-label col-sm-2">Tanggal&nbsp;Pengukuhan:</label>
		<div class="col-sm-10">
			<?php echo form_input(array(
                          'type'    => 'date', 
                          'name'    => 'tanggal_pengukuhan', 
                          'value'   => $gap->tanggal_pengukuhan, 
                          'class'   => 'form-control', 
                          'required'=> 'required')); ?>
	  </div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Nomor&nbsp;Regristrasi:</label>
		<div class="col-sm-10">
			<?php echo form_input(array(
                          'type'    => 'text', 
                          'name'    => 'no_reg', 
                          'value'   => $gap->no_reg, 
                          'class'   => 'form-control', 
                          'required'=> 'required')); ?>
	  </div>
	</div>

    <div class="form-group">
    <label class="control-label col-sm-2">Jumlah&nbsp;Poktan:</label>
    <div class="col-sm-10">
      <?php echo form_input(array(
                          'type'    => 'number', 
                          'name'    => 'jumlah_poktan', 
                          'value'   => $gap->jumlah_poktan, 
                          'class'   => 'form-control', 
                          'required'=> 'required')); ?>
    </div>
  </div>		
	
	<div class="col-sm-10">
				<?php 
				echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'edit', 
									'value'	=> 'Tambah Data',
                  'class' => 'form-control')); ?>
	</div>
<?php echo form_close(); ?>












