<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Authentication extends CI_Controller {

public function __construct()
{		
parent::__construct();
$this->load->library('form_validation');
$this->load->model('user_model');
if (!isset($_SESSION)) session_start();
}


public function index() 
{
$this->load->view('login_form');
}


// public function login()
// {
// $this->form_validation->set_rules('username', 'Username', 'trim|required');
// $this->form_validation->set_rules('password', 'Password', 'trim|required');

// if ($this->form_validation->run() == FALSE) {

// if(isset($_SESSION['logged_in'])){

// $msg['type'] = 'success';
// $msg['strong'] = 'Success: ';
// $msg['message'] = "You are now logged in";
// $this->load->view('template/alert', $msg);
				
// redirect('main/index', 'refresh');

// } else {

// $data['title'] = 'Login';
// $this->load->view('template/header', $data);
// $this->load->view('template/navbar');
// $data['display'] = '0';
// $this->load->view('login' ,$data);
// // $this->load->view('template/copyright');
// $this->load->view('template/footer');
// }

// } else {

// $data = array
// (
// 'username' => $this->input->post('username'),
// 'password' => $this->input->post('password')
// );
// $result = $this->user_model->login($data);

// if ($result == TRUE)
// {

// $where = array
// (
// 'ofh_user_name' => $this->input->post('username')
// );

// $result = $this->user_model->select('*', $where, null, null);
// $session_data = array
// (
// 'username' => $result[0]->ofh_user_name,
// 'type' => $result[0]->ofh_user_type
// );
// $_SESSION['logged_in'] = $session_data;
				
// redirect('main/index', 'refresh');
				
// } else {

// $data['title'] = 'Login';
// $this->load->view('template/header', $data);
// $this->load->view('template/navbar');

// // $msg['type'] = 'danger';
// // $msg['strong'] = 'Error: ';
// // $msg['message'] = "Sorry You are not logged in. Invalid Username or Password";
// // $this->load->view('template/alert', $msg);

// $data['display'] = '1';
// $this->load->view('login' ,$data);
// $this->load->view('template/footer');
// }
// }
// }


public function logout() 
{
$_SESSION['logged_in'] = NULL;
unset($_SESSION['logged_in']);
// redirect('main/index' ,' refresh' );
redirect ('authentication/login' , 'refresh');
}



public function ForgotPassword()
	{
	$data['title'] = 'Forgot Password';
	$this->load->view('template/header' ,$data);
	$this->load->view('template/navbar');
	$this->load->view('forgotpassword');
	$this->load->view('template/footer');		
	}
		
	
public function send_mail() { 

	$config = Array
	(
	'protocol' => 'smtp',
	'smtp_host' => 'ssl://smtp.googlemail.com',
	'smtp_port' => 465,
	'smtp_user' => 'darulinsyirah2.0@gmail.com',
	'smtp_pass' => 'tash2017',
	'mailtype'  => 'html', 
	'charset'   => 'iso-8859-1'
	);

	$this->load->library('email', $config);
	$this->email->set_newline("\r\n");
	$from_email = "darulinsyirah2.0@gmail.com"; 
	$to_email = $this->input->post('email'); 
	   
	//Load email library 
	$this->load->library('email'); 
	$this->email->from($from_email, 'Darul Insyirah'); 
	$this->email->to($to_email);
	$this->email->subject('Recovery Password'); 

	$this->email->message('

	Dear User,

	You recently, request for your password.
	Here is your password

	********.

	Regards,

	 Darul Insyirah Team.

	'); 
	 
	   
	//Send mail 
	if($this->email->send())
	{ 
	$data['title'] = 'Forgot Password';
	$this->load->view('template/header' ,$data);
	$this->load->view('template/navbar');
	$data['display'] = '3';
	$this->load->view('email_success', $data);
	$this->load->view('template/footer');
	}else{ 
	$data['display'] = '4';
	$this->load->view('email_error', $data); 
	}
	
}
}

?>