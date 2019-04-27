<?php 

class Crud extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('insert');
                $this->load->library('form_validation');
		
	}

	function index(){
		$this->load->view('v_tampil',$data);
		}

	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$data['judul'] = 'form kostan';
		$this->form_validation->set_rules('jk_input','jk_input');
		$this->form_validation->set_rules('name_input','name_input');
		$this->form_validation->set_rules('loc_input','loc_input');
		$this->form_validation->set_rules('fk_input','fk_input');
		$this->form_validation->set_rules('Luas_input','Luas_input');
		$this->form_validation->set_rules('mnd_input','mnd_input');
		$this->form_validation->set_rules('fp_input','fp_input');
		$this->form_validation->set_rules('al_input','al_input');
		$this->form_validation->set_rules('dpk_input','dpk_input');
		$this->form_validation->set_rules('kbs_input','kbs_input');
		$this->form_validation->set_rules('kl_input','kl_input');
		$this->form_validation->set_rules('kb_input','kb_input');
		$this->form_validation->set_rules('dk_input','dk_input');
		$this->form_validation->set_rules('nohp_input','nohp_input');


		if ($this->form_validation->run() == false) {
   			$this->load->view('input', $data);
  		} else {
   			$this->insert->Daftar();
				if ($this) {
     			$this->session->set_flashdata('flash','ditambahkan');
     			redirect('Crud');
   }
}
}
}