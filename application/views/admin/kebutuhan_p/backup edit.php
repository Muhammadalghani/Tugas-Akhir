<title><?= $header ?></title> 
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <div class="row">
      <div class="col-lg-9">
      <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
      <i class="fas fa-chart-line center" ></i>
      Update Data Kebutuhan Pupuk Bersubsidi (RDKK Online).
      </h6>
    </div>
<!--     <div>
      <a class='btn btn-primary ' href="<?php echo site_url('admin/butuh_p/add')?>">Tambah Data</a>
      <button type="button" class='btn btn-primary' onclick="javascript:history.back()"><span ></span> Kembali</button>
    </div> -->
    <div class="col-md-1 offset-md-2">
        <div>
            <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span ></span> Kembali</button>
        </div>
    </div>  
        
    </div>
    </div>
<?php echo form_open('admin/butuh_p/proses', 'class="form-horizontal"', array('id' =>$butuhp->butuhk_id)); ?>

    <div class="card-body" style="padding: 5px">
<div class="container">
    <div class="row border-bottom-primary">
        <div class="form-group" style="margin-bottom: 0px">

  <label class="control-label col-sm">Tahun:</label>
  <div class="col">
      <?php echo form_input(array(
              'type'    => 'date', 
              'name'    => 'tahun', 
              'value'   => $butuhp->tahun_id, 
              'class'   => 'form-control', 
              'required'=> 'required')); ?>
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
    </div>
  </div>

    <div class="form-group" style="margin-bottom: 5px">
    <label class="control-label col">Luas&nbsp;Tanam:</label>
    <div class="col">
        <?php echo form_input(array(
                'type'    => 'number', 
                'name'    => 'luas_tanam', 
                'value'   => $butuhp->luas_tanam, 
                'class'   => 'form-control', 
                'required'=> 'required')); ?>
    </div>
  </div>
</div>
        
        <div class="row" style="margin-top: 5px">
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
                'value'   => $butuhp->urea1, 
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
                'value'   => $butuhp->urea2, 
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
                'value'   => $butuhp->urea3, 
                'class'   => 'form-control', 
                'required'=> 'required')); ?>
    </div>
  </div>
    </div>
  </div>
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
                'value'   => $butuhp->sp1, 
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
                'value'   => $butuhp->sp2, 
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
                'value'   => $butuhp->sp3, 
                'class'   => 'form-control', 
                'required'=> 'required')); ?>
    </div>
    </div>
  </div>
</div>
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
                'value'   => $butuhp->za1, 
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
                'value'   => $butuhp->za2, 
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
                'value'   => $butuhp->za3, 
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
                'value'   => $butuhp->npk1, 
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
                'value'   => $butuhp->npk2, 
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
                'value'   => $butuhp->npk3, 
                'class'   => 'form-control', 
                'required'=> 'required')); ?>
    </div>
    </div>
  </div>
</div>
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
                'value'   => $butuhp->organik1, 
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
                'value'   => $butuhp->organik2, 
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
                'value'   => $butuhp->organik3, 
                'class'   => 'form-control', 
                'required'=> 'required')); ?>
    </div>
        </div>
        </div>
        </div> <!-- div row -->

        </div>

      </div> 
      </div> 
      <br>
        <div class="row justify-content-md-center">
          
        <div class="form-group" style="margin-bottom: 0px">
        <!-- <div class="col center"> -->	
				<?php echo form_input(array(
									'type'	=> 'submit', 
									'name'	=> 'edit', 
									'value'	=> 'Update Data',
                  'class' => 'form-control btn btn-success')); ?>
	</div>
</div>

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