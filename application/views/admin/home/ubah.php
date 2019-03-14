
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="<?= base_url(); ?>assets/img/icon.png" alt="profile image">
            </div>
            <div class="text-wrapper">
              <p class="profile-name"><?= $this->session->userdata('username'); ?></p>
              <div>
                <small class="designation text-muted">Administrator</small>
                <span class="status-indicator online"></span>
              </div>
            </div>
          </div>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="fa fa-tachometer" style="padding-right: 10px;"></i>
          <span class="menu-title">Dashboard</span>
          <i class="fa fa-plus" style="padding-left: 100px;"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/home/index/"><i class="fa fa-table" style="padding-right: 5px;"></i>Data Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/login.html"> Login </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>admin/grafik/index">
          <i class="fa fa-bar-chart" style="padding-right: 10px;"></i>
          <span class="menu-title">Grafik</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><i class="fa fa-edit" style="padding-right: 10px;"></i>Edit Blog</h4>
              <form action="" method="post">
                <input type="hidden" name="id" value="<?= $home['id']; ?>">
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama..." name="nama" id="nama" value="<?= $home['nama']; ?>">
                  <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea class="form-control" id="ckeditor" rows="3" placeholder="Masukkan Keterangan..." name="keterangan" value="<?= $home['keterangan']; ?>"><?= $home['keterangan']; ?></textarea>
                  <small  class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                </div>
                <!-- gambar -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Gambar</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile01" ><?= $home['gambar']; ?></label>
                    
                  </div>
                </div>
                <small  class="form-text text-danger"><?= form_error('gambar'); ?></small>
                <!-- akhir gambar -->
                <div class="form-group">
                  <label for="penerbit">Penerbit:</label>
                  <input type="text" class="form-control" id="penerbit" placeholder="Masukkan penerbit..." name="penerbit" value="<?= $home['penerbit']; ?>">
                  <small  class="form-text text-danger"><?= form_error('penerbit'); ?></small>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal:</label>
                  <input type="date" class="form-control" placeholder="Masukkan tanggal..." name="tanggal" id="tanggal" value="<?= $home['tanggal']; ?>">
                  <small  class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right"><i class="fa fa-edit" style="padding-right: 5px;"></i>Ubah Data</button>
                <a href="<?= base_url(); ?>admin/home/index" class="btn btn-primary">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?= date('Y'); ?>
          <a href="#" target="_blank">Blog Terkini</a>. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Desain By Rega Aji 
            <i class="fa fa-heart" style="color: red;"></i>
          </span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

