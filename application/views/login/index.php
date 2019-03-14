<div class="container">
	<div class="row mt-5">
		<div class="col-md-6 offset-3">
			<fieldset>
				<h1 class="text-center">Login</h1>
				<hr>
				  <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash') ?>"> 
				  	<div class="flash-data2" data-flashdata="<?= $this->session->flashdata('pesan') ?>"> 
				  	<div class="flash-data3" data-flashdata="<?= $this->session->flashdata('pesan1') ?>">
			<form action="<?= base_url(); ?>login/proses_login" method="post">
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
					<a href="<?= base_url(); ?>login/register"><button type="button" class="btn btn-outline-primary float-right mt-3">Register</button></a>
					<a href="<?= base_url(); ?>"><button type="button" class="btn btn-outline-primary float-left mt-3">Kembali</button></a>
				</div>
			</form>
			</fieldset>
		</div>
	</div>
</div>