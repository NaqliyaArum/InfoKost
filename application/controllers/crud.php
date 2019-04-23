<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('insert');
                $this->load->helper('url');
	}

	function index(){
		$data['datakost'] = $this->insert->Daftar()->result();
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
   			$this->insert->TambahUser();
				if ($this) {
     			$this->session->set_flashdata('flash','ditambahkan');
     			redirect('crud');
   }
}
 
		// $data = array(
		// 	'jk_input' => $jk_input,
		// 	'name_input' => $name_input,
		// 	'loc_input' => $loc_input,
		// 	'fk_input' => $fk_input,
		// 	'mnd_input' => $mnd_input,
		// 	'fp_input' => $fp_input,
		// 	'al_input' => $al_input, 
		// 	'dpk_input' => $dpk_input,
		// 	'kbs_input' => $kbs_input,
		// 	'kl_input' => $kl_input,
		// 	'kb_input' => $kb_input,
		// 	'dk_input' => $dk_input,
		// 	'nohp_input' => $nohp_input
		// );
			
		$this->insert->Daftar();
		redirect('crud/index');
	}
 }
