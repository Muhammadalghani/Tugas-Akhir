<div>
    <!-- <button type="button" class='btn btn-primary' onclick="javascript:history.back()">Kembali</button> -->
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-lg-8">
                <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
                    <i class="fas fa-table center"></i>
                    Data Pupuk Masuk
                    <?php
                    $bulan = @$_GET['bulan'];
                    if ($bulan == "1") {
                        echo "Januari";
                    } elseif ($bulan == "2") {
                        echo "Februari";
                    } elseif ($bulan == "3") {
                        echo "Maret";
                    } elseif ($bulan == "4") {
                        echo "April";
                    } elseif ($bulan == "5") {
                        echo "Mei";
                    } elseif ($bulan == "6") {
                        echo "Juni";
                    } elseif ($bulan == "7") {
                        echo "Juli";
                    } elseif ($bulan == "8") {
                        echo "Agustus";
                    } elseif ($bulan == "9") {
                        echo "September";
                    } elseif ($bulan == "10") {
                        echo "Oktober";
                    } elseif ($bulan == "11") {
                        echo "November";
                    } elseif ($bulan == "12") {
                        echo "Desember";
                    } ?>
                </h6>
            </div>
            <div class="col-md-4 offset-md-0">
                <div>
                    <div class="row">
                        <div class="col-8">
                            <!-- <p style="margin: 0 0 0px">Tahun:</p> -->
                            <select class="form-control" name="tahun" id="tahun" onchange="send_value(this.value);">
                                <option value="3">-Pilih Bulan-</option>
                                <?php
                                foreach ($get_bulan as $row) {
                                    echo "<option value='" . $row->bulan_id . "' >" . $row->nama_bulan . "</option>";
                                }
                                ?>
                            </select>
                            <script>
                                function send_value(val) {
                                    window.location = "<?php echo base_url("admin/masuk_k/by_bulan") ?>?bulan=" + val;
                                }
                            </script>
                        </div>
                        <!-- <div class="col">
                            <a class='btn btn-primary ' href="<?php echo site_url('admin/masuk_p/add') ?>">Tambah Data</a>
                        </div> -->
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
                    </tr>
                </thead>
                <tbody align="middle">
                    <!-- untuk konten -->

                    <?php
                    $No = 1;
                    if ($data > 0) {
                        foreach ($data as $d => $row) { ?>
                            <tr>
                                <td><?php echo $No++; ?></td> <!-- Nomor -->

                                <td><?php echo $row->nama_kecamatan; ?></td> <!-- untuk Nama Pengecer -->

                                <td><?php echo $row->nama_bulan; ?></td> <!-- untuk Nama Pengecer -->

                                <td><?php echo $row->nama_pupuk; ?></td> <!-- untuk Nama Pengecer -->

                                <td><?php echo $row->jumlah_terima; ?></td> <!-- untuk Nama Pengecer -->

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
                                    if ($jumlah_masuk > 0) {
                                        foreach ($jumlah_masuk as $row) {
                                            echo $row->jumlahp_msk;
                                        }
                                    } else {
                                        echo '<center><b>';
                                        echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 0px"';
                                        echo '<p>0';
                                        echo '</p>';
                                        echo '</div>';
                                        echo '</b></center>';
                                    } ?></th>
                            </tr>
                        </thead> -->
            </table>
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