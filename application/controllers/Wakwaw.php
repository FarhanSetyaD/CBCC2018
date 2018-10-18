<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wakwaw extends CI_Controller {

	public function index()
	{
		$this->load->view('V_login');
	}
	public function login()
	{
		$username = $this->input->post('usern');
		$password = $this->input->post('passw');
		if($username=="Heroes" && $password=="ikantongkol"){
			$array = array(
				'status' => "logged in"
			);
			
			$this->session->set_userdata($array);
			redirect(base_url('index.php/ccrud'),'refresh');
		}
		else{
			echo '<script>alert("Username atau password salah");</script>';
			redirect(base_url('index.php'),'refresh');
		}
	}
	public function LogOut()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/Wakwaw'));
	}

}

/* End of file Wakwaw.php */
/* Location: ./application/controllers/Wakwaw.php */