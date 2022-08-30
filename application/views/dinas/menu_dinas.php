<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dinas/dinas_home') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Pengguna</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Data User:</h6>
          <a class="dropdown-item" href="<?php echo base_url();?>dinas/distributors_d">Distributor</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dinas/pengecers_d">Pengecer Resmi</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dinas/poktans_d">Kempompok Tani</a>
        </div>
       </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Data Pupuk:</h6>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/pupuks">Data Pupuk</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dinas/pupukterima">Data Pupuk Masuk</a>
          <!-- <a class="dropdown-item" href="blank.html">Data Komoditas</a> -->
        </div>
       </li>
      
    </ul>