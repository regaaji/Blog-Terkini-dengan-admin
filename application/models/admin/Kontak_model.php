<?php 


class Kontak_model extends CI_Model
{

	private $table = 'tb_kontak';
	private $id = 'tb_kontak.id';


	 function getAllCetak()
	 {
	 	$this->db->select('*');
	 	$this->db->from($this->table);
	 	$query = $this->db->get();
	 	return $query->result();
	 } 

	public function getAllAdminKontak()
	{
		return $query = $this->db->get('tb_kontak')->result_array();	
	}

	public function tambahDataAdminKontak()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"phone" => $this->input->post('phone', true),
			"pesan" => $this->input->post('pesan', true)
			
		];	

		$this->db->insert('tb_kontak', $data);
	}

	public function hapusDataAdminKontak($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_kontak');
	}

	public function getKontakById($id)
	{
		return $this->db->get_where('tb_kontak', ['id' => $id])->row_array();
	}

	public function ubahDataAdminKontak()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"phone" => $this->input->post('phone', true),
			"pesan" => $this->input->post('pesan', true)
		];	

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_kontak', $data);
	}
}