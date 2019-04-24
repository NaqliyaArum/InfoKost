<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert extends CI_Model {
	public function TambahUser()
	{
		$data = [
			"First" => $this->input->post('first', true),
			"Last" => $this->input->post('last', true),
			"gender" => $this->input->post('Gender', true),
			"Alamat" => $this->input->post('alamat', true),
			"Handphone" => $this->input->post('handphone', true),
			"Password" => $this->input->post('password', true),
		];
		$this->db->insert('user',$data);
	}
	public function Daftar(){
    
    if(isset($_POST['submit'])){
    	$jk_input = $_POST['jk_input'];
		$name_input = $_POST['name_input'];
		$loc_input = $_POST['loc_input'];
		$fk_input = $_POST['fk_input'];
		$Luas_input = $_POST['Luas_input'];
		$mnd_input = $_POST['mnd_input'];
		$fp_input = $_POST['fp_input'];
		$al_input = $_POST['al_input'];
		$dpk_input = $_POST['dpk_input'];
		$kbs_input = $_POST['kbs_input'];
		$kl_input = $_POST['kl_input'];
		$kb_input = $_POST['kb_input'];
		$dk_input = $_POST['dk_input'];

		$this->db->insert('datakost',$data);

    	// $get = $conn -> query("INSERT INTO `datakost`(jk_input, name_input, loc_input, fk_input, Luas_input, mnd_input, fp_input, al_input , dpk_input, kbs_input, kl_input, kb_input, dk_input) VALUES ('$jk_input','$name_input','$loc_input','$fk_input','$Luas_input','$mnd_input','$fp_input','$al_input' ,'$dpk_input','$kbs_input','$kl_input','$kb_input','$dk_input')");
    	// if($get){
    	// 	echo "selamat bergabungg";   		
    	// }
    	// else{
    	// 	echo "maaf kostanmu belum terdaftar";
    	// }
	}
	}
}
?>
