<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_akun extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
        	$this->load->model("M_akun");
        	$this->load->library('form_validation');
    	}
	
	public function index()
	{
		$data['user'] = $this->insert->editAkun()->result();
		$this->load->view('profil',$data);
	}
	
	public function ubahDataUser($id)
	{
		$data['judul'] = 'Edit Profil';

		$this->form_validation->set_rules('First','First','required');
		$this->form_validation->set_rules('Last','Last','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('Handphone','Handphone','required');
		$this->form_validation->set_rules('Password','Password','required');

		if ($this->form_validation->run() == false){
			$data['user'] = $this->M_akun-> getUserById($id);
			$this->load->view('template/header', $data);
			$this->load->view('editPROFILE');
			$this->load->view('template/footer', $data);	
		
		}else{
			$this->db->where('id', $id);
			$this->M_akun->ubahDataUser($id);
			if($this->db->affected_rows()){
				$this->session->set_flashdata('flash', 'data diubah');
				redirect('C_akun');
			}else{
				$this->session->set_flashdata('flash', 'data change failed');
				redirect('C_akun');
			}		
		}
	}
}
