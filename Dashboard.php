<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $data;
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
        $this->load->library('session');
        
		
		$this->data["base_url"] = base_url();
	}

    public function dashboard() {

        $this->load->view('dashboard');
    }
}