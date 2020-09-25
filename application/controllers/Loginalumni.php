<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginalumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function sendlogin()
	{
		// $result['user'] = $this->Menu->showLogin();

		$this->form_validation->set_rules('u_email', 'Email', 'required');
		$this->form_validation->set_rules('u_pass', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {

			$u_email = $this->input->post('u_email');
			$u_pass = md5($this->input->post('u_pass'));

			$this->db->select('*');
			$this->db->from('user');
			$this->db->where(array('u_email' => $u_email, 'u_pass' => $u_pass));
			$query = $this->db->get();

			$user = $query->row();

			if ($user->u_email) {
				$this->session->set_flashdata("success", "เข้าสู่ระบบสำเร็จ");

				$_SESSION['id'] = $user->id;
				$_SESSION['u_tname'] = $user->u_tname;
				$_SESSION['u_fname'] = $user->u_fname;
				$_SESSION['u_lname'] = $user->u_lname;
				$_SESSION['u_email'] = $user->u_email;
				$_SESSION['u_pass'] = $user->u_pass;

				redirect("alumni/index", "refresh");
			} else {
				$this->session->set_flashdata("error", "ไม่มีชื่อศิษย์เก่านี้ โปรดลงทะเบียน");
			}
		} else {

		}
	}

	public function sendlogout()
	{
		$this->session->sess_destroy();
		redirect('alumni/login', 'refresh');
	}

	// public function showAll()
	// {

	// }
}
