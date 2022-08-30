<link rel="stylesheet" href="<?= base_url() ?>vendor/form-input/component.css">
<link rel="stylesheet" href="<?= base_url() ?>vendor/form-input/demo.css">
<style>
    p {
        margin-bottom: 5px;
    }

    ,
    hr {
        margin-bottom: 5px;
    }

    ,
    .container-fluid {
        padding: 10px;
    }

    ,
    .form-group {
        margin-bottom: 10px;
    }
</style>

<title><?= $header ?></title>

<div class="container-fluid">

    <!-- <form role="form" class="largewidth"> -->
    <div class="largewidth" style="margin-bottom: 100px">
        <h4 class="formheader">Input Data Pupuk Masuk<br>(Level Pengecer)</h4>
        <?php echo form_open('pengecer/pengecer_home/proses'); ?>
        <div class="row">
            <div class="col-sm-4 form-group">
                <p>Tahun:</p>
                <select class="form-control input-default" name="tahun_id" id="tahun_id" required="required" oninvalid="this.setCustomValidity('Pilih Tahun Data!')" oninput="setCustomValidity('')">
                    <option value="">-Pilih Tahun-</option>
                    <?php
                    foreach ($get_tahun as $row) {
                        echo "<option value='" . $row->tahun_id . "'>" . $row->nama_tahun . "</option>";
                    }
                    ?>
                </select>
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <!-- invisible -->
                <p>Bulan</p>
                <select class="form-control input-default" name="bulan_id" id="bulan_id" required="required" oninvalid="this.setCustomValidity('Pilih Bulan Data!')" oninput="setCustomValidity('')">
                    <option value="">-Pilih Bulan-</option>
                    <?php
                    foreach ($get_bulan as $row) {
                        echo "<option value='" . $row->bulan_id . "'>" . $row->nama_bulan . "</option>";
                    }
                    ?>
                </select>
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <!-- <div class="col-sm-4 form-group"> -->
                <!-- invisible -->
                <!-- <p>Jenis Pupuk:</p> -->
                <!-- <select class="form-control input-default" name="pupuk_id" id="pupuk_id" required="required" oninvalid="this.setCustomValidity('Pilih Pupuk Data!')" oninput="setCustomValidity('')"> -->
                    <!-- <option value="">-Pilih Pupuk-</option> -->
                    <!-- <?php 
                    // foreach ($get_pupuk as $row) {
                        // echo "<option value='" . $row->pupuk_id . "'>" . $row->nama_pupuk . "</option>";
                    // }
                    // ?>
                </select>
                <div id="loading2" style="margin-top: 15px;">
                    <img src="<?php echo base_url(); ?>assets/images/loading.gif" width="25"> <small>Loading...</small>
                </div> -->
                <!-- <i class="glyphicon glyphicon-chevron-down "></i> -->
            <!-- </div> -->
            <div class="col-sm-4 form-group">
                <!-- invisible -->
                <p>Distributor:</p>
                <select class="form-control input-default" name="distributor" id="distributor" readonly>
                    <!-- <option value="">-Pilih Distributor-</option>   -->
                    <?php
                    foreach ($data_diri as $row) {
                        echo "<option value='" . $row->distributor_id . "'>" . $row->nama_distributor . "</option>";
                    }
                    ?>
                </select>
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <!-- invisible -->
                <p>Pengecer:</p>
                <select class="form-control input-default" name="pengecer" id="pengecer" readonly>
                    <!-- <option value="">-Pilih Pengecer-</option>   -->
                    <?php
                    foreach ($data_diri as $row) {
                        echo "<option value='" . $row->pengecer_id . "'>" . $row->nama_pengecer . "</option>";
                    }
                    ?>
                </select>
                <div id="loading2" style="margin-top: 15px;">
                    <img src="<?php echo base_url(); ?>assets/images/loading.gif" width="25"> <small>Loading...</small>
                </div>
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                
            </div>
            <div class="col-sm-4 form-group">
                <!-- invisible -->
                <p>Kecamatan:</p>
                <select class="form-control input-default" name="kecamatan_id" id="kecamatan_id" readonly>
                    <option value="">-Pilih Kecamatan-</option>
                    <?php
                    foreach ($get_kecamatan as $row) {
                        echo "<option value='" . $row->kecamatan_id . "'>" . $row->nama_kecamatan . "</option>";
                    }
                    ?>
                </select>
                <!-- <div id="loading2" style="margin-top: 15px;">
                    <img src="<?php echo base_url(); ?>assets/images/loading.gif" width="25"> <small>Loading...</small>
                </div> -->
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
        </div>
        <div class="row justify-content-sm-center">

        </div>
        <hr>
        <p style="text-align: center;">-Masukkan Jumlah Pupuk-</p>
        <hr>
        <div class="row">
            <div class="text-left col-sm-4 form-group has-feedback">
                <p>Urea:</p>
                <input type="number" step="any" name="jumlahurea_msk" placeholder="(kg)" value="" oninvalid="this.setCustomValidity('Tolong Masukkan Angka!')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" pattern="[0-9]+" class="form-control" required="required">
                <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i>
            </div>
            <div class="text-left col-sm-4 form-group has-feedback">
                <p>SP-36:</p>
                <input type="number" step="any" name="jumlahsp_msk" placeholder="(kg)" value="" oninvalid="this.setCustomValidity('Tolong Masukkan Angka!')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" pattern="[0-9]+" class="form-control" required="required">
                <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i>
            </div>
            <div class="text-left col-sm-4 form-group has-feedback">
                <p>ZA:</p>
                <input type="number" step="any" name="jumlahza_msk" placeholder="(kg)" value="" oninvalid="this.setCustomValidity('Tolong Masukkan Angka!')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" pattern="[0-9]+" class="form-control" required="required">
                <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i>
            </div>
            <div class="text-left col-sm-4 form-group has-feedback">
                <p>Phonska:</p>
                <input type="number" step="any" name="jumlahphonska_msk" placeholder="(kg)" value="" oninvalid="this.setCustomValidity('Tolong Masukkan Angka!')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" pattern="[0-9]+" class="form-control" required="required">
                <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i>
            </div>
            <div class="text-left col-sm-4 form-group has-feedback">
            </div>
            <div class="text-left col-sm-4 form-group has-feedback">
                <p>Petroganik:</p>
                <input type="number" step="any" name="jumlahpetroganik_msk" placeholder="(kg)" value="" oninvalid="this.setCustomValidity('Tolong Masukkan Angka!')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" pattern="[0-9]+" class="form-control" required="required">
                <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="form-group text-center" style="margin-bottom: 5px;float: inherit;">
                <?php
                echo form_input(array(
                    'type'  => 'submit',
                    'name'  => 'masuk',
                    'value' => 'Tambah Data',
                    'class' => 'btn btn-default '
                )); ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a class="btn btn-default" href="<?php echo base_url('pengecer/pengecer_home') ?>" role="button">Kembali</a>
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
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
        // Kita sembunyikan dulu untuk loadingnya
        $("#loading").hide();

        $("#kecamatan").change(function() { // Ketika user mengganti atau memilih data provinsi
            $("#desa").hide(); // Sembunyikan dulu combobox kota nya
            $("#loading").show(); // Tampilkan loadingnya

            $.ajax({
                type: "POST", // Method pengiriman data bisa dengan GET atau POST
                url: "<?php echo base_url("index.php/admin/butuh_p/listDesa"); ?>", // Isi dengan url/path file php yang dituju
                data: {
                    kecamatan_id: $("#kecamatan").val()
                }, // data yang akan dikirim ke file yang dituju
                dataType: "json",
                beforeSend: function(e) {
                    if (e && e.overrideMimeType) {
                        e.overrideMimeType("application/json;charset=UTF-8");
                    }
                },
                success: function(response) { // Ketika proses pengiriman berhasil
                    // setTimeout(function(){
                    $("#loading").hide(); // Sembunyikan loadingnya

                    // set isi dari combobox kota
                    // lalu munculkan kembali combobox kotanya
                    $("#desa").html(response.list_desa).show();
                    // }, 3000);
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });
        });
    });
</script>
<!-- //script untuk distributor pengecer -->
<script>
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
        // Kita sembunyikan dulu untuk loadingnya
        $("#loading2").hide();

        $("#distributor").change(function() { // Ketika user mengganti atau memilih data provinsi
            $("#pengecer").hide(); // Sembunyikan dulu combobox kota nya
            $("#loading2").show(); // Tampilkan loadingnya

            $.ajax({
                type: "POST", // Method pengiriman data bisa dengan GET atau POST
                url: "<?php echo base_url("index.php/pengecer/pengecer_home/listPengecer"); ?>", // Isi dengan url/path file php yang dituju
                data: {
                    distributor_id: $("#distributor").val()
                }, // data yang akan dikirim ke file yang dituju
                dataType: "json",
                beforeSend: function(e) {
                    if (e && e.overrideMimeType) {
                        e.overrideMimeType("application/json;charset=UTF-8");
                    }
                },
                success: function(response) { // Ketika proses pengiriman berhasil
                    // setTimeout(function(){
                    $("#loading2").hide(); // Sembunyikan loadingnya

                    // set isi dari combobox kota
                    // lalu munculkan kembali combobox kotanya
                    $("#pengecer").html(response.list_poktan).show();
                    // }, 3000);
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });
        });
    });
</script>