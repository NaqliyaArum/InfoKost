<?php
 // write your name and student id here
class M_akun extends CI_model
{

	public function getUserById($id)
	{
		return $this->db->get_where('user',array('id_user'=> $id))->result_array();
	}

	public function ubahDataUser($id)
	{
		$data = [
			"First" => $this->input->post('First', true),
			"Last" => $this->input->post('Last', true),
			"gender" => $this->input->post('gender', true),
			"Alamat" => $this->input->post('Alamat', true),
			"Handphone" => $this->input->post('Handphone', true),
			"Password" => $this->input->post('Password', true),
		];
		$this->db->update('user',$data);
	}
}
?>