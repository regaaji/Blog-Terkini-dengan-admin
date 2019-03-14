<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Detail Data Murid
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $murid['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $murid['nis']; ?></h6>
					<p class="card-text"><?= $murid['email']; ?></p>
					<p class="card-text"><?= $murid['jurusan']; ?></p>
					<a href="<?= base_url(); ?>murid" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>