<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Center</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url();?>">Data Center</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
     <!--  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form> -->

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-12">
        <!-- <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <!-- <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            
            <?php if(isLoggedIn()):?>
              <a class="dropdown-item" href="<?php echo site_url('user/register');?>">Register</a>
            <?php endif; ?>

            <div class="dropdown-divider"></div>
            
            <?php if(isLoggedIn()):?>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            <?php else: ?>
              <a class="dropdown-item" href="<?php echo site_url('user/login');?>">Login</a>
            <?php endif; ?>

          </div>
        </li>
      </ul>

    </nav>

    <?php 
    $controller = $this->uri->segment(1);
    if ($controller == '') {
      $controller = 'datacenter';
    }
    function isActive($controller_name, $controller = ''){
      if ($controller_name == $controller) {
        return 'active';
      }
      return '';
    }
    ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

       

        <!-- <li class="nav-item <?= isActive('siterepeater', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeater' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Site Repeater</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeaterselter', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeaterselter' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Selter</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeatertower', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeatertower' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Tower</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeatergenset', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeatergenset' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Genset</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeaterups', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeaterups' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data UPS</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeaterbatere', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeaterbatere' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Batere</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeaterrak', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeaterrak' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Rak</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeaterpemeliharaan', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeaterpemeliharaan' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pemeliharaan</span>
          </a>
        </li>
        <li class="nav-item <?= isActive('siterepeaterkontak', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/siterepeaterkontak' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Kontak Person</span>
          </a>
        </li> -->




        <li class="nav-item <?= isActive('datacenter', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenter' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Center</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterbangunan', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterbangunan' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Bangunan</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterac', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterac' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data AC</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacentercctv', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacentercctv' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Kamera CCTV</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterdvr', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterdvr' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data DVR</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacentergenset', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacentergenset' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Genset</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterups', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterups' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data UPS</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterbatere', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterbatere' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Batere</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterrak', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterrak' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Rak</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterpemeliharaan', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterpemeliharaan' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pemeliharaan</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('datacenterkontak', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/datacenterkontak' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Kontak Person</span>
          </a>
        </li>

      
        <!-- <li class="nav-item <?= isActive('dsp', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/dsp' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>DSP Personil</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('profile', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/profile' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Profile Personil</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('pirantilunak', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/pirantilunak' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Piranti Lunak</span>
          </a>
        </li> -->


        <!-- <li class="nav-item <?= isActive('rptconvensional', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/rptconvensional' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>RPT Convensional</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('rpttrunking', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/rpttrunking' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>RPT Trunking</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('radiofixed', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/radiofixed' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Radio Fixed</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('radiomobil', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/radiomobil' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Radio Mobil</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('radioht', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/radioht' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Radio HT</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('jaringandata', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/jaringandata' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Jaringan Data</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('satelitvsat', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/satelitvsat' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Satelit Vsat</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('satelitflyaway', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/satelitflyaway' ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Satelit Flyaway</span>
          </a>
        </li>
      
        <li class="nav-item <?= isActive('vpn', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/vpn'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>VPN-IP</span>
          </a>
        </li>

         <li class="nav-item <?= isActive('internet', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/internet'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Internet</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('telepon', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/telepon'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Telepon</span>
          </a>
        </li> -->

        <!-- <li class="nav-item <?= isActive('server', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/server'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Server</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('storage', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/storage'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Storage</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('scurity', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/scurity'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Scurity</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('aplikasi', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/aplikasi'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Aplikasi</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('komputer', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/komputer'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Komputer/Laptop</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('gdg', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/gdg'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>GDG Repeater/Mobile/HT</span>
          </a>
        </li>
      
        <li class="nav-item <?= isActive('antena', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/antena'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Antena</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('kabel', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/kabel'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Kabel</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('batere', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/batere'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Batere</span>
          </a>
        </li>

        <li class="nav-item <?= isActive('jardata', $controller)?>">
          <a class="nav-link" href="<?php echo base_url().'index.php/jardata'?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Jaringan Data</span>
          </a>
        </li> -->

      </ul>

   <div id="content-wrapper">

    <div class="container-fluid">
    
