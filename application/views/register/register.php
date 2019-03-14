<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<fieldset>
				<h1 class="text-center">Register</h1>
				<hr>
				  <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash') ?>"> 
			<form action="<?= base_url(); ?>login/proses_register" method="post">
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
					<label for="password2">Konfirmasi Password</label>
					<input type="password" class="form-control" id="password2"  placeholder="Konfirmasi Password" name="konfirmasi_password">
					<small id="emailHelp" class="form-text text-danger"><?= form_error('konfirmasi_password'); ?></small>
				</div>
				<div class="form-group">
					<label for="nama_lengkap">Nama_lengkap</label>
					<input type="nama_lengkap" class="form-control" id="nama_lengkap"  placeholder="Nama Lengkap" name="nama_lengkap">
					<small id="emailHelp" class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email"  placeholder="Email" name="email">
					<small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
				</div>
				<div class="form-group">
					<a href="" class="tombol-register"><button type="submit" class="btn btn-outline-primary btn-block">Register</button></a>
				</div>
			</form>
			</fieldset>
		</div>
	</div>
</div>