<?php 

/**
 * 
 */
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
	}
	
	public function register()
	{
		$data['judul'] = 'Halaman Register';

		$this->load->view('templates/header', $data);
		$this->load->view('register/register');
		$this->load->view('templates/footer');
	}

	public function proses_register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if( $this->form_validation->run() === FALSE ){
		$data['judul'] = 'Halaman Register';

		$this->load->view('templates/header', $data);
			$this->load->view('register/register');
		$this->load->view('templates/footer');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'nama_lengkap' => $this->input->post('nama_lengkap')

			];

			$insert = $this->Login_model->register($data);

			if ( $insert ) {
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('login/register');
			} else {
				echo "<script>
				alert('Terjadi kesalahan saat registrasi');
				document.location.href = 'login/register';
				</script>";
			}
		}

		
	}


	public function index()
	{
		$data['judul'] = 'Halaman Login';

		$this->load->view('templates/header', $data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}


	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if( $this->form_validation->run() === FALSE ){
				$data['judul'] = 'Halaman Login';

			$this->load->view('templates/header', $data);
			$this->load->view('login/index');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');

			$cek = $this->Login_model->cekUsername($username);
			if ( $cek->num_rows() === 1 ) {
				$password = $this->input->post('password');

				if ( password_verify($password, $cek->row()->password) ) {
					
					 $session['nama_lengkap'] = $cek->row()->nama_lengkap;
					 $session['logged_in'] = TRUE;

					// $data_session = array(
					// 	'nama_lengkap' => $cek->row()->nama_lengkap,
					// 	'logged_in' => TRUE 
					// );


					$this->session->set_flashdata('flash1', 'Berhasil');
					$this->session->set_userdata($session);
				   redirect('home/index');
				} else {
					$this->session->set_flashdata('pesan1', 'Salah');
					redirect('login/index');
				}
			} else {
				$this->session->set_flashdata('pesan', 'Gagal');
				redirect('login/index');
			}
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();

		redirect('home/index');
	}
}