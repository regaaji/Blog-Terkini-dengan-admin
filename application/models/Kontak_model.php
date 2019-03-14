<?php 

/**
 * 
 */
class Kontak_model extends CI_Model
{
	
	public function tambahDataKontak()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"phone" => $this->input->post('phone', true),
			"pesan" => $this->input->post('pesan', true)
		];	

		$this->db->insert('tb_kontak', $data);
	}
}