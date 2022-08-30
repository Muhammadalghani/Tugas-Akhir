<link rel="stylesheet" href="<?= base_url() ?>vendor/form-input/component.css">
<link rel="stylesheet" href="<?= base_url() ?>vendor/form-input/demo.css">
<style>
  p{
    margin-bottom: 5px;
  },
  hr{
    margin-bottom: 5px;
  },
  .container-fluid {
    padding: 10px;
  },
  .form-group{
    margin-bottom: 10px;
  }
</style>

<title><?= $header ?></title>
 
<div class="container-fluid">
  
      <!-- <form role="form" class="largewidth"> -->
        <div class="largewidth" style="margin-bottom: 100px">
        <h4 class="formheader">Input Data Kebutuhan Pupuk Bersubsidi (RDKK)<br>(Level Poktan)</h4>
         <?php echo form_open('poktan/butuh_p/proses'); ?>
        <div class="row">
          <div class="col-sm-4 form-group">
            <p>Tahun:</p>
              <select class="form-control input-default" name="tahun_id" id="tahun_id" required="required"
                      oninvalid="this.setCustomValidity('Pilih Tahun Data!')" oninput="setCustomValidity('')">
                <option value="">-Pilih Tahun-</option>  
                  <?php 
                    foreach($get_tahun as $row){
                      echo "<option value='".$row->tahun_id."'>".$row->nama_tahun."</option>";
                    }
                  ?>
              </select>
            <i class="glyphicon glyphicon-chevron-down "></i> </div>
            <div class="col-sm-4 form-group"><!-- invisible -->
            <p>Gapoktan:</p>
              <select class="form-control input-default" name="gapoktan" id="gapoktan" readonly>
                <!-- <option value="">-Pilih Gapoktan-</option>   -->
                  <?php 
                    foreach($data_diri as $row){
                      echo "<option value='".$row->gapoktan_id."'>".$row->nama_gapoktan."</option>";
                    }
                  ?>
              </select> 
            <i class="glyphicon glyphicon-chevron-down "></i> </div>
        <div class="col-sm-4 form-group"><!-- invisible -->
            <p>Poktan:</p>
              <select class="form-control input-default" name="poktan" id="poktan" readonly>
                <!-- <option value="">-Pilih Kelompok Tani-</option>   -->
                <?php 
                    foreach($data_diri as $row){
                      echo "<option value='".$row->poktan_id."'>".$row->nama_poktan."</option>";
                    }
                  ?>
              </select> 
            <div id="loading2" style="margin-top: 15px;">
              <img src="<?php echo base_url();?>assets/images/loading.gif" width="25"> <small>Loading...</small>
            </div>
            <i class="glyphicon glyphicon-chevron-down "></i> </div>
        </div>
        <div class="row justify-content-sm-center">
                  
        </div>
            <hr>
              <p style="text-align: center;">-Masukkan Luas Tanam-</p>
            <hr>
        <div class="row">
          <div class="text-left col-sm-4 form-group has-feedback">
            <p>Masa Tanam I:</p>
            <?php echo form_input(array(
                                'type'        => 'text', 
                                'name'        => 'lt1',
                                'placeholder' => '(Hektare)',
                                'value'       => '', 
                                'class'       => 'form-control', 
                                'required'    => 'required')); ?>
            <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i> </div>
          <div class="text-left col-sm-4 form-group has-feedback">
            <p>Masa Tanam II:</p>
            <?php echo form_input(array(
                                'type'        => 'text', 
                                'name'        => 'lt2',
                                'placeholder' => '(Hektare)',
                                'value'       => '', 
                                'class'       => 'form-control', 
                                'required'    => 'required')); ?>
            <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i> </div>
          <div class="text-left col-sm-4 form-group has-feedback">
            <p>Masa Tanam III:</p>
            <?php echo form_input(array(
                                'type'        => 'text', 
                                'name'        => 'lt3',
                                'placeholder' => '(Hektare)',
                                'value'       => '', 
                                'class'       => 'form-control', 
                                'required'    => 'required')); ?>
            <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i> </div>
        </div>
        <div class="row justify-content-center">
          
        <div class="form-group text-center" style="margin-bottom: 5px;float: inherit;" >
            <?php 
            echo form_input(array(
                                'type'  => 'submit', 
                                'name'  => 'masuk', 
                                'value' => 'Tambah Data',
                                'class' => 'btn btn-default ')); ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a class="btn btn-default" href="<?php echo base_url('poktan/poktan_home') ?>" role="button">Kembali</a>  
        </div>
        </div>
        <!-- <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button> -->

        <?php echo form_close(); ?>
        </div>
      <!-- </form> -->
    </div> 

  <!-- Load librari/plugin jquery nya -->
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>" type="text/javascript"></script>
  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();
    
    $("#kecamatan").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#desa").hide(); // Sembunyikan dulu combobox kota nya
      $("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("index.php/admin/butuh_p/listDesa"); ?>", // Isi dengan url/path file php yang dituju
        data: {kecamatan_id : $("#kecamatan").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
         // setTimeout(function(){
          $("#loading").hide(); // Sembunyikan loadingnya

          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#desa").html(response.list_desa).show();
         // }, 3000);
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>
<!-- //script untuk gapoktan poktan -->
  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading2").hide();
    
    $("#gapoktan").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#poktan").hide(); // Sembunyikan dulu combobox kota nya
      $("#loading2").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("index.php/poktan/butuh_p/listPoktan"); ?>", // Isi dengan url/path file php yang dituju
        data: {gapoktan_id : $("#gapoktan").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
         // setTimeout(function(){
          $("#loading2").hide(); // Sembunyikan loadingnya

          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#poktan").html(response.list_poktan).show();
         // }, 3000);
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>