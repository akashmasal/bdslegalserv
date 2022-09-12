<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller {

	
	public function index()
	{
        $data['title'] = "BDSLegalserv";
        $data['main_content'] = "pages/business-op";
		$this->load->view('includes/template',$data);
	}
}
