<?php
class C_akun extends CI_Controller{
	public function index()
	{
		$data['user'] = $this->insert->editAkun()->result();
		$this->load->view('profil',$data);
	}
}
