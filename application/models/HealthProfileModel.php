<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HealthProfileModel extends My_Model {
 protected $table = 'oldfolkshome_healthprofile';
 protected $primary_key = 'ofh_resident_id';

 public function insert($dot)
		{
			$this->db->insert('oldfolkshome_healthprofile', $dot);
		}

// public function replace($dot){

// $dot = array(

//      	'ofh_health_blood_systolic' => $this->input->post('bp1'),
//      	'ofh_health_blood_diastolic' => $this->input->post('bp2'),
//      	'ofh_health_sugar' => $this->input->post('sugar'),
//      	'ofh_health_weight'=> $this->input->post('weight'),




// );
//      $this->db->replace('oldfolkshome_healthprofile', $dot);


// }

  
	/**
	* 
	*/
	


}

?>