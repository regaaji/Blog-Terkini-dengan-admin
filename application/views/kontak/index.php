<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="" method="post">
                                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="nama">
                                        <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                        <small  class="form-text text-danger"><?= form_error('email'); ?></small>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                                        <small  class="form-text text-danger"><?= form_error('phone'); ?></small>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="pesan" rows="5"></textarea>
                                        <small  class="form-tex text-danger"><?= form_error('pesan'); ?></small>
                                    </div>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-primary btn-submit" name="submit">SUBMIT</button>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-road" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Jawa Timur
                                        <br> Trenggalek, Karangan
                                        <br> .66361</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>blog_terkini@gmail.com
                                            <br> regaajiprayogo@gmail.com
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>+91 555 668 986</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>