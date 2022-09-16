<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_Portal extends CI_Controller {

	public function index()
	{
		$data['page_name'] = 'job_portal';

	
		$this->load->view('header');
		$this->load->view('job_portal');
		$this->load->view('footer');
	
	}
}
