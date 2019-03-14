 <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 mt-5">

         <!-- menampilkan data kosong dari search -->
           <?php if( empty( $home ) )  :?>
              <div class="alert alert-danger">
                Data Blog Tidak Ditemukan
              </div>
           <?php endif; ?> 
          <!-- Title -->
          <h1 class="mt-4"><?= $home['nama']; ?></h1>


          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?= $home['penerbit']; ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?= $home['tanggal']; ?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/<?= $home['gambar']; ?>" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead"><?= $home['keterangan']; ?></p>


          <hr>

    

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 mt-5">

          <!-- Search Widget -->
          <form action="" method="post">
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." name="keyword">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">Go!</button>
                </span>
              </div>
            </div>
          </div>
          </form>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Detail Populer</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#"><?= $home['nama']; ?></a>
                      <a href="#" class="badge badge-primary"><?= $home['tanggal']; ?></a>
                      <hr>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Layanan Iklan</h5>
            <div class="card-body">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url(); ?>assets/img/iklan/iklan1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/iklan/iklan2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/iklan/iklan3.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
