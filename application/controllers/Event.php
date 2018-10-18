<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('V_event');		
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */