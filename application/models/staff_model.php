<?php   
defined('BASEPATH') OR exit('No direct script access allowed');   
class Staff_Model extends CI_Model {       
	protected $table = 'oldfolkshome_user';     
	protected $primary_key = 'ofh_user_id'; 

	 // function staff_model() {
  //        parent::Mymodel();
  //    }
	function __construct()      
  {         
     parent::__construct();  
     $this->load->database();
     
 } 
 public function get_infos()
 {

     $query=$this->db->get('oldfolkshome_user');
      //$this->db->where($this->primary_key, $user_id);
     $result=$query->result_array();
     return $result;
 }
 public function get_staffDetails($user_id)
 {
  $this->db->where($this->primary_key, $user_id);
  $query=$this->db->get('oldfolkshome_user');
  
       //$query=$this->db->select('*')->from('oldfolkshome_user')->where('ofh_user_id', $user_id);
  $result=$query->result();
  return $result;
}

} 
?>