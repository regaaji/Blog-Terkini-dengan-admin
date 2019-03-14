const flashData = $('.flash-data').data('flashdata');

if ( flashData) {
	Swal({
		title: 'Terima Kasih',
		text: 'Telah Mengunjungi ' + flashData,
		type: 'success'

	})

}

// tombol hapus
$('.tombol-hapus').on('click', function(e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin?',
		text: "data blog akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

const flashData1 = $('.flash-data1').data('flashdata');

if ( flashData1) {
	Swal({
		position: 'top-end',
		type: 'success',
		title: 'Data Berhasil ' + flashData1,
		showConfirmButton: false,
		timer: 3000
	})

}

const flashData2 = $('.flash-data2').data('flashdata');

if ( flashData2) {
	Swal({
		position: 'top-end',
		type: 'warning',
		title: 'Login ' + flashData2,
		showConfirmButton: false,
		timer: 3000
	})

}

const flashData3 = $('.flash-data3').data('flashdata');

if ( flashData3) {
	Swal({
		position: 'top-end',
		type: 'warning',
		title: 'Password ' + flashData3,
		showConfirmButton: false,
		timer: 3000
	})

}

