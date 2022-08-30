  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
      <div class="col-lg-8">
      <h6 class="m-0 font-weight-bold text-primary" style="padding-top: 10px">
      <i class="fas fa-table center" ></i>
      Data Rencana Definitif Kelompok Kerja (RDKK) 
      <?php 
	      if ($data>0) {
	        foreach ($data as $row) { ?>
	        <?php echo $row->nama_poktan; ?>
	       
	     <?php } ?>
	     <?php   } else {
	        
	      }?> 
      <?php 
    $tahun = @$_GET['tahun'];
    if($tahun == "1"){
      echo "Tahun 2020";
    } elseif($tahun == "2"){
      echo "Tahun 2021";
    } elseif($tahun == "3"){
      echo "Tahun 2022";
    } ?>
      </h6>
    </div>
      <div class="col-md-4 offset-md-0">
    <div>
      <div class="row">
      <div class="col-6">
          <!-- <p style="margin: 0 0 0px">Tahun:</p> -->
          <select class="form-control" name="tahun" id="tahun" onchange="send_value(this.value);">
            <option value="3">-Pilih Tahun-</option>
              <?php
              foreach($get_tahun as $row){
                echo "<option value='".$row->tahun_id."' >".$row->nama_tahun."</option>";
              }
              ?>
          </select> 
        <script>
          function send_value(val)
           {
                window.location = "<?php echo base_url("poktan/poktan_home/by_tahun")?>?tahun="+val;
           }  
        </script>
        </div>
        <div class="col">
          <a class='btn btn-primary ' href="<?php echo site_url('poktan/poktan_home/add')?>">Tambah Data</a>
        </div>
        </div>
    </div>
    </div>
  </div>
</div>

    <div class="card-body" style="padding: 5px">
      <div class="table-responsive">
        <table id="example" class="table table-striped nowrap"  width="100%" cellspacing="0" style="font-size: 12px; border-top: 1px solid #fffff">
        <thead align="middle" >
          <tr>
            <th scope="col" rowspan="3" >No</th>
            <th scope="col" rowspan="3" >Kelompok Tani</th>
            <th scope="col" rowspan="2" colspan="3">Luas Tanam (Ha)</th>
            <th scope="col" colspan="15">Kebutuhan Pupuk Bersubsidi (Kg)</th>
            <th scope="col" rowspan="3" >Aksi</th>
          </tr>
          <tr>
            <th scope="col" colspan="3">Urea</th>
            <th scope="col" colspan="3">Sp-36</th>
            <th scope="col" colspan="3">ZA</th>
            <th scope="col" colspan="3">NPK</th>
            <th scope="col" colspan="3">ORGANIK</th>
            
          </tr> 
          <tr>
            <th>I</th>    <!-- >>Luas Tanam -->
            <th>II</th>
            <th>III</th>

            <th>MT&nbsp;I</th>    <!-- >>Urea -->
            <th>MT&nbsp;II</th>
            <th>MT&nbsp;III</th>

            <th>MT&nbsp;I</th>    <!-- SP36 -->
            <th>MT&nbsp;II</th>
            <th>MT&nbsp;III</th>

            <th>MT&nbsp;I</th>    <!-- ZA -->
            <th>MT&nbsp;II</th>
            <th>MT&nbsp;III</th>

            <th>MT&nbsp;I</th>    <!-- NPK -->
            <th>MT&nbsp;II</th>
            <th>MT&nbsp;III</th>

            <th>MT&nbsp;I</th>    <!-- ORGANIK -->
            <th>MT&nbsp;II</th>
            <th>MT&nbsp;III</th>
          
          </tr>

        </thead>
        <tbody>
          <tr>
          <?php 
            $No = 1;
            if ($data>0) {
            foreach ($data as $d => $row) {?>

            <td><?php echo $No++; ?></td>        <!-- >> Nomor     -->
            <td><?php echo $row->nama_poktan; ?></td> <!-- >> Nama Kecamatan -->

            <td><?php echo $row->luas_tanam; ?></td>   <!-- >>Luas Tanam 1-->
            <td><?php echo $row->luas_tanam2; ?></td>   <!-- >>Luas Tanam 2-->
            <td><?php echo $row->luas_tanam3; ?></td>   <!-- >>Luas Tanam 3-->

            <td><?php echo $row->urea1; ?></td>   <!-- >>Urea MT 1 -->
            <td><?php echo $row->urea2; ?></td>   <!-- >>Urea MT 2 -->
            <td><?php echo $row->urea3; ?></td>   <!-- >>Urea MT 3 -->

            <td><?php echo $row->sp1; ?></td>   <!-- >>SP36 Mt1 -->
            <td><?php echo $row->sp2; ?></td>   <!-- >>SP36 MT2 -->
            <td><?php echo $row->sp3; ?></td>   <!-- >>SP36 MT 3 -->

            <td><?php echo $row->za1; ?></td>   <!-- >>ZA MT 1 -->
            <td><?php echo $row->za2; ?></td>   <!--MT&nbsp;III >>ZA MT 2 -->
            <td><?php echo $row->za3; ?></td>   <!-- >>ZA MT 3 -->

            <td><?php echo $row->npk1; ?></td>    <!-- >>NPK MT 1 -->
            <td><?php echo $row->npk2; ?></td>    <!-- >>NPK MT 2 -->
            <td><?php echo $row->npk3; ?></td>    <!-- >>NPK MT 3 -->

            <td><?php echo $row->organik1; ?></td>  <!-- >>ORGANIK MT 1 -->
            <td><?php echo $row->organik2; ?></td>  <!-- >>ORGANIK MT 2 -->
            <td><?php echo $row->organik3; ?></td>  <!-- >>ORGANIK MT 3 -->

            <td>
              <div class="text-center">
                <a href="<?php echo site_url('poktan/poktan_home/edit/'.$row->butuhk_id)?>">
                <i class="fas fa-edit" style="color: #03ad30" title="Edit"></i></a>&nbsp
                
                <a href="<?php echo site_url('poktan/poktan_home/del/'.$row->butuhk_id)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?'">
                <i class="fas fa-trash" style="color: #ff6b6b" title="Delete"></i></a>

              </div>
            </td>   <!-- >>Action -->
          </tr>                  
            <?php 
          } ?>
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


      <!-- End of Main Content -->

<link rel="stylesheet" href="<?php echo base_url();?>vendor/datatables/exporter/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>vendor/datatables/exporter/css/buttons.dataTables.min.css">

<script src="<?php echo base_url();?>vendor/datatables/exporter/jquery-3.3.1.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/jszip.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>vendor/datatables/exporter/buttons.print.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        responsive: true,
        paging: true,
        "processing": true, //Feature control the processing indicator.
        
    } );
} );
</script>