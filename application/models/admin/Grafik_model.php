<?php 

/**
 * 
 */
class Grafik_model extends CI_Model
{
	
	public function getAllGrafik()
	{
		$query = $this->db->query("SELECT * FROM tb_kontak");
		$total = $query->num_rows();
		return $total;
	}

	public function getAllGrafik1()
	{
		$query = $this->db->query("SELECT * FROM tb_user");
		$total = $query->num_rows();
		return $total;
	}

	public function getAllGrafik2()
	{
		$query = $this->db->query("SELECT * FROM tb_pos");
		$total = $query->num_rows();
		return $total;
	}
}