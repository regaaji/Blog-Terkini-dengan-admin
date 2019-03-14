<!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Blog Terkini</h1>
            
            <!-- menampilkan data kosong dari search -->
           <?php if( empty( $home ) )  :?>
              <div class="alert alert-danger">
                Data Blog Tidak Ditemukan
              </div>
           <?php endif; ?> 

          <!-- Blog Post -->
          <?php foreach ($home as $hm) :?>
          <div class="card mb-4">
            
            <img class="card-img-top" src="<?= base_url(); ?>assets/img/<?= $hm['gambar']; ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?= $hm['nama']; ?></h2>
              <p class="card-text"><?= mb_substr($hm['keterangan'], 0, 50); ?>...</p>
              <a href="<?= base_url(); ?>home/detail/<?= $hm['id']; ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?= $hm['tanggal']; ?> by
              <a href="#"><?= $hm['penerbit']; ?></a>
            </div>

          
          </div>
          <?php endforeach; ?>
         
          <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
          
 -->
        
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

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

          <!-- Terbaru Widget -->
          <div class="card my-4">
            <h5 class="card-header">Populer</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <?php foreach ($home as $me) :?>
                      <a href="<?= base_url(); ?>home/detail/<?= $me['id']; ?>"><?= $me['nama']; ?></a>
                      <a href="<?= base_url(); ?>home/detail/<?= $me['id']; ?>" class="badge badge-primary"><?= $me['tanggal']; ?></a>
                      <hr>
                    <?php endforeach; ?>
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
