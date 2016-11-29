<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Home.html');
	}

	public function afficheconnexion()
	{
		$this->load->view('CoForm.php');
	}
}
