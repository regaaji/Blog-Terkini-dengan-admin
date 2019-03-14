<?php 

/**
 * 
 */
class Murid extends CI_Controller
{

	// buat koneksi ke database semua controller

	// method yang dijalankan ketika kelas di instansiasi
	// public function __construct()
	// {
	// 	// unutk menjalankan fungsi yang ada di method parent(construct)
	// 	parent::__construct();
	// 	$this->load->database();
	// }
	
	// akhir koneksi ke database


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Murid_model');
		$this->load->library('form_validation');

	}

	public function index(){

		$data['judul'] = 'Daftar Murid';

		$data['murid'] = $this->Murid_model->getAllMurid();
		if ( $this->input->post('keyword') ) {
			$data['murid'] = $this->Murid_model->cariDataMurid();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('murid/index',$data);
		$this->load->view('templates/footer');	
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Murid';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if( $this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('murid/tambah');
		$this->load->view('templates/footer');
		} else {
			$this->Murid_model->tambahDataMurid();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('murid');
		}
	
	}

	public function hapus($id)
	{
		$this->Murid_model->hapusDataMurid($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('murid');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Murid';
		$data['murid'] = $this->Murid_model->getMuridById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('murid/detail', $data);
		$this->load->view('templates/footer');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Murid';
		$data['murid'] = $this->Murid_model->getMuridById($id);
		$data['jurusan'] = ['RPL','DPIB'];


		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if( $this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('murid/ubah', $data);
		$this->load->view('templates/footer');
		} else {
			$this->Murid_model->ubahDataMurid();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('murid');
		}
	
	}
}