<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 class Staff extends CI_Controller { 
  
  public function __construct()   
  {   
  	parent::__construct();  
  	 $this->load->model('staff_model');  
  	} 
  
  public function index()  
  {   
  	 $this->data['view_data']= $this->staff_model->get_infos();
     $this->load->view('staff_list', $this->data, FALSE); 
  } 
 
 public function details()
    {
      $user_id = ($this->uri->segment(3)) ;
      $user_id = $this->input->get('userid');
     $data['title'] = 'Staff';  
    $this->load->view('template/header', $data); 
    $this->load->view('template/navbar_staff'); 
    //echo 'ok';
    $image_arr = explode("/", "./users/ofh_user_pic.jpg");
    echo $image_name = end($image_arr);
    //$staffID=$_GET['user_id'];

     $data = array(
      'ofh_user_id'               => $this->input->post('ofh_user_id'),
      'ofh_user_name'             => $this->input->post('ofh_user_name'),
      'ofh_user_pic'              => $this->input->post('ofh_user_pic'),
      'ofh_user_age'              => $this->input->post('ofh_user_age'),
      'ofh_user_address'          => $this->input->post('ofh_user_address'),
      'ofh_user_ic'               => $this->input->post('ofh_user_ic'),
      'ofh_user_gender'           => $this->input->post('ofh_user_gender'),
      'ofh_user_password'         => $this->input->post('ofh_user_password'),
      'ofh_user_number'           => $this->input->post('ofh_user_number'),
      'ofh_user_email'            => $this->input->post('ofh_user_email'),
      'status'                    => 'Y');
    $data['results']=$this->staff_model->get_staffDetails($user_id);
    $this->load->view('staff_viewprofile', $data);
    $this->load->view('template/footer');
    }

  public function view()
  {
    

    $data['title'] = 'Staff';  
    $this->load->view('template/header', $data); 
    $this->load->view('template/navbar_staff'); 
    //echo 'ok';
     $data = array(
      'ofh_user_id'               => $this->input->post('ofh_user_id'),
      'ofh_user_name'             => $this->input->post('ofh_user_name'),
      'ofh_user_pic'              => $this->input->post('ofh_user_pic'),
      'ofh_user_password'         => $this->input->post('ofh_user_password'),
      'ofh_user_ic'               => $this->input->post('ofh_user_ic'),
      'ofh_user_number'           => $this->input->post('ofh_user_number'),
      'ofh_user_age'              => $this->input->post('ofh_user_age'),
      'ofh_user_email'            => $this->input->post('ofh_user_email'),
      'ofh_user_address'          => $this->input->post('ofh_user_address'),
      'ofh_user_gender'           => $this->input->post('ofh_user_gender'),
      'status'                    => 'Y');
    $data['result']=$this->staff_model->get_infos();
    $this->load->view('staff_list', $data);
    $this->load->view('template/footer');
  }
   public function edit($user_id)
    {
     $data['title'] = 'Staff';  
     $this->load->view('template/header', $data);
    $this->load->view('template/navbar_staff'); 

    $this->db->where($this->primary_key, $user_id);
    //echo 'ok';
     $data = array('ofh_user_id'     => $this->input->post('ofh_user_id'),
      'ofh_user_name'             => $this->input->post('ofh_user_name'),
      'ofh_user_password'         => $this->input->post('ofh_user_password'),
      'ofh_user_ic'               => $this->input->post('ofh_user_ic'),
      'ofh_user_number'           => $this->input->post('ofh_user_number'),
      'ofh_user_age'              => $this->input->post('ofh_user_age'),
      'ofh_user_email'            => $this->input->post('ofh_user_email'),
      'ofh_user_address'          => $this->input->post('ofh_user_address'),
      'ofh_user_gender'           => $this->input->post('ofh_user_gender'),
      'status'                    => 'Y');
    $data['result']=$this->staff_model->get_table($user_id);
    $this->load->view('staff_editprofile', $data);
    $this->load->view('template/footer');
    }
    
} 