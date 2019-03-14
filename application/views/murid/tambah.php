<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Murid
				</div>
				<div class="card-body">
					
				<form action="" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" placeholder="" name="nama">
						 <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
						<label for="nis">NIS</label>
						<input type="text" class="form-control" id="nis" placeholder="" name="nis">
						<small class="form-text text-danger"><?= form_error('nis'); ?></small>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="" name="email">
						<small class="form-text text-danger"><?= form_error('email'); ?></small>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="Pili Jurusan">Pilih Jurusan</option>
							<option value="RPL">RPL</option>
							<option value="DPIB">DPIB</option>
						</select>
					</div>
					<a href="<?= base_url(); ?>murid" class="btn btn-primary">Kembali</a>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
					
				</div>
			</div>

		</div>
	</div>
</div>