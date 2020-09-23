<?php defined('BASEPATH') or exit('No direct script access allowed');
class Menu_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	function getAllMenus()
	{
		$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
		$result = $this->db->get('menu');
		return $result;
	}

	// แสดงลิส จังหวัดในหน้า register
	function showProvinces()
	{
		$result = $this->db->get('provinces');
		return $result;
	}

	// เพิ่มศิษเก่าเข้า database
	function insertAlumni($result1,$result2,$result3)
	{
		$this->db->insert('user',$result1);
		$this->db->insert('address',$result2);
		$this->db->insert('history',$result3);
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
