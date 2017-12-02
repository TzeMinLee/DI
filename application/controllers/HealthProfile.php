<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 class HealthProfile extends CI_Controller { 
  public function __construct()   
  {   
    parent::__construct();   
     $this->load->model('HealthProfileModel'); 
  } 
  public function index() 
   {   
    $this->read();  
   } 

   public function HealthProfileEdit()
   {
    $data['title'] = 'Health Profile';   $this->load->view('template/header', $data);   
    $this->load->view('template/navbar_heir'); 
 
    $data['results'] = $this->HealthProfileModel->select('*', null, null, null); 
    $total_row = count($data['results']);   
    $data['total'] = $total_row;  
    $this->load->view('HealthProfileEdit', $data);
    $this->load->view('template/footer');
    // $dot['total'] = '$total_row';
    // $this->load->model('HealthProfileModel', $dot);
   }

    public function insert()
    {

        $this->HealthProfileModel->insert
        ([
           
       ' ofh_health_blood_systolic' => $this->input->post('bp1'),
       'ofh_health_blood_diastolic' => $this->input->post('bp2'),
       'ofh_health_sugar' => $this->input->post('sugar'),
       'ofh_health_weight'=> $this->input->post('weight'),
        ]);
    }

   // public function update(){

   // this->HealthProfileModel->update





   // }

  function read()   
  {  
   $data['title'] = 'Health Profile';   
   $this->load->view('template/header', $data);  
   $this->load->view('template/navbar_heir'); 
   $data['results'] = $this->HealthProfileModel->select('*', null, null, null); 
    $total_row = count($data['results']);  
     $data['total'] = $total_row;  
     $this->load->view('HealthProfileView', $data); 
     $this->load->view('template/footer');
     
    } 
}
        
function detail() 
{
    if($this->uri->segment(3))
        $id = ($this->uri->segment(3)) ;
    else
        $this-read();

    if ($this->HealthProfileModel->validate_id($id) == true) 
    {
        $data['title'] = 'Health Profile';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');

        $select = array('ofh_resident_id' => $id);
        $data['results'] = $this->HealthProfileModel->select('*', $select, null, null);
        $this->load->view('HealthProfileView', $data);

        
        
    }
}

function edit() 
{
    $error = false;
    if ($this->input->post('form-submitted') == "edit") 
    {
            // if ($error == false)
            // {
                
                $data = array(
                'ofh_health_blood_systolic' => $this->input->post("bp1"),
                'ofh_health_blood_diastolic ' => $this->input->post("bp2"),
                'ofh_health_sugar' => $this->input->post("sugar"),
                'ofh_health_weight' => $this->input->post("weight"),
                'ofh_health_height' => $this->input->post("height"),
                'ofh_health_mc_date' => $this->input->post("date"),
                'ofh_health_medicine_1' => $this->input->post("md1"),
                'ofh_health_medicine_2' => $this->input->post("md2"),
                'ofh_health_medicine_3 ' => $this->input->post("md3"),
                
                );

                $this->HealthProfileModel->update($this->input->post("ofh_resident_id"), $data);
                $data['title'] = 'Health Profile';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $msg['type'] = 'success';
                $msg['strong'] = 'Done: ';
                $msg['message'] = "You had successfully edit ".$this->input->post("name")." information";
                $this->load->view('template/alert', $msg);
                
                $this->load->view('template/copyright');
                $this->load->view('template/footer');
            
        }
    else
    {
        if($this->uri->segment(3))
            $id = ($this->uri->segment(3)) ;
        else
            $this-read();

        $data['title'] = 'Edit Health Profile';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');

        $select = array('ofh_resident_id' => $id);
        $data['result'] = $this->HealthProfileModel->select('*', $select, null, null);
        
        $this->load->view('HealthProfileEdit', $data);
        $this->load->view('template/copyright');
        $this->load->view('template/footer');
    }   
    
    
}

