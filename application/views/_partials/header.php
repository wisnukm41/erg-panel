<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url('assets/template/backend')?>/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--Font Awesome (added because you use icons in your prepend/append)-->
  <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
  <!-- Boostrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/backend')?>'/plugins/bootstrap/css/bootstrap.css'">
  <!-- Sweet Alert -->
  <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
  <!-- Overide CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/style/style.css') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('admin/') ?>" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <a href="<?= base_url('admin/auth/logout') ?>" class="float-right pr-3 btn btn-dark">Logout</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/') ?>" class="brand-link">
      <img src="<?=base_url('assets/uploads/news/default.png')?>" alt="ERG Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ERG Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" id='navtree'>
            <a href="#" class="nav-link" >
              <i class="nav-icon fas fa-users"></i>
              <p>Anggota
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if($this->ion_auth->in_group(1)) : ?>
              <li class="nav-item">
                <a href="<?= base_url('admin/admin') ?>" class="nav-link" id='admin'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/new') ?>" class="nav-link" id='new'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member Baru
                  <?php if(register_count('6')>0) { ?>
                  <span class="badge badge-light right"> <?= register_count('6') ?></span>
                  <?php } ?>
                  </p>
                </a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="<?= base_url('admin/chief') ?>" class="nav-link" id='chief'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengurus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/member') ?>" class="nav-link" id='member'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/graduated') ?>" class="nav-link" id='graduated'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/lecturer') ?>" class="nav-link" id='lecturer'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/trainee') ?>" class="nav-link" id='trainee'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kader</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/products') ?>" class="nav-link" id='product'>
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/news') ?>" class="nav-link" id='news'>
              <i class="nav-icon fas fa-globe"></i>
              <p>Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/image') ?>" class="nav-link" id='image'>
              <i class="nav-icon fas fa-images"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/meeting/')?>" class="nav-link" id='meeting'>
            <i class="fas fa-handshake nav-icon"></i>
              <p>Rapat</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/finence/')?>" class="nav-link" id='finence'>
            <i class="fas fa-file-invoice-dollar nav-icon"></i>
              <p>Keuangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/award/') ?>" class="nav-link" id='award'>
            <i class="fas fa-medal nav-icon"></i>
              <p>Prestasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/event/') ?>" class="nav-link" id='event'>
            <i class="fas fa-calendar-alt nav-icon"></i>
              <p>Kalender</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/piket/') ?>" class="nav-link" id='piket'>
            <i class="fas fa-broom nav-icon"></i>
              <p>Piket
              <?php if(checkPiket()) { ?>
                <span class="badge right"> <i class="fas fa-bell text-danger fa-lg"></i></span>
              <?php } ?>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/tools/') ?>" class="nav-link" id='tools'>
            <i class="fas fa-tools nav-icon"></i>
              <p>Peralatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/profile/').username() ?>" class="nav-link" id='profile'>
              <i class="fas fa-cog nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php if(isset($active)){ ?>
  <input type="hidden" value=<?= $active ?> id="active">
  <?php } ?>

  <?php if(isset($actives)){ ?>
  <input type="hidden" value=<?= $actives ?> id="actives">
  <?php } ?>
  