<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

  <!-- favicon -->
  <link rel="shorcut icon" href="<?= base_url(); ?>assets/img/icon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/blog-home.css" rel="stylesheet">

        <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/blog-post.css" rel="stylesheet">

    <!-- mycss -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <!-- Custom Fonts -->
  <link href="<?= base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">Blog Terkini</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>kontak">Kontak</a>
            </li>
            <?php if ( isset ($this->session->userdata['logged_in']) ) : ?>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>login"><?= $this->session->userdata('nama_lengkap'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
            </li>
              <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>login">Login</a>
            </li>
            <?php endif; ?>
            
          </ul>
        </div>
      </div>
    </nav>