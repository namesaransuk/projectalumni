<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Updatealumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function edit1()
	{

		$data1 = array(
			'u_tname' => $this->input->post("u_tname"),
			'u_fname' => $this->input->post("u_fname"),
			'u_lname' => $this->input->post("u_lname"),
			'u_email' => $this->input->post("u_email"),
			'u_std' => $this->input->post("u_std"),
			'u_pass' => md5($this->input->post("u_pass")),
			'u_gen' => $this->input->post("u_gen"),
			'u_faculty' => $this->input->post("u_faculty"),
			'u_major' => $this->input->post("u_major"),
			'u_year' => $this->input->post("u_year"),
			'u_fb' => $this->input->post("u_fb"),
		);

		$data2 = array(
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

		$data3 = array(
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

		$this->Menu->editAlumni($data1, $data2, $data3);

		if ($_FILES['u_picture']['name'] != "") {
			$config['upload_path'] = './public/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2000;
			$config['max_width'] = 1500;
			$config['max_height'] = 1500;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('u_picture')) {

				$data4 = $this->upload->data();
				$filename = $data4['file_name'];

				$data4 = array(
					'u_picture' => $filename
				);

				$this->Menu->editImgAlumni($data4);

				if ($data4) {
					echo '<script> alert("Update สำเร็จ !!!") </script>';
					redirect('alumni/alumnilist', 'refresh');
				} else {
					echo '<script> alert("อัพเดตไม่ได้ โปรดลองอีกครั้ง") </script>';
					redirect('alumni/profile', 'refresh');
				}
			}
		} else {
			echo '<script> alert("Update สำเร็จ !!!") </script>';
			redirect('alumni/alumnilist', 'refresh');
		}



		// $config['upload_path'] = './public/upload/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size'] = 2000;
		// $config['max_width'] = 1500;
		// $config['max_height'] = 1500;

		// $this->load->library('upload', $config);

		// if (!$this->upload->do_upload('u_picture')) {
		// 	echo 'รูปไม่ถูกต้อง !!';
		// } else {
		// 	$data1 = $this->upload->data();
		// 	$filename = $data1['file_name'];

		// 	$data1 = array(
		// 		'u_tname' => $this->input->post("u_tname"),
		// 		'u_fname' => $this->input->post("u_fname"),
		// 		'u_lname' => $this->input->post("u_lname"),
		// 		'u_email' => $this->input->post("u_email"),
		// 		'u_std' => $this->input->post("u_std"),
		// 		'u_pass' => md5($this->input->post("u_pass")),
		// 		'u_gen' => $this->input->post("u_gen"),
		// 		'u_faculty' => $this->input->post("u_faculty"),
		// 		'u_major' => $this->input->post("u_major"),
		// 		'u_year' => $this->input->post("u_year"),
		// 		'u_fb' => $this->input->post("u_fb"),
		// 		'u_picture' => $filename
		// 	);

		// 	$data2 = array(
		// 		'a_h_number' => $this->input->post("a_h_number"),
		// 		'a_home' => $this->input->post("a_home"),
		// 		'a_road' => $this->input->post("a_road"),
		// 		'a_zone' => $this->input->post("a_zone"),
		// 		'a_district' => $this->input->post("a_district"),
		// 		'a_province' => $this->input->post("a_province"),
		// 		'a_code' => $this->input->post("a_code"),
		// 		'a_h_phone' => $this->input->post("a_h_phone"),
		// 		'a_phone' => $this->input->post("a_phone")
		// 	);

		// 	$data3 = array(
		// 		'h_type' => $this->input->post("show"),
		// 		'h_workplace' => $this->input->post("h_workplace"),
		// 		'h_h_home' => $this->input->post("h_h_home"),
		// 		'h_home' => $this->input->post("h_home"),
		// 		'h_road' => $this->input->post("h_road"),
		// 		'h_zone' => $this->input->post("h_zone"),
		// 		'h_district' => $this->input->post("h_district"),
		// 		'h_province' => $this->input->post("h_province"),
		// 		'h_postal' => $this->input->post("h_postal"),
		// 		'h_h_phone' => $this->input->post("h_h_phone"),
		// 		'h_phone' => $this->input->post("h_phone"),
		// 		'h_position' => $this->input->post("h_position"),
		// 		'h_salary' => $this->input->post("h_salary"),
		// 		'h_email' => $this->input->post("h_email")
		// 	);

		// 	if ($data1 && $data2 && $data3) {
		// 		$this->Menu->editAlumni($data1, $data2, $data3);
		// 		$result = $this->db->get('user');
		// 		$user = $result->row();

		// 		$_SESSION['id'] = $user->id;
		// 		$_SESSION['u_tname'] = $user->u_tname;
		// 		$_SESSION['u_fname'] = $user->u_fname;
		// 		$_SESSION['u_lname'] = $user->u_lname;
		// 		$_SESSION['u_email'] = $user->u_email;
		// 		$_SESSION['u_pass'] = $user->u_pass;

		// 		echo '<script> alert("Update สำเร็จ !!!") </script>';
		// 		redirect('alumni/alumnilist','refresh');
		// 	} else {
		// 		echo '<script> alert("เกิดข้อผิดพลาด !!!") </script>';
		// 		redirect('alumni/profile','refresh');

		// 	}
		// }
	}
}
