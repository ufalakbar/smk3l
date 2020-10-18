<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo config_web('nameweb') ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url('uploads/img/'.config_web('icon')) ?>" rel="shortcut icon">
  <!-- Bootstrap 3.3.7 -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
  <!-- Theme style -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/skins/_all-skins.min.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')?>"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')?>"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboardc') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo config_web('nameweb') ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
<!-- 
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
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
          <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('NAME'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li class="<?php if (isset($active_dashboard)) { echo $active_dashboard; } ?>">
          <a href="<?php echo base_url('dashboardc')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview <?php if (isset($active_pengaturan)) { echo $active_pengaturan; } ?>">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('pengaturanc/umum')?>"><i class="fa fa-circle-o"></i>
                Pengaturan Umum
              </a>
              <a href="<?php echo base_url('pengaturanc/logo')?>"><i class="fa fa-circle-o"></i>
                Logo
              </a>
              <a href="<?php echo base_url('pengaturanc/icon')?>"><i class="fa fa-circle-o"></i>
                Icon
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview <?php if (isset($active_user)) { echo $active_user; } ?>">
          <a href="#">
            <i class="fa fa-users"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('userc/data_admin')?>"><i class="fa fa-circle-o"></i>
                Admin
              </a>
              <a href="<?php echo base_url('userc/data_pengguna')?>"><i class="fa fa-circle-o"></i>
                Karyawan
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if (isset($active_berita)) { echo $active_berita; } ?>">
          <a href="#">
            <i class="fa fa-list"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('beritac/data_berita')?>"><i class="fa fa-circle-o"></i>
                Daftar Berita
              </a>
              <a href="<?php echo base_url('beritac/manage_data_berita')?>"><i class="fa fa-circle-o"></i>
                Buat Berita
              </a>
              <a href="<?php echo base_url('beritac/kategori_berita')?>"><i class="fa fa-circle-o"></i>
                Kategori
              </a>
            </li>
          </ul>
        </li>
        
        
        <li class="treeview <?php if (isset($active_dokumen)) { echo $active_dokumen; } ?>">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Dokumen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('dokumenc/data_dokumen')?>"><i class="fa fa-circle-o"></i>
                Daftar Dokumen
              </a>
              <a href="<?php echo base_url('dokumenc/manage_data_dokumen')?>"><i class="fa fa-circle-o"></i>
                Buat Dokumen
              </a>
              <a href="<?php echo base_url('dokumenc/kategori_dokumen')?>"><i class="fa fa-circle-o"></i>
                Kategori Dokumen
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if (isset($active_laporan)) { echo $active_laporan; } ?>">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('laporanc/data_laporan')?>"><i class="fa fa-circle-o"></i>
                Daftar Laporan
              </a>
              <a href="<?php echo base_url('laporanc/manage_data_laporan')?>"><i class="fa fa-circle-o"></i>
                Buat Laporan
              </a>
              <a href="<?php echo base_url('laporanc/kategori_laporan')?>"><i class="fa fa-circle-o"></i>
                Kategori Laporan
              </a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if (isset($active_media)) { echo $active_media; } ?>">
          <a href="#">
            <i class="fa fa-camera"></i> <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('mediac')?>"><i class="fa fa-circle-o"></i>
                Daftar Media
              </a>
              <a href="<?php echo base_url('fotoc')?>"><i class="fa fa-circle-o"></i>
                Foto
              </a>
              <a href="<?php echo base_url('videoc')?>"><i class="fa fa-circle-o"></i>
                Video
              </a>
            </li>
          </ul>
        </li>

        <li><a href="<?php echo base_url('Bukuc/data_buku')?>"><i class="fa fa-book"></i> <span>Buku Panduan</span></a></li>

        <li class="header">Exit</li>
        <li><a href="<?php echo base_url('loginc/logout')?>"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>