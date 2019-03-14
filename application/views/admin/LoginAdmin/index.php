<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login Admin</title>
  </head>
  <body style="background-color: rgba(141, 223, 248, 0.753);">
   <div class="container">
  <div class="row mt-5">
    <div class="col-md-6 offset-3">
      <fieldset style="background-color: rgba(78, 214, 255, 0.849); padding: 20px; margin-top: 60px; border-radius: 10px;">
        <h1 class="text-center">Login Admin</h1>
        <hr style="height: 1px; background-color: black;">
      <form action="<?= base_url(); ?>admin/LoginAdmin/proses_login" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username"  placeholder="Username" name="username" autofocus>
          <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password"  placeholder="Password" name="password">
          <small id="emailHelp" class="form-text text-danger"><?= form_error('password'); ?></small>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-primary btn-block">Login</button>
        </div>
      </form>
      </fieldset>
    </div>
  </div>
</div>

    <!-- sweetalert -->
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweet2.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>