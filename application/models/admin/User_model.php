<?php 

/**
 * 
 */
class User_model extends CI_Model
{

	private $table = 'tb_user';
	private $id = 'tb_user.id';


	 function getAllCetak()
	 {
	 	$this->db->select('*');
	 	$this->db->from($this->table);
	 	$query = $this->db->get();
	 	return $query->result();
	 } 

	public function getAllAdminUser()
	{
		return $query = $this->db->get('tb_user')->result_array();
	}	

	public function getUserById($id)
	{
		return $this->db->get_where('tb_user', ['id' => $id])->row_array();
	}

	public function ubahDataAdminUser()
	{
		$data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"nama_lengkap" => $this->input->post('nama_lengkap', true),
			"email" => $this->input->post('email', true)
		];	

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_user', $data);
	}

	public function hapusDataAdminUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_user');
	}

	public function tambahDataAdminUser()
	{
		$data = [
			"username" => $this->input->post('username', true),
			"password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			"nama_lengkap" => $this->input->post('nama_lengkap', true),
			"email" => $this->input->post('email', true)
		];	

		$this->db->insert('tb_user', $data);
	}

}