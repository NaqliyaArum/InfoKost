<?php 

class Crud extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('insert');
                $this->load->library('form_validation');
                $this->load->helper('url');
		
	}

	function index(){
		$data['datakost'] = $this->insert->daftar()->result();
		$this->load->view('v_tampil',$data);
		}

	function tambah(){
		$this->load->view('v_input');
	}
	public function tampil()
	{
		$data['judul'] = 'Daftar Kost';
		$data['kost'] = $this->insert->tampil_data()->result_array();
		$data['kost'] = $this->insert->getallkost()->result_array();
		if ($this->input->post('keyword')) {
			$data['kost'] = $this->insert->cariDatakost();
		}
		$this->load->view('templates/header');
		$this->load->view('v_tampil', $data);
		$this->load->view('templates/footer');
	}
	function tambah_aksi(){
		$data['judul'] = 'form kostan';
		$this->form_validation->set_rules('jk_input','jk_input','required');
		$this->form_validation->set_rules('name_input','name_input','required');
		$this->form_validation->set_rules('loc_input','loc_input','required');
		$this->form_validation->set_rules('fk_input','fk_input','required');
		$this->form_validation->set_rules('Luas_input','Luas_input','required');
		$this->form_validation->set_rules('mnd_input','mnd_input','required');
		$this->form_validation->set_rules('fp_input','fp_input','required');
		$this->form_validation->set_rules('al_input','al_input','required');
		$this->form_validation->set_rules('dpk_input','dpk_input','required');
		$this->form_validation->set_rules('kbs_input','kbs_input','required');
		$this->form_validation->set_rules('kl_input','kl_input','required');
		$this->form_validation->set_rules('kb_input','kb_input','required');
		$this->form_validation->set_rules('dk_input','dk_input','required');
		$this->form_validation->set_rules('nohp_input','nohp_input','required');
		//$this->form_validation->set_rules('image_kost','image_kost');



		if ($this->form_validation->run() == false) {
   			$this->load->view('input', $data);
  		} else {
   			$this->insert->daftar();
				if ($this) {
     			//$this->session->set_flashdata('message','ditambahkan');
     			//echo "yeeeeeeee berhasil berhasil horeeee";
     			$this->load->view('v_tampil');
   }
}
	function hapus($id){
		$where = array('id' => $id);
		$this->insert->hapus_data($where,'datakost');
		redirect('Crud/index');
	}

}
}
