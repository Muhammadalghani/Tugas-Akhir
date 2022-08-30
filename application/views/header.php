    <div class="container" id="header" style="margin-top:0px;background: #2b8cbe;padding: 10px 10px;color: #fff!important">
        <?php echo form_open('index.php',array('method' => 'get' ));?>
        <div class="col-lg-3">
            <a class="navbar-brand" href="#page-top" style="color: #fff">Traceability</a>
        </div>
        <div class="col-lg-9">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="sel1">Kecamatan:</label>
                    <select class="form-control" name='kecamatan' id="sel1">
                        <option value="semua">Semua Kecamatan</option>
                        <?php
                            foreach ($data_kecamatan as $row) {

                                if ($row->id_kecamatan == $kecamatan_id)
                echo '<option value="' .$row->id_kecamatan. '" selected>' .$row->nama_kecamatan. '</option>';
                                else
                echo '<option value="' .$row->id_kecamatan. '">' .$row->nama_kecamatan. '</option>';}
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 hide">
                <div class="form-group">
                    <label for="sel1">Desa:</label>
                    <select class="form-control" name="desa" id="sel1">
                        <option value="semua">Semua Desa</option>
                        <?php
                            foreach ($data_desa as $row) {

                                if ($row->id_desa == $desa_id)
                                    echo '<option value="' .$row->id_desa. '" selected>' .$row->nama_desa. '</option>';
                                else
                                    echo '<option value="' .$row->id_desa. '">' .$row->nama_desa. '</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="sel1">Informasi: </label>
                    <select class="form-control" name="informasi" id="sel1">
                        <option <?php if($informasi=="petani") { echo 'selected="selected"';}?> value="petani">Petani</option>
                        <option <?php if($informasi=="produksi") { echo 'selected="selected"';}?> value="produksi">Produksi</option>
                        <option <?php if($informasi=="penggilingan") { echo 'selected="selected"';}?> value="penggilingan">Penggilingan</option>
                        <option <?php if($informasi=="penyimpanan") { echo 'selected="selected"';}?> value="penyimpanan">Penyimpanan</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    if(!isset($tanggal_awal)) {
                        $tanggal_awal = date('Y');
                    }
                    if(!isset($tanggal_akhir)) {
                        $tanggal_akhir = date('Y');
                    }
                ?>
                <div class="input-group input-daterange">
                    <input type="text" id="datePicker"  name="tanggal_awal"class="form-control" value="<?php echo $tanggal_awal;?>">
                    <div class="input-group-addon">to</div>
                    <input type="text" class="form-control"  id="datePicker2" name="tanggal_akhir" value="<?php echo $tanggal_akhir;?>">
                </div>
                <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
                <link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.css">
                <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#datePicker')
                            .datepicker({
                                format: 'yyyy',
                                viewMode: "years", 
                                minViewMode: "years"
                            })
                            .on('changeDate', function(e) {
                                // Revalidate the date field
                                $('#eventForm').formValidation('revalidateField', 'date');
                            });


                    $('#datePicker2')
                            .datepicker({
                                format: 'yyyy',
                                viewMode: "years", 
                                minViewMode: "years"
                            })
                            .on('changeDate', function(e) {
                                // Revalidate the date field
                                $('#eventForm').formValidation('revalidateField', 'date');
                            });


                    });
                </script>
            </div>
            <div class="col-lg-4" style="margin-top:0px; margin-bottom:10px;">
                <button type="submit" class="btn btn-primary btn-block"  style="border-radius: 0px;background: #a6bddb;color:#">Cari</button>
            </div>
        </div>
        </form>
    </div>
