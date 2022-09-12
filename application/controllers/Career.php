<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Careermodel');
	}


	public function index()
	{
		$data['title'] = "Career";
		$data['main_content'] = "pages/career";
		$this->load->view('includes/template', $data);
	}

	public function send()
	{
		$this->form_validation->set_rules("name", "name", "required");
		$this->form_validation->set_rules("email", "email", "required");
		$this->form_validation->set_rules("phone", "phone", "required");
		$this->form_validation->set_rules("message", "message", "required");
		if ($this->form_validation->run()) {
			$config['upload_path']          = './assets/uploads';
			$config['allowed_types']        = 'docx|pdf|doc';
			// $config['allowed_types']        = 'gif|jpg|png|jpeg';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('attachment')) {
				$data = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $data['error']);
				redirect(base_url('career'));
			} else {
				$data = array('upload_data' => $this->upload->data());
				if ($data) {
					// echo '<pre>';
					// print_r($data);
					// die;
					$name = $this->input->post('name');
					$email = $this->input->post("email");
					$phone = $this->input->post("phone");
					$message = $this->input->post("message");
					$attachment = "assets/uploads/" . $data['upload_data']['file_name'];
					$data = array(
						'name' => $name,
						'email' => $email,
						'phone' => $phone,
						'message' => $message,
						'attachment' => $attachment,
						'created_at' => date('Y-m-d h:i:sa')
					);
					$add = $this->Careermodel->add($data);
					if ($add) {
						$this->session->set_flashdata('success', 'User Data Added Successfully');
						redirect(base_url('career'));
					} else {
						$this->session->set_flashdata('error', 'Failed To Add Data');
						redirect(base_url('career'));
					}
				}
			}
		} else {
			$data = array('error' => validation_errors());
			$this->session->set_flashdata('error', $data['error']);
			redirect(base_url('career'));
		}
	}

	function sendMail()
	{
		$message = '';
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'akashmasal64@gmail.com', // change it to yours
			'smtp_pass' => 'Goldberg@#213786.', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);


		$this->load->library('email', $config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->from('xxx@gmail.com'); // change it to yours
		$this->email->to('xxx@gmail.com'); // change it to yours
		$this->email->subject('Resume from JobsBuddy for your Job posting');
		$this->email->message($message);
		if ($this->email->send()) {
			echo 'Email sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
