<?php 


/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}
	
	public function index()
	{
		$data['judul'] = 'Halaman Home';


		$data['home'] = $this->Home_model->getAllHome();
		if( $this->input->post('keyword') )
		{
			$data['home'] = $this->Home_model->cariDataHome();
		}  
		
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');

		
	}

	public function detail($id)
	{
		$data['judul'] = 'Halaman Pos';
		$data['home'] = $this->Home_model->getHomeById($id);  

		$this->load->view('templates/header', $data);
		$this->load->view('home/detail', $data);
		$this->load->view('templates/footer');
	}


}
