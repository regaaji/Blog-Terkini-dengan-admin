
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
              <h4 class="card-title"><i class="fa fa-list" style="padding-right: 10px;"></i>Jumlah Semua Data</h4>
              
              <div class="row"> 

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body shadow p-3 mb-5 bg-warning rounded">
                      <div class="clearfix">
                        <div class="float-left ml-2">
                          <i class="fa fa-address-book fa-4x" style="color: white;"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right text-white">Data Kontak</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right text-white mb-0"><?= $grafik; ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-white mt-3 mb-0">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Khusus Kontak
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body shadow p-3 mb-5 bg-danger rounded">
                      <div class="clearfix">
                        <div class="float-left ml-2">
                          <i class="fa fa-users fa-4x" style="color: white;"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right text-white">Data Users</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right text-white mb-0"><?= $grafik1; ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-white mt-3 mb-0">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Khusus Users
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body shadow p-3 mb-5 bg-primary rounded">
                      <div class="clearfix">
                        <div class="float-left ml-2">
                          <i class="fa fa-table fa-4x" style="color: white;"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right text-white">Data Blog</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right text-white mb-0"><?= $grafik2; ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-white mt-3 mb-0">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Khusus Blog
                      </p>
                    </div>
                  </div>
                </div>

              </div>
    
              <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"><i class="fa fa-pie-chart" style="padding-right: 10px;"></i>Doughnut chart</h4>
                      <canvas id="doughnutChart" style="height:250px"></canvas>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"><i class="fa fa-pie-chart" style="padding-right: 10px;"></i>Pie chart</h4>
                      <canvas id="pieChart" style="height:250px"></canvas>
                    </div>
                  </div>
                </div>
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

