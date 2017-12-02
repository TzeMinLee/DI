.<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

	function login_user($username, $password)
	{
		$this->db->where('ofh_user_name', $username);
		$this->db->where('ofh_user_password', $password);
		$result = $this->db->get('oldfolkshome_user');

		if ($result->num_rows() == 1)
		{
			return $result->row(0)->ofh_user_type;
		}
		else
		{
			return false;
		}
	}
}

?>