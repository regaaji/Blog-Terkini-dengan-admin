<?php 

/**
 * 
 */
class Home_model extends CI_model
{

	private $table = 'tb_pos';
	private $id = 'tb_pos.id';


	 function getAllCetak()
	 {
	 	$this->db->select('*');
	 	$this->db->from($this->table);
	 	$query = $this->db->get();
	 	return $query->result();
	 } 
	
	public function getAllAdminHome()
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

	
	public function tambahDataAdmin()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"keterangan" => $this->input->post('keterangan', true),
			"gambar" => $this->input->post('gambar', true),
			"penerbit" => $this->input->post('penerbit', true),
			"tanggal" => $this->input->post('tanggal', true)
		];	

		$this->db->insert('tb_pos', $data);
	}

	public function ubahDataAdmin()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"keterangan" => $this->input->post('keterangan', true),
			"penerbit" => $this->input->post('penerbit', true),
			"tanggal" => $this->input->post('tanggal', true)
		];	

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_pos', $data);
	}

	public function hapusDataAdmin($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_pos');
	}

}