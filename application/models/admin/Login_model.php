<?php 

/**
 * 
 */
class Login_model extends CI_Model
{
	

	public function cekUsernameAdmin($username)
	{
		return $this->db->get_where('tb_admin', ['username' => $username]);
	}
}