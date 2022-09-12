<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function company_profile()
	{
        $data['title'] = "Company Profile";
        $data['main_content'] = "pages/company_profile";
		$this->load->view('includes/template',$data);
	}

	public function our_clients()
	{
        $data['title'] = "Our Clients";
        $data['main_content'] = "pages/our_clients";
		$this->load->view('includes/template',$data);
	}
}
