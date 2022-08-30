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
                <i class="ace-icon fa fa-check green"></i>
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
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kelompok Tani</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php echo $total_poktan; ?>
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
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Gapoktan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php echo $total_gapoktan; ?>

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
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Desa</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                      <?php echo $total_desa; ?>

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
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Data Masuk</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <!-- <?php echo $total_kec; ?> -->
                      <?php echo $total_datamasuk; ?> / <?php echo $total_poktan; ?>
                    </div>
                  </div>
                  &nbsp;
                  <div class="col" hidden="">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-tasks fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row">
          <div class="col-lg-9">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
              <i class="fas fa-chart-line center"></i>
              Grafik Sebaran Luas Tanam Kabupaten Padang Pariaman
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
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-2">
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
                window.location = "<?php echo base_url("admin/admin_home/by_tahun") ?>?tahun=" + val;
              }
            </script>

            <!-- <form method="get" action="<?php echo base_url("admin/admin_home/by_tahun") ?>">
         <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
  <select class="form-control" name="tahun" id="tahun">
    <option value="3">-Pilih Tahun-</option>
    <?php
    foreach ($get_tahun as $row) {
      echo "<option value='" . $row->tahun_id . "' >" . $row->nama_tahun . "</option>";
    }
    ?>
  </select></div> -->
            <!--  <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
    <input type="submit" class="btn btn-success btn-xs" value="Cari"></div>  -->
          </div>

        </div>
      </div>

      <div class="card-body" style="padding: 5px">


        <!-- Letak Peta dan Grafik nantinya -->
        <div>
          <?php
          if ($data_grafik > 0) {
            foreach ($data_grafik as $result) {         /* Mengambil query report*/
              $nama[]  = (string)$result->nama_kecamatan; //ambil nama Kecamatan
              $jumlah[]  = (float) $result->luas_tanam;
              $jumlah2[] = (float) $result->luas_tanam2;
              $jumlah3[] = (float) $result->luas_tanam3;
              $total[] = (float) $result->luas_tanam + $result->luas_tanam2 + $result->luas_tanam3;
              $tahun   = $result->nama_tahun; //ambil nilai
              // $data[] = [$nama, $jumlah];
            }
          } else {
            echo '<center><b>';
            echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
            echo '<p>Maaf Tidak Ada Informasi Penanaman Padi </p><p>di Kabupaten Padang Pariaman!';
            echo '</p>';
            echo '   </div>';
            echo '  </b></center>';
          }
          /* end mengambil query*/
          ?>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <div>
              <div id="data_luas" style="min-width: 310px; max-width: 100%; height: 470px; margin: 0 auto"></div>
            </div>
            <script src="<?= base_url() ?>assets/highcharts/highcharts.js"></script>
            <script src="<?= base_url() ?>assets/highcharts/exporting.js"></script>
            <script src="<?= base_url() ?>assets/highcharts/export-data.js"></script>
            <script>
              Highcharts.chart('data_luas', {
                chart: {
                  type: 'column'
                },
                title: {
                  text: 'Jumlah Luas Tanam Setiap Masa Tanam dalam Kecamatan'
                },
                subtitle: {
                  text: 'Source: <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahana Pangan Kabupaten Padang Pariaman</a>'
                },
                xAxis: {
                  categories: <?php echo json_encode($nama); ?>,
                  title: {
                    text: null
                  }
                },
                yAxis: {
                  min: 0,
                  title: {
                    text: 'Luas Tanam (Ha)',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                },
                tooltip: {
                  headerFormat: '<span style="font-size:10px">{point.key} :</span><table>',
                  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name} : </td>' +
                    '<td style="padding:0"><b> {point.y:.1f} Ha</b></td></tr>',
                  footerFormat: '</table>',
                  shared: true,
                  useHTML: true
                },
                plotOptions: {
                  bar: {
                    dataLabels: {
                      enabled: true
                    }
                  },
                  series: {
                    colorByPoint: true
                  }
                },
                credits: {
                  enabled: false
                },
                // legend: {
                //   layout: 'vertical',
                //   align: 'right',
                //   verticalAlign: 'top',
                //   x: -40,
                //   y: 80,
                //   floating: true,
                //   borderWidth: 1,
                //   backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                //   shadow: true
                // },
                credits: {
                  enabled: false
                },

                series: [{
                  name: 'Masa Tanam 1',
                  data: <?php echo json_encode($jumlah); ?>
                }, {
                  name: 'Masa Tanam 2',
                  data: <?php echo json_encode($jumlah2); ?>
                }, {
                  name: 'Masa Tanam 3',
                  data: <?php echo json_encode($jumlah3); ?>
                }]
              });
            </script>
          </div>

          <!-- Bar Chart -->
          <!-- Pie Chart -->

          <div class="col-lg-5">
            <div>
              <div id="data_pie" style="min-width: 310px; max-width: 100%; height: 470px; margin: 0 auto"></div>
            </div>
            <script>
              Highcharts.chart('data_pie', {
                chart: {
                  plotBackgroundColor: null,
                  plotBorderWidth: null,
                  plotShadow: false,
                  type: 'pie'
                },
                title: {
                  text: 'Presentase Luas Tanam Tiap Kecamatan'
                },
                subtitle: {
                  text: 'Source: <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Kabupaten Padang Pariaman</a>'
                },
                xAxis: {
                  categories: <?php echo json_encode($nama); ?>,
                  title: {
                    text: null
                  }
                },
                yAxis: {
                  min: 0,
                  title: {
                    text: 'Luas Tanam (Ha)',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                },
                tooltip: {
                  formatter: function() {
                    var sliceIndex = this.point.index;
                    var sliceName = this.series.chart.axes[0].categories[sliceIndex];
                    this.point.name = sliceName;
                    return 'Jumlah Luas Lahan <b>' + sliceName +
                      '</b> adalah <b>' + this.y + '</b> ' + 'Ha';
                  },
                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
                  pointFormat: '{series.name}: <b>{point.y}</b> ({point.percentage:.1f}%)<br/>'
                },
                plotOptions: {
                  pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                      enabled: true,
                      format: '{point.percentage:,.2f} %' //untuk menampilkan dalam jumlah
                      //format: '<b>{point.name}</b>: {point.percentage:.1f} %', //untuk menampilkan dalam persen
                    },
                    showInLegend: true
                  },
                  series: {
                    colorByPoint: true
                  }
                },
                legend: {
                  enabled: true,
                  labelFormatter: function() {
                    var legendIndex = this.index;
                    var legendName = this.series.chart.axes[0].categories[legendIndex];

                    return legendName;
                  }

                },
                credits: {
                  enabled: false
                },

                series: [{
                  data: <?php echo json_encode($total); ?>

                }]
              });
            </script>
          </div>
        </div>

      </div>
    </div>
    <!-- /.container-fluid -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row">
          <div class="col-lg-9">
            <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
              <i class="fas fa-table center"></i>
              Data Rekapitulasi RDKK (Rencana Definitif Kelompok Kerja) Tingkat Kabupaten
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
          <div class="col-md-2 offset-md-1">
            <div>
              <div class="row">
                <!-- <div class="col-6">
          <p style="margin: 0 0 0px">Tahun:</p>
          <select class="form-control" name="tahun" id="tahun" onchange="send_value(this.value);">
            <option value="3">-Pilih Tahun-</option>
              <?php
              foreach ($get_tahun as $row) {
                echo "<option value='" . $row->tahun_id . "' >" . $row->nama_tahun . "</option>";
              }
              ?>
          </select> 
        <script>
          function send_value(val)
           {
                window.location = "<?php echo base_url("admin/butuh_p/by_tahun") ?>?tahun="+val;
           }  
        </script>
        </div> -->
                <div class="col">
                  <a class='btn btn-primary ' href="<?php echo site_url('admin/butuh_p/add') ?>">Tambah Data</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body" style="padding: 5px">
        <div class="table-responsive">
          <table id="example" class="table table-striped nowrap" width="100%" cellspacing="0" style="font-size: 12px; border-top: 1px solid #ffffff">
            <thead align="middle">
              <tr>
                <th scope="col" rowspan="3">No</th>
                <th scope="col" rowspan="3">Kelompok Tani</th>
                <th scope="col" rowspan="2" colspan="3">Luas Tanam(Ha)</th>
                <th scope="col" colspan="15">Kebutuhan Pupuk Bersubsidi (Kg)</th>
                <th scope="col" rowspan="3">Aksi</th>
              </tr>
              <tr>
                <th scope="col" colspan="3">Urea</th>
                <th scope="col" colspan="3">Sp-36</th>
                <th scope="col" colspan="3">ZA</th>
                <th scope="col" colspan="3">NPK</th>
                <th scope="col" colspan="3">ORGANIK</th>

              </tr>
              <tr>
                <th>I</th> <!-- >>Luas Tanam -->
                <th>II</th>
                <th>III</th>

                <th>MT&nbsp;I</th> <!-- >>Urea -->
                <th>MT&nbsp;II</th>
                <th>MT&nbsp;III</th>

                <th>MT&nbsp;I</th> <!-- SP36 -->
                <th>MT&nbsp;II</th>
                <th>MT&nbsp;III</th>

                <th>MT&nbsp;I</th> <!-- ZA -->
                <th>MT&nbsp;II</th>
                <th>MT&nbsp;III</th>

                <th>MT&nbsp;I</th> <!-- NPK -->
                <th>MT&nbsp;II</th>
                <th>MT&nbsp;III</th>

                <th>MT&nbsp;I</th> <!-- ORGANIK -->
                <th>MT&nbsp;II</th>
                <th>MT&nbsp;III</th>

              </tr>

            </thead>
            <tbody>
              <tr>
                <?php
                $No = 1;
                if ($data > 0) {
                  foreach ($data as $d => $row) { ?>

                    <td><?php echo $No++; ?></td> <!-- >> Nomor     -->
                    <td><?php echo $row->nama_poktan; ?></td> <!-- >> Nama Kecamatan -->

                    <td><?php echo $row->luas_tanam; ?></td> <!-- >>Luas Tanam 1-->
                    <td><?php echo $row->luas_tanam2; ?></td> <!-- >>Luas Tanam 2-->
                    <td><?php echo $row->luas_tanam3; ?></td> <!-- >>Luas Tanam 3-->

                    <td><?php echo $row->urea1; ?></td> <!-- >>Urea MT 1 -->
                    <td><?php echo $row->urea2; ?></td> <!-- >>Urea MT 2 -->
                    <td><?php echo $row->urea3; ?></td> <!-- >>Urea MT 3 -->

                    <td><?php echo $row->sp1; ?></td> <!-- >>SP36 Mt1 -->
                    <td><?php echo $row->sp2; ?></td> <!-- >>SP36 MT2 -->
                    <td><?php echo $row->sp3; ?></td> <!-- >>SP36 MT 3 -->

                    <td><?php echo $row->za1; ?></td> <!-- >>ZA MT 1 -->
                    <td><?php echo $row->za2; ?></td>
                    <!--MT&nbsp;III >>ZA MT 2 -->
                    <td><?php echo $row->za3; ?></td> <!-- >>ZA MT 3 -->

                    <td><?php echo $row->npk1; ?></td> <!-- >>NPK MT 1 -->
                    <td><?php echo $row->npk2; ?></td> <!-- >>NPK MT 2 -->
                    <td><?php echo $row->npk3; ?></td> <!-- >>NPK MT 3 -->

                    <td><?php echo $row->organik1; ?></td> <!-- >>ORGANIK MT 1 -->
                    <td><?php echo $row->organik2; ?></td> <!-- >>ORGANIK MT 2 -->
                    <td><?php echo $row->organik3; ?></td> <!-- >>ORGANIK MT 3 -->

                    <td>
                      <div class="text-center">
                        <a href="<?php echo site_url('admin/butuh_p/edit/' . $row->butuhk_id) ?>">
                          <i class="fas fa-edit" style="color: #03ad30" title="Edit"></i></a>&nbsp

                        <a href="<?php echo site_url('admin/butuh_p/del/' . $row->butuhk_id) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?'">
                          <i class="fas fa-trash" style="color: #ff6b6b" title="Delete"></i></a>

                      </div>
                    </td> <!-- >>Action -->
              </tr>
            <?php  } ?>
          <?php } else {
                  echo '<center><b>';
                  echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 0px"';
                  echo '<p>Maaf Tidak Ada Informasi Kebutuhan Pupuk!';
                  echo '</p>';
                  echo '</div>';
                  echo '</b></center>';
                }  ?>
            </tbody>
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