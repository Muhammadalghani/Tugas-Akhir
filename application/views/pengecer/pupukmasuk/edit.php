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
    <button type="button" class="btn btn-primary" onclick="javascript:history.back()"><span></span> Kembali</button>
    <!-- <form role="form" class="largewidth"> -->
    <div class="largewidth" style="margin-bottom: 100px">
        <h4 class="formheader">Update Data Pupuk Masuk (Level Pengecer)</h4>
        <?php echo form_open('pengecer/pengecer_home/proses', 'class="form-horizontal"', array('id' => $pterima->pterima_id)); ?>

        <div class="row">
            <div class="col-sm-4 form-group">
                <p>Tahun:</p>
                <select class="form-control input-default" name="tahun_id" id="tahun_id" readonly>
                    <!-- <option value="">2022</option>   -->
                    <?php
                    // echo "<option value='" . $pterima->tahun_id . "'>" . $pterima->nama_tahun . "</option>";
                    foreach ($get_tahun as $row) {
                        echo "<option value='" . $row->tahun_id . "'>" . $row->nama_tahun . "</option>";
                    }
                    ?>
                </select>
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <p>Bulan:</p>
                <select class="form-control input-default" name="bulan_id" id="bulan_id" readonly>
                    <!-- <option value="">-Pilih Gapoktan-</option>   -->
                    <?php
                    echo "<option value='" . $pterima->bulan_id . "'>" . $pterima->nama_bulan . "</option>";
                    // foreach ($get_bulan as $row) {
                    //     echo "<option value='" . $row->bulan_id . "'>" . $row->nama_bulan . "</option>";
                    // }
                    ?>
                </select>
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <p>Jenis Pupuk:</p>
                <select class="form-control input-default" name="pupuk_id" id="pupuk_id" readonly>
                    <!-- <option value="">-Pilih Pupuk-</option> -->
                    <?php
                    echo "<option value='" . $pterima->pupuk_id . "'>" . $pterima->nama_pupuk . "</option>";
                    foreach ($get_pupuk as $row) {
                        echo "<option value='" . $row->pupuk_id . "'>" . $row->nama_pupuk . "</option>";
                    }
                    ?>
                </select>
                <!-- <div id="loading2" style="margin-top: 15px;">
                    <img src="<?php echo base_url(); ?>assets/images/loading.gif" width="25"> <small>Loading...</small>
                </div> -->
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <p>Distributor:</p>
                <select class="form-control input-default" name="distributor" id="distributor" readonly>
                    <!-- <option value="">-Pilih Kelompok Tani-</option>   -->
                    <?php
                    echo "<option value='" . $pterima->distributor_id . "'>" . $pterima->nama_distributor . "</option>";
                    // foreach ($data_diri as $row) {
                    //     echo "<option value='" . $row->distributor_id . "'>" . $row->nama_distributor . "</option>";
                    // }
                    ?>
                </select>
                <!-- <div id="loading2" style="margin-top: 15px;">
                    <img src="<?php echo base_url(); ?>assets/images/loading.gif" width="25"> <small>Loading...</small>
                </div> -->
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <p>Pengecer:</p>
                <select class="form-control input-default" name="pengecer" id="pengecer" readonly>
                    <!-- <option value="">-Pilih Kelompok Tani-</option>   -->
                    <?php
                    echo "<option value='" . $pterima->pengecer_id . "'>" . $pterima->nama_pengecer . "</option>";
                    // foreach ($data_diri as $row) {
                    //     echo "<option value='" . $row->pengecer_id . "'>" . $row->nama_pengecer . "</option>";
                    // }
                    ?>
                </select>
                <!-- <div id="loading2" style="margin-top: 15px;">
                    <img src="<?php echo base_url(); ?>assets/images/loading.gif" width="25"> <small>Loading...</small>
                </div> -->
                <i class="glyphicon glyphicon-chevron-down "></i>
            </div>
            <div class="col-sm-4 form-group">
                <p>Kecamatan:</p>
                <select class="form-control input-default" name="kecamatan_id" id="kecamatan_id" readonly>
                    <!-- <option value="">-Pilih Kelompok Tani-</option>   -->
                    <?php
                    echo "<option value='" . $pterima->kecamatan_id . "'>" . $pterima->nama_kecamatan . "</option>";
                    // foreach ($get_kecamatan as $row) {
                    //     echo "<option value='" . $row->kecamatan_id . "'>" . $row->nama_kecamatan . "</option>";
                    // }
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
        <div class="row justify-content-sm-center">
            <div class="text-left col-sm-4 form-group has-feedback">
                <p>Jumlah terbaru:</p>
                <?php echo form_input(array(
                    'type'        => 'text',
                    'name'        => 'jumlah_terima',
                    'placeholder' => '(kg)',
                    'value'       =>  $pterima->jumlah_terima,
                    'class'       => 'form-control',
                    'required'    => 'required'
                )); ?>
                <i class="glyphicon glyphicon-user form-control-feedback glyphiconalign"></i>
            </div>
        </div>
        <div class="row justify-content-md-center">

            <div class="form-group text-center" style="margin-bottom: 0px;float: inherit;">
                <?php
                echo form_input(array(
                    'type'  => 'submit',
                    'name'  => 'edit',
                    'value' => 'Update Data',
                    'class' => 'btn btn-default'
                )); ?>
            </div>
        </div>
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
                url: "<?php echo base_url("index.php/poktan/butuh_p/listDesa"); ?>", // Isi dengan url/path file php yang dituju
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
<!-- //script untuk gapoktan poktan -->
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