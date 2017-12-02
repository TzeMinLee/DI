<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('logged_in'))
		{
			redirect("Main/home");
		}
		$data['title'] = "Login - Darul Insyirah";
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function home()
	{
		$data['title'] = "Home - Darul Insyirah";
		$this->load->view('template/header', $data);
		$this->load->model('dailyactivities_model');
		$data['results'] = $this->dailyactivities_model->select();
		if ($this->session->userdata('usertype') == "staff")
		{
			$this->load->view('template/navbar_staff');
			$this->load->view('home_staff', $data);
		}
		else if ($this->session->userdata('usertype') == "heir")
		{
			$this->load->view('template/navbar_heir');
			$this->load->view('home_heir', $data);
		}
		else
		{
			redirect();
		}
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = array(
				'errors'=>validation_errors()
				);
			$this->session->set_flashdata($data);

			redirect();
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('user_model');
			$usertype = $this->user_model->login_user($username, $password);

			if ($usertype)
			{
				$user_data = array('username'=>$username, 'usertype'=>$usertype, 'logged_in'=>true);

				$this->session->set_userdata($user_data);

				redirect("Main/home");
			}
			else
			{
				$this->session->set_flashdata('login_failed', '<p>Your username and/or password is invalid</p>');

				redirect();
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect();
	}
}

?>