<?php 
	class Application_model extends CI_Model
	{
		public function insert($data)
		{
			$this->db->insert('oldfolkshome_application', $data);
		}

		public function insertcheckbox($data)
		{
			$data = array
			(
        		'ofh_health_condition' => implode(",", $data)
 			);
		}
	}
 ?>