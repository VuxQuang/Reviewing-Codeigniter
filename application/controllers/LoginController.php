<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	
    public function index()
	{
		 $this->load->view('template/header');
		 $this->load->view('login/index');
		 	$this->load->view('template/footer');
	}
}
