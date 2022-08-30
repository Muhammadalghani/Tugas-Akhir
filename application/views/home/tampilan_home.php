<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $header ?></title>
  <!-- <script language='JavaScript'>
    var txt="<?= $header ?>";
    var speed=100;
    var refresh=null;
    function action() { document.title=txt;
      txt=txt.substring(1,txt.length)+txt.charAt(0);
      refresh=setTimeout("action()",speed);}action();
    </script> -->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/isotope.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- icon web -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>home_file/img/favicon.ico">
  <!-- icon web -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/bootstrap-theme.css">1 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/responsive-slider.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/style.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css">2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/css/font-awesome.min.css">
  <!-- skin -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/skin/default.css">
  <!-- dropdown -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/dropdown/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>home_file/dropdown/css/bootstrap-dropdownhover.min.css">

  <!-- =======================================================
    Theme Name: Green
    Theme URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body style="color: #fffff">
  <?php $this->load->view('home/menu_home'); ?>
  <?php $this->load->view($content); ?>
  <section id="footer" class="section footer">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header" style="color: #ffffff">
            <h2 class="section-heading animated" data-animation="bounceInUp" style="color: #ffffff">Layanan Pengguna:</h2>
            <p>Untuk informasi lebih lanjut dan saran. Dapat menghubungi salah satu media kami:</p>
          </div>
        </div>
      </div>
      <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="https://wa.wizard.id/496d18" class="icoRss" title="Telepon"><i class="fa fa-phone"></i></a></li>
            <li><a href="mailto:ghanyjenyeh@gmail.com" class="icoFacebook" title="Email"><i class="fa fa-at"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/muhammad_alghani_/" class="icoGoogle" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/muhammad-al-ghani-006288203/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p style="color: #ffffff">&copy; 2022 Sistem Informasi Manajemen Pupuk Bersubsidi oleh <a href="https://www.instagram.com/muhammad_alghani_/">Muhammad Al Ghani</a>.<br>Teknik Sistem dan Informatika Pertanian, Departemen Teknik Mesin dan Biosistem<br>- IPB -</br></p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
          -->
            <!--  Designed by <a href="#">BootstrapMade</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo base_url(); ?>home_file/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.isotope.min.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/skrollr.min.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.localScroll.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/stellar.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/responsive-slider.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/grid.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/main.js"></script>
  <script src="<?php echo base_url(); ?>home_file/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="<?php echo base_url(); ?>home_file/contactform/contactform.js"></script>
  <!-- dropdown -->
  <script src="<?php echo base_url(); ?>home_file/dropdown/js/bootstrap-dropdownhover.min.js"></script>
</body>

</html>