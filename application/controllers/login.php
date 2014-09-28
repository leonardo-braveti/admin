<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function logar()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}
}

