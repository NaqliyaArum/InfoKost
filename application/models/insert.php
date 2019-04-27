<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert extends CI_Model {
	public function TambahUser()
	{
		$data = [
			"First" => $this->input->post('first', true),
			"Last" => $this->input->post('last', true),
			"gender" => $this->input->post('Gender', true),
			"Alamat" => $this->input->post('alamat', true),
			"Handphone" => $this->input->post('handphone', true),
			"Password" => $this->input->post('password', true),
		];
		$this->db->insert('user',$data);
	}
	public function Daftar(){

		$data =[
				"name_input" =>$this->input->post('name_input', true),
				"loc_input" =>$this->input->post('loc_input', true),
				"fk_input" =>$this->input->post('fk_input', true),
				"Luas_input" =>$this->input->post('Luas_input', true),
				"mnd_input" =>$this->input->post('mnd_input', true),
				"fp_input" =>$this->input->post('fp_input', true),
				"al_input" =>$this->input->post('al_input', true),
				"dpk_input" =>$this->input->post('dpk_input', true),
				"kbs_input" =>$this->input->post('kbs_input', true),
				"kl_input" =>$this->input->post('kl_input', true),
				"kb_input" =>$this->input->post('kb_input', true),
				"dk_input" =>$this->input->post('dk_input', true),


		];
		$this->db->insert('datakost',$data);
    }
 
}
?>
