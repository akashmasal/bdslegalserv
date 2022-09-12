<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
        $data['title'] = "BDSLegalserv";
        $data['main_content'] = "pages/home";
		$this->load->view('includes/template',$data);
	}
}
