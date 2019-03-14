<?php 

/**
 * 
 */
class Home_model extends CI_model
{
	
	public function getAllHome()
	{
		return $query = $this->db->get('tb_pos')->result_array();	
	}

	public function getHomeById($id)
	{
		return $this->db->get_where('tb_pos', ['id' => $id])->row_array();
	}

	public function cariDataHome()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('keterangan', $keyword);
		$this->db->or_like('penerbit', $keyword);
		$this->db->or_like('tanggal', $keyword);
		return $this->db->get('tb_pos')->result_array();
	}

	// //front-end
	// function guru(){
	// 	$hsl=$this->db->query("SELECT * FROM tb_pos");
	// 	return $hsl;
	// }
	// function guru_perpage($offset,$limit){
	// 	$hsl=$this->db->query("SELECT * FROM tb_pos limit $offset,$limit");
	// 	return $hsl;
	// }
}