<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function register()
	{
		$result['provinces'] = $this->Menu->showProvinces();
		$this->load->view('register', $result);

	}

	public function login()
	{
		// print_r($result['user']);
		// foreach($user as $row) {

		// }
		$this->load->view('login');

	}

	// public function showAll()
	// {

	// }
}
