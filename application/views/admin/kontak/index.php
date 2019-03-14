
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
              <h4 class="card-title"><i class="fa fa-list" style="padding-right: 10px;"></i>Data Kontak</h4>
              <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered table-striped table-hover table-condensed">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-icons btn-sm" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" title="Tambah Data" style="margin-bottom: -30px; margin-left: 15px;">
                  <i class="fa fa-plus-circle"></i>
                </button>
                 <a href="<?= base_url(); ?>admin/kontak/cetak_kontak"><button type="button" class="btn btn-danger btn-icons btn-sm" data-toggle="tooltip" title="Export With PDF" style="margin-bottom: -30px; margin-left: 15px;">
                  <i class="fa fa-file-pdf-o"></i>
                </button></a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="margin-right: 500px;">
                    <div class="modal-content" style="width: 800px;">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <div class="modal-body">
                        <form action="" method="post">
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama..." name="nama" id="nama">
                            <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email..." name="email">
                            <small  class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" placeholder="Masukkan phone..." name="phone" id="phone">
                            <small  class="form-text text-danger"><?= form_error('phone'); ?></small>
                        </div>
                        
                        <div class="form-group">
                          <label for="pesan">Pesan</label>
                          <textarea class="form-control" id="ckeditor" rows="3" placeholder="Masukkan pesan..." name="pesan"></textarea>
                          <small  class="form-text text-danger"><?= form_error('pesan'); ?></small>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="tambah"><i class="fa fa-plus-circle"></i>Tambah</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>


                

                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Phone</th>
                     <th>Pesan</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php $i = 1; ?>
                    <?php foreach( $kontak as $ko ) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td class="font-weight-medium"><?= $ko['nama']; ?></td>
                      <td class="font-weight-medium"><?= $ko['email']; ?></td>
                    <td class="font-weight-medium"><?= $ko['phone']; ?></td>
                    <td class="font-weight-medium"><?= $ko['pesan']; ?></td> 
                     <td>
                      <a href="<?= base_url(); ?>admin/kontak/ubah/<?= $ko['id']; ?>"> <button type="submit" class="btn btn-warning btn-icons btn-sm" data-toggle="tooltip" title="Edit Data"><i class="fa fa-edit"></i></button></a>
                    </td>                    
                    <td>
                      <a href="<?= base_url(); ?>admin/kontak/hapus/<?= $ko['id']; ?>" class="tombol-hapus"> <button type="submit" class="btn btn-danger btn-icons btn-sm" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash"></i></button></a>
                    </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
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

