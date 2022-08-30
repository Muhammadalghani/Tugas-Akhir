<style>
  #manu ul li{
    /*transition: 0.3s ease;*/
    /*background: #fffff;*/
    color: #ffffff;
    /*font-size: 20px;*/
    text-decoration: none;
    /*border-top: 2px solid #fffff;*/
    /*border-bottom: 2px solid #fffff;*/
  }
  #manu ul li:hover{
    border-top: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff;
    padding: 1px 0;
  }

</style>

<div class="header">
      <section id="header" class="appear">

        <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="fa fa-bars color-white"></span>
            </button>
            <h1>
              <a class="navbar-brand" class="scrollup" href="<?= base_url(); ?>" data-0="line-height:90px;" data-300="line-height:50px;"><strong>SIMPUDI</strong></a>
            </h1>
          </div>
      <div class="navbar-collapse collapse" id="manu" data-hover="dropdown" data-animations="fadeInLeft  fadeInLeft  fadeInLeft  fadeInLeft ">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="<?= base_url(); ?>homes/map#section-about">Beranda</a></li>
          <li class="dropdown"><a href="<?= base_url(); ?>homes/map#section-about">Luas Tanam</a>
            <!-- <ul class="dropdown-menu">
              <li><a href="">Histogram & Pie</a></li>
              <li><a href="">Peta Digital</a></li>
            </ul> -->
          </li>
          <li class="dropdown"><a href="<?= base_url(); ?>homes/mapb#section-about">Kebutuhan Pupuk</a>
          <!-- <ul class="dropdown-menu">
              <li><a href="">Histogram & Pie</a></li>
              <li><a href="">Peta Digital</a></li>
            </ul> -->
        </li>
        <li class="dropdown"><a href="<?= base_url(); ?>homes/pupukterima_p#section-about">Pupuk Masuk</a>
          </li>
          <!-- <li><a href="#"></a></li> -->
          <!-- <li><a href="#line-pricing">Pupuk Subsidi</a></li> -->
          <!-- <li><a href="#team">Referensi</a></li> -->
          <!-- <li><a href="#section-works">Gallery</a></li> -->
          <!-- <li><a href="#section-contact">Contact</a></li> -->
          <!-- <li><a href="<?php echo base_url();?>Auth">Pengadaan Pupuk</a></li> -->
          <li><a href="<?php echo base_url();?>login">Login</a></li>
        </ul>
      </div>
          <!--/.navbar-collapse -->
        </div>


      </section>
    </div>