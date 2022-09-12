<?php 

class Contact extends CI_Controller{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        $this->load->model("Contactmodel");
    }

    public function index()
    {
        $data['title'] = "Contact Us";
        $data['main_content'] = "pages/contact";
        $this->load->view("includes/template",$data);
    }

    public function send()
    {
        $this->form_validation->set_rules("name","name","required|trim|min_length[2]|max_length[100]|xss_clean");
        $this->form_validation->set_rules("email","email","trim|required|valid_email|xss_clean");
        $this->form_validation->set_rules("phone","phone","trim|required|integer|min_length[10]|max_length[12]|xss_clean");
        $this->form_validation->set_rules("subject","subject","required|xss_clean");
        $this->form_validation->set_rules("message","message","required|xss_clean");

        if($this->form_validation->run())
        {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $subject = $this->input->post("subject");
            $message = $this->input->post("message");


            $data = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "subject" => $subject,
                "message" => $message,
                "created_at" => date("d-m-Y h:i:sa")
            );

            $add = $this->Contactmodel->add($data);

            if($add){
                $this->session->set_flashdata("success","data added");
                redirect(base_url("contact"));
            }
            else
            {
                $this->session->set_flashdata("errors","Failed To Add Data");
                redirect(base_url("contact"));
            }

        }
        else
        {
            $data = array(
                "errors" => validation_errors()
            );
            $this->session->set_flashdata("errors",$data['errors']);
            redirect(base_url("contact"));
        }
    }
}

?>