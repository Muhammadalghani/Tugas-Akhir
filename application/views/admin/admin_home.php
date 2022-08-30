<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$header;?></title>

   <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet"> -->


  <!-- icon web -->
  <link rel="shortcut icon" href="<?php echo base_url();?>home_file/img/favicon.ico">
  <!-- icon web -->
      
  <!-- FontAwesome 4.3.0 -->
<!--   <link href="<?php echo base_url();?>plugins/Font-Awesome-master/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
  <!-- Ionicons 2.0.0 -->
  <!-- <link href="<?php echo base_url();?>plugins/ionicons-master/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->    
  <!-- Theme style -->
  <!-- <link href="<?php echo base_url();?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link href="<?php echo base_url();?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
  <!-- iCheck -->
  <!-- <link href="<?php echo base_url();?>plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" /> -->
  <!-- Morris chart -->
  <!-- <link href="<?php echo base_url();?>plugins/morris/morris.css" rel="stylesheet" type="text/css" /> -->
  <!-- jvectormap -->
<!--   <link href="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> -->

<!-- <link href="<?php echo base_url();?>plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" /> -->
</head>

<body id="page-top" style="color: #000000">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('admin/menu_admin'); ?>
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      <!-- <li class="nav-item dropdown no-arrow mx-1 hide">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          Counter - Alerts
          <span class="badge badge-danger badge-counter">3+</span>
        </a>
        Dropdown - Alerts
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            Alerts Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">December 12, 2019</div>
              <span class="font-weight-bold">A new monthly report is ready to download!</span>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-success">
                <i class="fas fa-donate text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">December 7, 2019</div>
              $290.29 has been deposited into your account!
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-warning">
                <i class="fas fa-exclamation-triangle text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">December 2, 2019</div>
              Spending Alert: We've noticed unusually high spending for your account.
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
      </li> -->

      <!-- Nav Item - Messages -->
      <!-- <li class="nav-item dropdown no-arrow mx-1 hide">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          Counter - Messages
          <span class="badge badge-danger badge-counter">7</span>
        </a>
        Dropdown - Messages
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
              <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
              <div class="status-indicator"></div>
            </div>
            <div>
              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
              <div class="small text-gray-500">Jae Chun · 1d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
              <div class="status-indicator bg-warning"></div>
            </div>
            <div>
              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div>
              <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
              <div class="small text-gray-500">Chicken the Dog · 2w</div>
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
      </li> -->

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user ?></span>
          <i class="fas fa-user-tie fa-xl fa-fw mr-2 text-gray-400"></i>
          <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <!-- <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a> -->
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- End of Topbar -->

  <!-- Breadcrumbs-->
  <div class="breadcrumbs ace-save-state" id="breadcrumbs" style="padding-left: 5px; padding-right: 5px">
      <ul class="breadcrumb" style="margin-bottom: 2px; padding-bottom: 7px; padding-top: 7px">
        <li>
          <i class="ace-icon fa fa-home home-icon"></i>
          <a href="#"><?php echo $judul; ?></a>
          <span class="divider">
            <i class="fas fa-angle-right"></i>
          </span>
        </li>

        <li class="active">&nbsp<?php echo $sub_judul; ?></li>
      </ul>
  </div>      

        <!-- Begin Page Content -->
        <div class="container-fluid" style="padding: 5px">
          <?php  $this->load->view($content);?>
        </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white" style="padding-top: 5px;padding-bottom: 5px">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span style="line-height: 1.5; color: black;"><strong>Copyright 2022 </strong>Sistem Informasi Manajemen Pupuk Bersubsidi oleh<a href="https://www.instagram.com/muhammad_alghani_/"> Muhammad Al Ghani</a>.<br>Teknik Sistem dan Informatika Pertanian, Departemen Teknik Mesin dan Biosistem - IPB.</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" jika anda benar ingin meninggalkan halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url();?>login/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->

  <!-- <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <!-- <script src="<?php echo base_url();?>vendor/chart.js/Chart.min.js"></script> -->
  <!-- <script src="<?php echo base_url();?>vendor/datatables/jquery.dataTables.js"></script> -->
  <!-- <script src="<?php echo base_url();?>vendor/datatables/dataTables.bootstrap4.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> -->

  <!-- Demo scripts for this page-->
  <!-- <script src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script> -->
  <!--   <script src="<?php echo base_url();?>assets/js/demo/chart-area-demo.js"></script> -->

<!-- <script src="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script> -->
<!-- <script src="<?php echo base_url();?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script> -->


 
  <!-- Bootstrap 3.3.2 JS -->
  
<!--   Morris.js charts
<script src="<?php echo base_url();?>plugins/jQuery/raphael-min.js"></script>
<script src="<?php echo base_url();?>plugins/morris/morris.min.js" type="text/javascript"></script>
Sparkline
<script src="<?php echo base_url();?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
jvectormap
<script src="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
jQuery Knob Chart
<script src="<?php echo base_url();?>plugins/knob/jquery.knob.js" type="text/javascript"></script>
daterangepicker


iCheck
<script src="<?php echo base_url();?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
Slimscroll
<script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
FastClick
<script src='<?php echo base_url();?>plugins/fastclick/fastclick.min.js'></script>
 -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->



</body>

</html>
