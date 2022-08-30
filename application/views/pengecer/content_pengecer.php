<!-- CSS MAP-Leaflet-GeoJson -->
<link rel="stylesheet" href="<?php echo base_url(); ?>map_data/lib/leaflet/leaflet.css">
<script src="<?php echo base_url(); ?>map_data/lib/leaflet/leaflet.js"></script>
<script src="<?php echo base_url(); ?>map_data/data/purworejo_kec.geojson"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid" style="padding: 0px">
        <!-- Message -->
        <?php
        if ($salam === 1) {
            echo '
             <div class="alert alert-block alert-success" style="font-size: 0.8rem; margin-bottom: 5px">
              <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
              </button>
                <i class="ace-icon fa fa-check"></i>
                  Selamat Datang di Sistem Informasi Manajemen Pupuk Bersubsidi 
                <i class=small>(version 1.0)</i>
            </div>';
        } else {
        } ?>
        <!-- Page Heading -->
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Kios Pengecer:</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-transform: capitalize;">
                                    <?php
                                    if ($data_diri > 0) {
                                        foreach ($data_diri as $row) { ?>
                                            <?php echo $row->nama_pengecer; ?>
                                        <?php }  ?>
                                    <?php } else {
                                        echo 'tidak ada Data!';
                                    } ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pemilik Kios Pengecer</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-transform: capitalize;">
                                    <?php
                                    if ($data_diri > 0) {
                                        foreach ($data_diri as $row) { ?>
                                            <?php echo $row->pemilik_kios; ?>
                                        <?php    } ?>
                                    <?php } else {
                                        echo 'tidak ada Data!';
                                    } ?>




                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Distributor</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php
                                            if ($data_diri > 0) {
                                                foreach ($data_diri as $row) { ?>
                                                    <?php echo $row->nama_distributor; ?>
                                                <?php } ?>
                                            <?php } else {
                                                echo 'tidak ada Data!';
                                            } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-signs fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tergabung dalam Kecamatan:</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-transform: capitalize; ">
                                            <?php
                                            if ($data_diri > 0) {
                                                foreach ($data_diri as $row) { ?>
                                                    <?php echo $row->nama_kecamatan; ?>
                                                <?php } ?>
                                            <?php } else {
                                                echo 'tidak ada Data!';
                                            } ?>

                                        </div>
                                    </div>
                                    &nbsp;
                                    <!-- <div class="col hide">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div> -->
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-signs fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-lg-8">
                        <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
                            <i class="fas fa-table center"></i>
                            Data Pupuk Masuk
                            <?php
                            $tahun = @$_GET['tahun'];
                            if ($tahun == "1") {
                                echo "Tahun 2020";
                            } elseif ($tahun == "2") {
                                echo "Tahun 2021";
                            } elseif ($tahun == "3") {
                                echo "Tahun 2022";
                            } ?>
                        </h6>
                    </div>
                    <div class="col-md-4 offset-md-0">
                        <div>
                            <div class="row">
                                <div class="col-8">
                                    <!-- <p style="margin: 0 0 0px">Tahun:</p> -->
                                    <select class="form-control" name="tahun" id="tahun" onchange="send_value(this.value);">
                                        <option value="3">-Pilih Tahun-</option>
                                        <?php
                                        foreach ($get_tahun as $row) {
                                            echo "<option value='" . $row->tahun_id . "' >" . $row->nama_tahun . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <script>
                                        function send_value(val) {
                                            window.location = "<?php echo base_url("pengecer/pengecer_home/by_tahun") ?>?tahun=" + val;
                                        }
                                    </script>
                                </div>
                                <div class="col">
                                    <a class='btn btn-primary ' href="<?php echo site_url('pengecer/pengecer_home/add') ?>">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body" style="padding: 5px">
                <div class="table-responsive">
                    <table id="example" class="table table-striped w-100 dt-responsive nowrap" width="100%" cellspacing="0" style="font-size: 12px; border-top: 1px solid #ffffff">
                        <thead align="middle">
                            <tr>
                                <th >No</th>
                                <th >Nama Pengecer</th>
                                <th >Bulan</th>
                                <th >Jenis Pupuk</th>
                                <th >Jumlah Pupuk Masuk</th>
                                <!-- <th scope="col" colspan="15">Kebutuhan Pupuk Bersubsidi (Kg)</th> -->
                                <th >Aksi</th>
                            </tr>
                            <!-- <tr>
            <th scope="col" colspan="3">Urea</th>
            <th scope="col" colspan="3">Sp-36</th>
            <th scope="col" colspan="3">ZA</th>
            <th scope="col" colspan="3">NPK</th>
            <th scope="col" colspan="3">ORGANIK</th>
            
          </tr>  -->
                            <!-- <tr>
                                <th>Urea</th> 
                                <th>SP-36</th>
                                <th>ZA</th>
                                <th>NPK</th>
                                <th>ORGANIK</th>
                            </tr> -->

                        </thead>
                        <tbody align="middle">
                            <!-- untuk konten -->

                            <?php
                            $No = 1;
                            if ($data > 0) {
                                foreach ($data as $d => $row) { ?>
                                    <tr>
                                        <td><?php echo $No++; ?></td> <!-- Nomor -->

                                        <td><?php echo $row->nama_pengecer; ?></td> <!-- untuk Nama Pengecer -->

                                        <td><?php echo $row->nama_bulan; ?></td> <!-- untuk Nama Pengecer -->

                                        <td><?php echo $row->nama_pupuk; ?></td> <!-- untuk Nama Pengecer -->

                                        <td><?php echo $row->jumlah_terima; ?></td> <!-- untuk Nama Pengecer -->

                                        <td>
                                            <div class="text-center">
                                                <a href="<?php echo site_url('pengecer/pengecer_home/edit/' . $row->pterima_id) ?>">
                                                    <i class="fas fa-edit" style="color: #ffa500" title="Edit"></i></a>

                                                <a href="<?php echo site_url('pengecer/pengecer_home/del/' . $row->pterima_id) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?'">
                                                    <i class="fas fa-trash" style="color: #eb4255" title="Delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } else {
                                echo '<center><b>';
                                echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 0px"';
                                echo '<p>Maaf Tidak Ada Pupuk Masuk';
                                echo '</p>';
                                echo '</div>';
                                echo '</b></center>';
                            } ?>
                        </tbody>
                        <!-- <thead style="width: 100%;">
                            <tr>
                                <th align="left">Total Pupuk Masuk</th>
                                <th><?php
                                    // if ($jumlah_masuk > 0) {
                                    // foreach ($jumlah_masuk as $row) {
                                    // echo $row->jumlahp_msk;
                                    // }
                                    // } else {
                                    // echo '<center><b>';
                                    // echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 0px"';
                                    // echo '<p>0';
                                    // echo '</p>';
                                    // echo '</div>';
                                    // echo '</b></center>';
                                    // } 
                                    ?></th>
                            </tr>
                        </thead> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/datatables/exporter/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/datatables/exporter/css/buttons.dataTables.min.css">

    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/exporter/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                buttons: [
                    'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                responsive: true,
                paging: true,
                "processing": true, //Feature control the processing indicator.

            });
        });
    </script>