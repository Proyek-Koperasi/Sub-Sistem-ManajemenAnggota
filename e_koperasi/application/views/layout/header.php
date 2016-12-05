<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E - Koperasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <script type="text/javascript" src="<?=base_url();?>ProvKota/jquery.js"></script>
  
  <script type="text/javascript">
  $("document").ready(function(){
    
      $("#IdProvinsi").change(function(){
        var IdProvinsi = $("#IdProvinsi").val();
        $.ajax({
          url: "<?=base_url();?>ProvKota/ambilkota.php",
          data: "IdProvinsi="+IdProvinsi,
          cache: false,
          success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#IdKota").html(msg);
          }
        });
      });
    });
  </script>
                 


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>Halamananggota" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E</b>-Koperasi</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <?php if ($this->session->userdata('level_admin')=='admin') { ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_admin'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>welcome/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php 
            }elseif($this->session->userdata('level')=='anggota'){
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_ang'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php
                  foreach ($views as $Array ) {   
                  //print_r($Array);
                ?>
                <img src="<?=base_url().$Array['pas_foto_ang']?>" class="img-circle" alt="User Image" />
                <p>
                  <?=$Array['nama_ang']?>
                  <small>Member since <?=$Array['tgl_daftar']?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url() ?>Halamananggota" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>welcome/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
              <?php } ?>
          </li>
          <?php
            }
              else{
                // echo "";?>
          <li class="">
            <a href="<?=base_url();?>index.php/Welcome/Login" class="" data-toggle="">
              <span class="">Login</span>
            </a>
          </li>
          <li class="">
            <a href="<?=base_url();?>index.php/Welcome/RegisterAnggota" class="" data-toggle="">
              <span class="">Register</span>
            </a>
          </li>
                <?php
            }
          ?>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>template/img/koperasi.png" class="img-circle" alt="User Image"></div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama_admin'); ?></p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          
          <?php if ($this->session->userdata('level_admin')=='admin') { ?>
            <a href="#">
            <i class="fa fa-users"></i> <span>Manajemen Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>c_admin/daftar_anggota"><i class="fa fa-circle-o"></i>  Daftar Anggota</a></li>
            <li><a href="<?php echo base_url() ?>c_admin/a_view_anggota"><i class="fa fa-circle-o"></i>  List Anggota</a></li>
            <li><a href="<?php echo base_url() ?>c_admin/a_view_anggota_nonAktif"><i class="fa fa-circle-o"></i> List Anggota Non Aktif</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-md"></i> <span>Manajemen Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>c_admin/daftar_supplier"><i class="fa fa-circle-o"></i>  Input Data Supplier</a></li>
            <li><a href="<?php echo base_url() ?>c_admin/a_view_supplier"><i class="fa fa-circle-o"></i>  List Data Supplier</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Manajemen Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>c_admin/daftar_pegawai"><i class="fa fa-circle-o"></i>  Input Data Pegawai</a></li>
            <li><a href="<?php echo base_url() ?>c_admin/a_view_pegawai"><i class="fa fa-circle-o"></i>  List Data Pegawai</a></li>
          </ul>
        </li>
        <li class="treeview">
          <?php } elseif ($this->session->userdata('level')=='anggota') { ?>
            <a href="#">
            <i class="fa fa-users"></i> <span>Manajemen Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>Halamananggota/hal_dtanggota"><i class="fa fa-circle-o"></i>  Data Diri</a></li>
            <li><a href="<?php echo base_url() ?>Halamananggota/updatePassword"><i class="fa fa-circle-o"></i>Update Data</li>
          <?php
            }
              else{
                echo "";
            }
          ?>
          </ul>
          </li>
          <?php if ($this->session->userdata('level')=='anggota') { ?>
            <li class="treeview">
              <a href="<?php echo base_url() ?>Halamananggota/undurdiri">
                <i class="fa fa-users"></i> <span>Pengunduran Diri</span>
              </a>
            </li>
          <?php
            }
              else{
                echo "";
            }
          ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>