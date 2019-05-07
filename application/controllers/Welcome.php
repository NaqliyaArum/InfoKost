<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('insert');
		$this->load->library('form_validation');
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$data['judul'] = 'Registrasi';
		$this->form_validation->set_rules('first','First','required');
		$this->form_validation->set_rules('last','Last','required');
		$this->form_validation->set_rules('Gender','gender','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('handphone','Handphone','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('register', $data);
		} else {
			$this->insert->TambahUser();
			if ($this) {
					redirect('login');
			}
		}
	}
	public function proses_login(){
        $no = $this->input->post('No');
        $pass = $this->input->post('Pass');
		$hasil= $this->m_login->login($no,$pass);
		if ($hasil['exist']>0) {
			$data = $this->m_login->profile($no,$pass);
			$data_sess = array(
				'first'=> $data['First'] ,
				'last' => $data['Last'],
				'Gender'=> $data['gender'],
				'alamat'=> $data['Alamat'],
				'No' => $data['Handphone'],
				'Pass' => $data['Password']
			);
			$this->session->set_userdata($data_sess);
			redirect('Crud/tampil');
		}
		else {
			$this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');			
			redirect('Welcome');
		}	
	}
	public function inputdata()
	{
		$this->load->view('input');
	}
	public function editakun($id)
	{
		$data['judul'] = 'Form Edit Data User';
		$this->form_validation->set_rules('First','First','required');
		$this->form_validation->set_rules('Last','Last','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('Handphone','Handphone','required');
		$this->form_validation->set_rules('Password','Password','required');

		if ($this->form_validation->run() == false) {
			$data['user'] = $this->M_akun->getUserById($id);
			$this->load->view('profil');

		} else {
			$this->db->where('id_user', $id);
			$this->M_akun->ubahDatUser($id);
			if ($this->db->affected_rows()) {
				$this->session->set_flashdata('flash','data changed succesfully');
				redirect('C_akun');
			} else {
				$this->session->set_flashdata('flash','data changed failed');
				redirect('C_akun');
			}
		}
	}
}

