<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dailyactivities extends CI_Controller
{
	public function Add()
	{
		$this->load->model('dailyactivities_model');
	}

	public function Delete()
	{
		$this->load->model('dailyactivities_model');

		$id = $this->input->get('id');
		$this->dailyactivities_model->delete($id);
	}
}

?>