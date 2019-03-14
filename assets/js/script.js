$(function() {

	$('.tombolTambahData').on('click', function() {
		$('#exampleModalLabel').html('Tambah Data');

		$('.modal-footer button[type=submit]').html('Tambah Data');

		$('#nama').val('');
		$('#keterangan').val('');
		$('#gambar').val('');
		$('#penerbit').val('');
		$('#tanggal').val('');
	});


	$('.tampilModalUbah').on('click', function() {
		$('#exampleModalLabel').html('Ubah Data');

		$('.modal-footer button[type=submit]').html('Ubah Data');

		$('.modal-body form').attr('action', 'http://localhost/blog_terkini/admin/home/ubah');

		const id = $(this).data('id');
		$.ajax({
			url: 'http://localhost/blog_terkini/admin/home/getUbah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#keterangan').val(data.keterangan);
				$('#gambar').val(data.gambar);
				$('#penerbit').val(data.penerbit);
				$('#tanggal').val(data.tanggal);
				$('#id').val(data.id);
			}
		});

	});




});