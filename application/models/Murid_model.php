<?php 


/**
 * 
 */
class Murid_model extends CI_model
{
	public function getAllMurid()
	{
		//mengambil tabel dari database
		// $query = $this->db->get('murid');
		// return $query->result_array();

		//method chaning / method berantai
		return $this->db->get('murid')->result_array();
	}

	public function tambahDataMurid()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true)
		];	

		$this->db->insert('murid', $data);
	}

	public function hapusDataMurid($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('murid', ['id' => $id]);
	}

	public function getMuridById($id)
	{
		return $this->db->get_where('murid', ['id' => $id])->row_array();
	}


	public function ubahDataMurid()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true)
		];	


		$this->db->where('id', $this->input->post('id'));
		$this->db->update('murid', $data);
	}

	public function cariDataMurid()
	{
		$keyword = $this->input->post('keyword', true);	
		$this->db->like('nama', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$this->db->or_like('nis', $keyword);
		$this->db->or_like('email', $keyword);
		return $this->db->get('murid')->result_array();
	}

}