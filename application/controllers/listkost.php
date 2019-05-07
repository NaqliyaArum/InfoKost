<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listkost extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_kost');
	}

	public function index(){
		$this->load->database();
		$jumlah_data = $this->m_kost->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/listkost';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['datakost'] = $this->m_kost->data($config['per_page'],$from);
		$this->load->view('v_listkost',$data);
    }
    
    public function detail($id)
	{
		$data['item'] = $this->m_kost->view($id);
		$this->load->view('v_detailkost', $data);
    }
}
