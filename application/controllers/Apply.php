<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Apply residency - Darul Insyirah";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('application');
        $this->load->view('template/footer');
    }

    public function submit()
    {
        $this->load->model('application_model');

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');

        $this->application_model->insert
        ([
            'ofh_application_date' => $date,
            'ofh_resident_name' => $this->input->post('rn'),
            'ofh_resident_ic' => $this->input->post('ric'),
            'ofh_resident_age' => $this->input->post('rage'),
            'ofh_health_weight' => $this->input->post('rweight'),
            'ofh_health_height' => $this->input->post('rheight'),
            'ofh_health_condition' => $this->input->post('rhealthcondition'),
            'ofh_heir_name' => $this->input->post('hn'),
            'ofh_heir_ic' => $this->input->post('hic'),
            'ofh_heir_age' => $this->input->post('hage'),
            'ofh_heir_address' => $this->input->post('haddress'),
            'ofh_heir_occupation' => $this->input->post('hocc'),
            'ofh_heir_email' => $this->input->post('hemail')
        ]);

        $data['title'] = "Apply residency - Darul Insyirah";
        $data['type'] = "success";
        $data['strong'] = "Success!";
        $data['message'] = "Application submitted";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/alert', $data);
        $this->load->view('application');
        $this->load->view('template/footer');
    }
}
?>