<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insertalumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function adding1()
	{

		$config['upload_path'] = './public/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('u_picture')) {
			echo '<script> alert("รูปไม่ถูกต้อง !!") </script>';
		} else {
			$data1 = $this->upload->data();

			$filename = $data1['file_name'];
			$data1 = array(
				'id' => $this->input->post(""),
				'u_tname' => $this->input->post("u_tname"),
				'u_fname' => $this->input->post("u_fname"),
				'u_lname' => $this->input->post("u_lname"),
				'u_email' => $this->input->post("u_email"),
				'u_std' => $this->input->post("u_std"),
				'u_pass' => $this->input->post("u_pass"),
				'u_gen' => $this->input->post("u_gen"),
				'u_faculty' => $this->input->post("u_faculty"),
				'u_major' => $this->input->post("u_major"),
				'u_year' => $this->input->post("u_year"),
				'u_fb' => $this->input->post("u_fb"),
				'u_picture' => $filename
			);

			$result1 = $this->db->insert('user', $data1);

			$data2 = array(
				'id' => $this->input->post(""),
				'a_h_number' => $this->input->post("a_h_number"),
				'a_home' => $this->input->post("a_home"),
				'a_road' => $this->input->post("a_road"),
				'a_zone' => $this->input->post("a_zone"),
				'a_district' => $this->input->post("a_district"),
				'a_province' => $this->input->post("a_province"),
				'a_code' => $this->input->post("a_code"),
				'a_h_phone' => $this->input->post("a_h_phone"),
				'a_phone' => $this->input->post("a_phone")
			);

			$result2 = $this->db->insert('address', $data2);

			$data3 = array(
				'id' => $this->input->post(""),
				'h_type' => $this->input->post("show"),
				'h_workplace' => $this->input->post("h_workplace"),
				'h_h_home' => $this->input->post("h_h_home"),
				'h_home' => $this->input->post("h_home"),
				'h_road' => $this->input->post("h_road"),
				'h_zone' => $this->input->post("h_zone"),
				'h_district' => $this->input->post("h_district"),
				'h_province' => $this->input->post("h_province"),
				'h_postal' => $this->input->post("h_postal"),
				'h_h_phone' => $this->input->post("h_h_phone"),
				'h_phone' => $this->input->post("h_phone"),
				'h_position' => $this->input->post("h_position"),
				'h_salary' => $this->input->post("h_salary"),
				'h_email' => $this->input->post("h_email")
			);

			$result3 = $this->db->insert('history', $data3);

			if ($result1 && $result2) {
				$this->Menu->insertAlumni($result1,$result2,$result3);
				echo '<script> alert("สมัครสำเร็จ กรุณาเข้าสู่ระบบ !!") </script>';
				$this->load->view('login');
			} else {
				echo '<script> alert("เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง !!") </script>';
			}
		}
	}

	// public function showAll()
	// {

	// }
}
