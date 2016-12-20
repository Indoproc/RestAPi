<?php
	//File products_model.php
	class Model_department extends CI_Model  {
	

	function getAllmenu_groups_access() 
	{
		//Variable pendukung query	
	
		//select semua data yang ada pada table
		$this->db->select('a.id_menu_groups_access, c.nm_menu_groups, c.id_menu_groups, b.nm_level, a.id_level, a.active');
		$this->db->from('ref_menu_groups_access a');
		$this->db->join('ref_level b','a.id_level = b.id_level', 'left');
		$this->db->join('ref_menu_groups c','a.id_menu_groups = c.id_menu_groups','left');
		return $this->db->get();
	}

    
	}
