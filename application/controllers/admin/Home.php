<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Home_model');
		$this->load->library('form_validation');
		if ( ! $this->session->berhasil ) {
			redirect('admin/LoginAdmin/');
		}
	}
	
	public function index()
	{
		$data['home'] = $this->Home_model->getAllAdminHome();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		
		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates_admin/kepala');
		$this->load->view('admin/home/index', $data);
		$this->load->view('templates_admin/kaki');

		} else {
			$this->Home_model->tambahDataAdmin();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/home/index');
		}
	}

	public function hapus($id)
	{
		$this->Home_model->hapusDataAdmin($id);
		$this->session->set_flashdata('flash', 'Di Hapus');
		redirect('admin/home/index');
	}

	// public function getUbah()
	// {
	// 	echo json_encode($this->Home_model->getHomeById($_POST['id']));
	// }

	public function ubah($id)
	{
		$data['home'] = $this->Home_model->getHomeById($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		
		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates_admin/kepala');
		$this->load->view('admin/home/ubah', $data);
		$this->load->view('templates_admin/kaki');

		} else {
			$this->Home_model->ubahDataAdmin();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/home/index');
		}
	}

	function cetak_home()
	{
		$data['dataHome'] = $this->Home_model->getAllCetak();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "blog";
		$this->pdf->load_view('admin/cetak/home', $data);

	}

}