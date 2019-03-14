<?php 

/**
 * 
 */
class LoginAdmin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Login_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('admin/LoginAdmin/index');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if( $this->form_validation->run() === FALSE ){
				$this->load->view('admin/LoginAdmin/index');
			
		} else {
			$username = $this->input->post('username');

			$cek = $this->Login_model->cekUsernameAdmin($username);
			if ( $cek->num_rows() === 1 ) {
				$password = $this->input->post('password');

				if ( password_verify($password, $cek->row()->password) ) {
					
					 $session['username'] = $cek->row()->username;
					 $session['berhasil'] = TRUE;

					// $data_session = array(
					// 	'nama_lengkap' => $cek->row()->nama_lengkap,
					// 	'logged_in' => TRUE 
					// );


					$this->session->set_userdata($session);
				   redirect('admin/home/index');
				} else {
					echo "<script>
				alert('Password Salah');
				document.location.href = '';
				</script>";
				}
			} else {
				echo "<script>
				alert('Login Gagal');
				document.location.href = '';
				</script>";
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('admin/LoginAdmin');
	}
}