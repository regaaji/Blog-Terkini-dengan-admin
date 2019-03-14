<?php 

/**
 * 
 */
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/User_model');
		$this->load->library('form_validation');
		if ( ! $this->session->berhasil ) {
			redirect('admin/LoginAdmin/');
		}
	}
	
	public function index()
	{
		$data['user'] = $this->User_model->getAllAdminUser();
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	
		if( $this->form_validation->run() == FALSE ){

			$this->load->view('templates_admin/kepala');
			$this->load->view('admin/user/index', $data);
			$this->load->view('templates_admin/kaki');

		} else {
			$this->User_model->tambahDataAdminUser();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/User/index');
		}
	}

	public function ubah($id)
	{
		$data['user'] = $this->User_model->getUserById($id);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates_admin/kepala');
		$this->load->view('admin/user/ubah', $data);
		$this->load->view('templates_admin/kaki');

		} else {
			$this->User_model->ubahDataAdminUser();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/user/index');
		}
	}

	public function hapus($id)
	{
		$this->User_model->hapusDataAdminUser($id);
		$this->session->set_flashdata('flash', 'Di Hapus');
		redirect('admin/user/index');
	}


	function cetak_user()
	{
		$data['dataUser'] = $this->User_model->getAllCetak();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "user";
		$this->pdf->load_view('admin/cetak/user', $data);

	}

}