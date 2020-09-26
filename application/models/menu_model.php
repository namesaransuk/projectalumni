<?php defined('BASEPATH') or exit('No direct script access allowed');
class Menu_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	function editAlumni($data1, $data2, $data3)
	{
		$id = $_SESSION['id'];
		$this->db->where('id', $id);
		$this->db->update('user', $data1);
		$this->db->update('address', $data2);
		$this->db->update('history', $data3);
	}

	function editImgAlumni($data4)
	{
		$id = $_SESSION['id'];
		$this->db->where('id', $id);
		$this->db->update('user', $data4);
	}

	function showAlumni()
	{
		$result = $this->db->get('user');
		return $result;
	}

	function showDataAlumni()
	{
		$id = $_SESSION['id'];
		// $this->db->select('*');
		// $this->db->from('(`address` INNER JOIN `user` ON user.id=address.id) INNER JOIN history ON user.id = history.id');
		// $this->db->where('user.id = '.$id.' AND address.id = '.$id.' AND history.id = '.$id.';');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('address', 'address.id = user.id')
			->join('history', 'history.id = user.id');
		$this->db->where(array('user.id' => $id, 'address.id' => $id, 'history.id' => $id));

		$result = $this->db->get();
		return $result;
	}


	// แสดงลิส จังหวัดในหน้า register
	function showProvinces()
	{
		$result = $this->db->get('provinces');
		return $result;
	}

	function showLogin()
	{
		$this->db->select('u_email, u_pass');
		$result = $this->db->get('user');
		return $result;
	}

	// เพิ่มศิษเก่าเข้า database
	function insertAlumni($data1, $data2, $data3)
	{
		$this->db->insert('user', $data1);
		$this->db->insert('address', $data2);
		$this->db->insert('history', $data3);
	}

	function getAllMenus()
	{
		$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
		$result = $this->db->get('menu');
		return $result;
	}

	function menu_delete($id)
	{
		$this->db->where('menu_id', $id);
		$this->db->delete('menu');
	}

	function menu_edit($mid)
	{
		$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
		$result = $this->db->get_where('menu', array('menu_id' => $mid));
		return $result;
	}

	function menu_update($data, $menu_id)
	{
		$this->db->where('menu_id', $menu_id);
		$this->db->update('menu', $data);
	}
}
