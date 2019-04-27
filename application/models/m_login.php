<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function login($no,$pass){
        $query= $this->db->query("select count(*) as exist from user "."where Handphone='$no' and Password='$pass'"); 
        return $query->row_array(); 
    }
    public function profile($no,$pass){
		$data = array();
		$options = array('Handphone' => $no,'Password' => $pass);
		$Q = $this->db->get_where('user',$options,1);
		if ($Q->num_rows() > 0) {
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
}