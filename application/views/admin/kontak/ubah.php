
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
              <a class="nav-link" href="<?= base_url(); ?>admin/kontak/index/"><i class="fa fa-address-book" style="padding-right: 5px;"></i>Data Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/user/index/"><i class="fa fa-users" style="padding-right: 5px;"></i>Data Users</a>
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
                <input type="hidden" name="id" value="<?= $kontak['id']; ?>">
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama..." name="nama" id="nama" value="<?= $kontak['nama']; ?>">
                  <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukkan email..." name="email" value="<?= $kontak['email']; ?>">
                  <small  class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                  <label for="phone">Phone:</label>
                  <input type="text" class="form-control" placeholder="Masukkan phone..." name="phone" id="phone" value="<?= $kontak['phone']; ?>">
                  <small  class="form-text text-danger"><?= form_error('phone'); ?></small>
                </div>
                <div class="form-group">
                  <label for="pesan">Pesan</label>
                  <textarea class="form-control" id="ckeditor" rows="3" placeholder="Masukkan pesan..." name="pesan" value="<?= $kontak['pesan']; ?>"><?= $kontak['pesan']; ?></textarea>
                  <small  class="form-text text-danger"><?= form_error('pesan'); ?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right"><i class="fa fa-edit" style="padding-right: 5px;"></i>Ubah Data</button>
                <a href="<?= base_url(); ?>admin/kontak/index" class="btn btn-primary">Kembali</a>
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

