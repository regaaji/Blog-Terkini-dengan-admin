<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Blog Terkini</title>
 
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor.bundle.addons.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor.bundle.base.css"> 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style1.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/icon.png" />

  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/DataTables/datatables.min.css"/>
  
  <!-- font-awesome -->
  <link href="<?= base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <p style="color: #0fd3a7; font-family: verdana; font-size: 20px; font-weight: bold;">Blog Terkini</p>
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <p style="color: #0fd3a7; font-family: verdana; font-size: 10px; font-weight: bold;">Blog Terkini</p>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text"><?= $this->session->userdata('username'); ?></span>
              <img class="img-xs rounded-circle" src="<?= base_url(); ?>assets/img/icon.png" alt="Profile image">
              <i class="fa fa-arrow-circle-down" style="padding-left: 10px; color: #11d1d5;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="fa fa-bookmark-o"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>admin/LoginAdmin/logout">
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <i class="fa fa-bars"></i>
        </button>
      </div>
    </nav>