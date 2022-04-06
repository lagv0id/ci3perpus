<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('muser');
		$this->load->library(array('form_validation', 'email', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if ($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('vabout');
	}
}
