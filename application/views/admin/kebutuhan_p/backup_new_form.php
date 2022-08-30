<link rel="stylesheet" href="<?= base_url() ?>vendor/form-input/component.css">
<link rel="stylesheet" href="<?= base_url() ?>vendor/form-input/demo.css">


<title><?= $header ?></title>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <div class="row">
      <div class="col-lg-9"> 
      <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
      <i class="fas fa-chart-line center" ></i>
      Input Data Kebutuhan Pupuk Bersubsidi (RDKK Online)
      </h6>
    </div>
    <div class="col-md-1 offset-md-2">
        <div>
            <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button>
        </div>
    </div>  
        
    </div>
    </div>

    <div class="card-body" style="padding: 5px">
<div class="container">

    <?php echo form_open('admin/butuh_p/proses', 'class="form-horizontal"'); ?>
    <div class="row border-bottom-primary">
    <div class="form-group" style="margin-bottom: 0px" style="
    margin-bottom: 0px">
        <label class="control-label col">Tahun:</label>
        <div class="col">
                 <?php echo form_input(array(
                                'type'    => 'date', 
                                'name'    => 'tahun', 
                                'id'      => 'datepicker',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?> 
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 0px">
        <label for="" class="col col-form-label">Tahun:</label>
        <div class="col">
        <select class="form-control" name="tahun_id" id="tahun_id">
            <option value="">-Pilih Tahun-</option>  
            <?php 
            foreach($get_tahun as $row){
            echo "<option value='".$row->tahun_id."'>".$row->nama_tahun."</option>";
            }
            ?>
        </select>  
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 0px">
        <label for="" class="col col-form-label">Gabungan&nbsp;Kelompok&nbsp;Tani:</label>
        <div class="col">
        <select class="form-control" name="gapoktan" id="gapoktan">
            <option value="">-Pilih Gapoktan-</option>  
            <?php 
            foreach($get_gapoktan as $row){
            echo "<option value='".$row->gapoktan_id."'>".$row->nama_gapoktan."</option>";
            }
            ?>
        </select>  
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 0px">
        <label for="" class="col col-form-label">Kelompok&nbsp;Tani:</label>
        <div class="col">
        <select class="form-control" name="poktan" id="poktan">
            <option value="">-Pilih Kelompok Tani-</option>  

            
        </select> 
            <div id="loading2" style="margin-top: 15px;">
              <img src="<?php echo base_url();?>assets/images/loading.gif" width="25"> <small>Loading...</small>
            </div>       
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 0px">
        <label for="" class="col col-form-label">Kecamatan:</label>
        <div class="col">
        <select class="form-control" name="kecamatan" id="kecamatan">
            <option value="">-Pilih Kecamatan-</option>  
            <?php 
            foreach($get_kecamatan as $row){
            echo "<option value='".$row->kecamatan_id."'>".$row->nama_kecamatan."</option>";
            }
            ?>
        </select>  
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 0px">
        <label for="" class="col col-form-label">Desa:</label>
        <div class="col">
        <select class="form-control" name="desa" id="desa">
            <option value="">-Pilih Desa-</option>  
            
        </select> 
            <div id="loading" style="margin-top: 15px;">
              <img src="<?php echo base_url();?>assets/images/loading.gif" width="25"> <small>Loading...</small>
            </div>       
        </div>
    </div>
        <br>
        <div class="form-group" style="margin-bottom: 5px">
        <label class="control-label col">Masa&nbsp;Tanam I:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'text', 
                                'name'    => 'luas_tanam',
                                'id'      => 'luas',
                                'placeholder'=>'(Hektare)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 5px">
        <label class="control-label col">Masa&nbsp;Tanam II:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'text', 
                                'name'    => 'luas_tanam',
                                'id'      => 'luas',
                                'placeholder'=>'(Hektare)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 5px">
        <label class="control-label col">Masa&nbsp;Tanam III:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'text', 
                                'name'    => 'luas_tanam',
                                'id'      => 'luas',
                                'placeholder'=>'(Hektare)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>                
        </div>
        
        
        <!-- <div class="row" style="margin-top: 5px">
            <div class="col">
        <div class="row">
          <div class="col-4">
                        <br>Kebutuhan Urea (Kg):</br>    
          </div>
          <div class="col">
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;I:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'urea1',
                                'placeholder' =>'Jumlah(Kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;II:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'urea2', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>  

        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;III:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'urea3', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        </div>
        </div> 
        <br>
        <div class="row">
          <div class="col-4">
                            <br>Kebutuhan SP-36 (Kg):</br>    
          </div>
          <div class="col">
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;I:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'sp1', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;II:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'sp2', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;III:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'sp3', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
      </div>
        <br>
        </div> 

        <br>

        <div class="row">
          <div class="col-4">
                        <br>Kebutuhan ZA (Kg):</br>    
          </div>
          <div class="col">
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;I:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'za1', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;II:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'za2', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>

        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;III:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'za3', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        </div>
        </div> 
        </div>
        <div class="col">

        <div class="row">
          <div class="col-4">
                    <br>Kebutuhan NPK (Kg):</br>    
          </div>
          <div class="col">
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;I:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'npk1', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;II:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'npk2', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;III:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'npk3', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        </div>
        </div> 

        <br>

        <div class="row">
          <div class="col-4">
                        <br>Kebutuhan Organik (Kg):</br>    
          </div>
          <div class="col">
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;I:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'organik1', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;II:</label>
        <div class="col">
        <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'organik2', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col">Masa&nbsp;Tanam&nbsp;III:</label>
        <div class="col">
                <?php echo form_input(array(
                                'type'    => 'number', 
                                'name'    => 'organik3', 
                                'placeholder'=> 'Jumlah(kg)',
                                'value'   => '', 
                                'class'   => 'form-control', 
                                'required'=> 'required')); ?>
        </div>
        </div>
        </div>
        </div>

        </div>

      </div> -->  
      <br>
        <div class="row justify-content-md-center">
          
        <div class="form-group" style="margin-bottom: 0px">
        <!-- <div class="col center"> -->
                <?php 
                echo form_input(array(
                                    'type'  => 'submit', 
                                    'name'  => 'masuk', 
                                    'value' => 'Tambah Data',
                                    'class' => 'form-control btn btn-success')); ?>
            </div>
        <!-- </div> -->
    </div> <!-- div row -->

<?php echo form_close(); ?>
</div>
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
        url: "<?php echo base_url("index.php/admin/butuh_p/listPoktan"); ?>", // Isi dengan url/path file php yang dituju
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

<div class="container-fluid" style="padding:15px">
      <form role="form" class="largewidth">
        <h3 class="formheader">Registration</h3>
        <div class="row">
          <div class="text-left col-sm-6 form-group has-feedback">
            <input type="text" class="form-control input-default" name="fname" placeholder="First Name" />
            <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i> </div>
          <div class="text-left col-sm-6 form-group has-feedback">
            <input type="text" class="form-control input-default" name="lname" placeholder="Last Name" />
            <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i> </div>
        </div>
        <div class="row">
          <div class="text-left col-sm-6 form-group has-feedback">
            <input type="text" class="form-control input-default" name="uname" placeholder="Username" />
            <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i> </div>
          <div class="text-left col-sm-6 form-group has-feedback">
            <input type="tel" class="form-control input-default" name="Pnumber" placeholder="Phone Number" />
            <i class="glyphicon glyphicon-earphone form-control-feedback glyphiconalign"></i> </div>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control input-default" name="email" placeholder="Email Address" />
          <i class="glyphicon glyphicon-envelope form-control-feedback"></i> </div>
        <div class="row">
          <div class="col-sm-6 form-group">
            <select name="gender" class="form-control input-default" >
              <option value="">Gender</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <i class="glyphicon glyphicon-chevron-down "></i> </div>
          <div class="col-sm-6 form-group">
            <input type="text" class="form-control input-default" name="DOB" placeholder="Date Of Birth : DD/MM/YY" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 form-group">
            <select name="country" class="form-control input-default" >
              <option value="">Country</option>
              <option>United States</option>
              <option>France</option>
              <option>Germany</option>
              <option>India</option>
            </select>
            <i class="glyphicon glyphicon-chevron-down "></i> </div>
          <div class="text-left col-sm-6 form-group has-feedback">
            <input type="text" class="form-control input-default" name="company" placeholder="Company Name"/>
          </div>
        </div>
        <div class="row">
          <div class="text-left form-group col-sm-6 has-feedback">
            <textarea class="form-control" style="resize:vertical" name="address" placeholder="Home Address" /></textarea>
            <i class="glyphicon glyphicon-home form-control-feedback glyphiconalign"></i> </div>
          <div class="text-left form-group col-sm-6 has-feedback">
            <textarea class="form-control" style="resize:vertical" name="address" placeholder="Office Address" /></textarea>
            <i class="glyphicon glyphicon-home form-control-feedback glyphiconalign"></i> </div>
        </div>
        <div class="row">
          <div class="text-left form-group col-sm-6 has-feedback">
            <input type="password" class="form-control input-default" name="password" placeholder="Password" />
            <i class="glyphicon glyphicon-lock form-control-feedback glyphiconalign"></i> </div>
          <div class="text-left form-group col-sm-6 has-feedback">
            <input type="password" class="form-control input-default" name="cpassword" placeholder="Confirm Password" />
            <i class="glyphicon glyphicon-lock form-control-feedback glyphiconalign"></i> </div>
        </div>
        <div class="checkbox text-left">
          <label>
            <input type="checkbox" name="agree" />
            I agree with the terms and conditions </label>
          <br />
          <label>
            <input type="checkbox" name="newsletter" />
          Receive news and offers </label>
        </div>
        <div class="form-group text-center" style="margin-bottom: 0px;">
          <button class="btn btn-default col-md-3" style="float:inherit" type="submit">Register</button>
        </div>
        <hr />
        <div class="text-center">
          <text>Already have an account ?</text>
          &nbsp;<a>Login</a> </div>
      </form>
    </div>
