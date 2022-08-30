<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- untuk web responsive -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Infromasi Manajemen Pupuk Bersubsidi</title>
	
								<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_login.css">
  	<script src="assets/js/jquery.min.js"></script>
  	<script src="assets/js/bootstrap.bundle.min.js"></script>

  	<style type="text/css">
  	body {
     
     background: url('assets/images/sawah.png');	  /*Letak Gambar Background*/
     background-size: cover;		   				         /*Tampilkan Background Secara Penuh*/
     background-attachment: fixed;	   				    /*Background Fixed (Tidak dapat di scroll)*/
     background-repeat: no-repeat;     				   /* Tambahkan baris berikut */
     background-position: center;               /* Center the image */
     background-size: 100% 100%;                   /* Resize the background image to cover the entire container */
  	},

    .container{
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  	</style>
  								<!-- CSS -->
    <!-- icon web -->
    <link rel="shortcut icon" href="<?php echo base_url();?>home_file/img/favicon.ico">
    <!-- icon web -->

</head>

	<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" style="padding-bottom: 0px">
            <h4 class="text-center col-sm" style="text-transform: uppercase;">
              <b>Simpudi</b>
            </h4>
            <h5 class="text-center col-sm">
              Dinas Pertanian Kabupaten Padang Pariaman
            </h5>
            <hr>
            <form method="POST" action="<?php echo base_url();?>login/getlogin">
              <div class="form-label-group">
                <input type="text" name ="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>

              <?php
                              $info = $this->session->flashdata('info');
                              if(!empty($info))
                              {
                                echo $info;
                              }

                              ?>

              </div>

              <!-- <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div> -->
                
              <button style="margin-bottom: 10px; border-radius: 50px" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
              
              <a href=" <?php echo base_url();?> "> 
              <button style="border-radius: 50px" class="btn btn-lg btn-primary btn-block text-uppercase" type="button" >Beranda</button>
              </a>
              <hr>
                <p style="text-align: center;" title="Fajar Andika TMB50"><b style="color: black"><a href="https://www.instagram.com/muhammad_alghani_/">Copyright © 2022</a></b></p>
              

              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> --> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>






