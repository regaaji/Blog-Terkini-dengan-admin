<?php 

/**
 * 
 */
class Login_model extends CI_Model
{
	public function register($data)
	{
		return $this->db->insert('tb_user', $data);
	}

	public function cekUsername($username)
	{
		return $this->db->get_where('tb_user', ['username' => $username]);
	}
}