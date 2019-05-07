<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kost extends CI_Model {
	public function daftar(){
		$data = [
				"jk_input" =>$this->input->post('jk_input', true),
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
				"nohp_input" =>$this->input->post('nohp_input', true),
				//"image_kost" =>$this->input->post('image_kost'),
		];
		$this->db->insert('datakost',$data);
    }

    public function getData(){
		return $this->db->get('datakost');
	}

	public function data($number,$offset){
		return $query = $this->db->get('datakost',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		return $this->db->get('datakost')->num_rows();
	}
	
	public function view($id) 
    {
        $this->db->where('id_kost', $id);
        $view = $this->db->get('datakost');
        return $view->row();
    }
}

?>
