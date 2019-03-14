<?php 

/**
 * 
 */
class Kontak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kontak_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['judul'] = 'Halaman Kontak';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('pesan', 'Massege', 'required');

		if( $this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('kontak/index', $data);
		$this->load->view('templates/footer');
		} else {
			$this->Kontak_model->tambahDataKontak();
			$this->session->set_flashdata('flash', 'Kami');
			redirect('kontak');
		}	

		
	}
}