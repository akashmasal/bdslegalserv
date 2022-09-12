<?php

class Work_process extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function fcrp()
    {
        $data['title'] = "Free Consulation,Research & Planing";
        $data['main_content'] = "pages/fcrp";
		$this->load->view('includes/template',$data);
    }

    public function sign_a_contract()
    {
        $data['title'] = "Sign A Contract";
        $data['main_content'] = "pages/sign_a_contract";
		$this->load->view('includes/template',$data);
    }

    public function project_done()
    {
        $data['title'] = "Sign A Contract";
        $data['main_content'] = "pages/project_done";
		$this->load->view('includes/template',$data);
    }
}


?>