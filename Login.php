<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $data;
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
		$this->load->library('session');
		
		
		$this->data["base_url"] = base_url();
	}

	public function index()
	{

		$this->data["a"] = 'a';
		$this->data["b"] = 'b';
		$this->data["c"] = 'c';
		$this->data["d"] = 'd';
		$this->data["e"] = 'e';
		$this->parser->parse('login', $this->data);
	}

	public function checkLogin() {
		
		$data = $this->input->get(NULL);
		$this->load->model('Login_model', 'Login');

		$result = $this->Login->checkLoginDb($data);

		if ($result['result'] == true) {
			$this->session->set_userdata('name', 'admin');
		}
		echo json_encode($result);
	}
}
