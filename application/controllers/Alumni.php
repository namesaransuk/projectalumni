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
		$this->load->view('login');
	}

	public function alumnilist()
	{
		$result['user'] = $this->Menu->showAlumni();
		$this->load->view('alumnilist', $result);
	}

	public function information()
	{
		$result['user'] = $this->Menu->showDataAlumni();
		$this->load->view('information', $result);
	}

	public function profile()
	{
		$result['user'] = $this->Menu->showDataAlumni();
		$result['provinces'] = $this->Menu->showProvinces();
		$this->load->view('profile', $result);
	}

	public function search()
	{
		// $data = $this->input->post();

		// $data = $this->Manu->getSearchUsers($data);
	
		// echo json_encode($data);

		$data = $this->input->post('searchalumni');
		$result['user'] = $this->Menu->getSearchUsers($data);
		$this->load->view('alumnisearch', $result);
	}

	public function test()
	{
		// $postData = $this->input->post();

		// $data = $this->Manu->getSearchUsers($postData);
	
		// echo json_encode($data);
		$this->load->view('test');
	}

	// public function showAll()
	// {

	// }
}
