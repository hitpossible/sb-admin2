<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    private $another_css;
    private $another_js;
	private $data;
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
        $this->load->library('session');

        $this->load->model('Dashboard_model', 'Dashboard');
		
		$this->data["base_url"] = base_url();

		$result['base_url'] = base_url();
		$result['site_url'] = site_url();
		// $data['csrf_token_name'] = $this->security->get_csrf_token_name();
		// $data['csrf_cookie_name'] = $this->config->item('csrf_cookie_name');

        $this->data = $result;
        $this->top_navbar_data = $result;
        $this->left_sidebar_data = $result;
	}

	protected function render_view($path)
    {
        $this->data['topbar'] = $this->parser->parse('templates/top_navbar', $this->top_navbar_data, TRUE);
        $this->data['left_sidebar'] = $this->parser->parse('templates/left_sidebar', $this->left_sidebar_data, TRUE);
        $this->data['page_content'] = $this->parser->parse($path, $this->data, TRUE);
        $this->data['another_css'] = $this->another_css;
        $this->data['another_js'] = $this->another_js;
        $this->parser->parse('templates/homepage', $this->data);
    }

    public function dashboard() {

        $this->load->database();
        // $this->another_js = '<script src="abc.js"></script>';
        $this->render_view('dashboard');
        // $this->load->view('dashboard');

    }

    public function showTable() {
        $this->another_js = "<script src='". base_url() ."assets/js/table.js'></script>";

        $this->data['table'] = $this->Dashboard->getProductAll();

        $this->render_view('showTable');
    }

    public function getProductAll() {
        $result = $this->Dashboard->getProductAll();
        echo json_encode($result);
    }

}