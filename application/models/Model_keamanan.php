<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {

	public function getkeamanan()
	{
		$username = $this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}
