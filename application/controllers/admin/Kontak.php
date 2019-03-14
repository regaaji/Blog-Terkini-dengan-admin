<?php 

/**
 * 
 */
class Kontak extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Kontak_model');
		$this->load->library('form_validation');
		if ( ! $this->session->berhasil ) {
			redirect('admin/LoginAdmin/');
		}

	}

	public function index()
	{
		$data['kontak'] = $this->Kontak_model->getAllAdminKontak();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');

		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates_admin/kepala');
		$this->load->view('admin/kontak/index', $data);
		$this->load->view('templates_admin/kaki');

		} else {
			$this->Kontak_model->tambahDataAdminKontak();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/kontak/index');
		}
	}

	public function hapus($id)
	{
		$this->Kontak_model->hapusDataAdminKontak($id);
		$this->session->set_flashdata('flash', 'Di Hapus');
		redirect('admin/kontak/index');
	}

	public function ubah($id)
	{
		$data['kontak'] = $this->Kontak_model->getKontakById($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');
		
		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates_admin/kepala');
		$this->load->view('admin/kontak/ubah', $data);
		$this->load->view('templates_admin/kaki');

		} else {
			$this->Kontak_model->ubahDataAdminKontak();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/kontak/index');
		}
	}

	function cetak_kontak()
	{
		$data['dataKontak'] = $this->Kontak_model->getAllCetak();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "kontak";
		$this->pdf->load_view('admin/cetak/kontak', $data);

	}
}