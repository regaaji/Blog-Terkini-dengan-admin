<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Ubah Data Murid
				</div>
				<div class="card-body">
					
				<form action="" method="post">
					<input type="hidden" name="id" value="<?= $murid['id']; ?>">

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?= $murid['nama']; ?>">
						 <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
						<label for="nis">NIS</label>
						<input type="text" class="form-control" id="nis" placeholder="" name="nis" value="<?= $murid['nis']; ?>">
						<small class="form-text text-danger"><?= form_error('nis'); ?></small>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="" name="email" value="<?= $murid['email']; ?>">
						<small class="form-text text-danger"><?= form_error('email'); ?></small>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<?php foreach( $jurusan as $j ) :?>
							<?php if( $j == $murid['jurusan'] ) :?>
							<option value="<?= $j; ?>" selected><?= $j; ?></option>
							<?php else : ?>
								<option value="<?= $j; ?>"><?= $j; ?></option>
							<?php endif; ?>
							<?php endforeach; ?>
						</select>
					</div>
					<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
				</form>
					
				</div>
			</div>

		</div>
	</div>
</div>