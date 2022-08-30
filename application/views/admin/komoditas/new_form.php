<title><?= $header ?></title>
<div class="container">
<?php echo form_open('admin/komoditass/proses', 'class="form-horizontal"'); ?>

	<div class="form-group">
			<label class="control-label col-sm-2">Nama Komoditas:</label>
			<div class="col-sm-10">
				<?php echo form_input(array(
                              'type'    => 'text', 
                              'name'    => 'nama', 
                              'value'   => '', 
                              'class'   => 'form-control', 
                              'required'=> 'required')); ?></div></div>
			<div class="form-group">
				<div class="col-sm-10">
				<?php 
				echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'masuk', 
									'value'	=> 'Tambah Data')); ?>
				</div>
			</div>
<?php echo form_close(); ?>
</div>