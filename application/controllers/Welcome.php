<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
   	{
        parent::__construct();

        $this->load->model('insert');
		$this->load->library('form_validation');
   	}
	public function index()
	{
		$this->load->view('login');

	}
	public function register()
	{
		$data['judul'] = 'Registrasi';
		$this->form_validation->set_rules('fisrt','First','required');
		$this->form_validation->set_rules('last','Last','required');
		$this->form_validation->set_rules('Gender','gender','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('handphone','Handphone','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() != false){
			$this->insert->GetUser();
			header("Location: ".base_url('/index.php/Welcome/index'));
		}else{
			$this->load->view('register',$data);
		}
	}	
	public function inputdata()
	{
		$this->load->view('input');
	}

}

