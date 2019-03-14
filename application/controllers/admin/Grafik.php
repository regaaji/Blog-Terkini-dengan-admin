<?php 

/**
 * 
 */
class Grafik extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Grafik_model');
		if ( ! $this->session->berhasil ) {
			redirect('admin/LoginAdmin/');
		}
	}

	public function index()
	{
		$data['grafik'] = $this->Grafik_model->getAllGrafik();
		$data['grafik1'] = $this->Grafik_model->getAllGrafik1();
		$data['grafik2'] = $this->Grafik_model->getAllGrafik2();

		$this->load->view('templates_admin/kepala');
		$this->load->view('admin/grafik/index', $data);
		$this->load->view('templates_admin/kaki', $data);
	}
}