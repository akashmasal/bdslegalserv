<?php
date_default_timezone_set("Asia/Kolkata");
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Blogmodel");
    }

    public function index()
    {
        $data['title'] = "Blogs";
        $data['main_content'] = "pages/blog_right_sidebar";
        $this->load->view("includes/template", $data);
    }

    // public function blog2()
    // {
    //     $data['title'] = "Blogs";
    //     $data['main_content'] = "pages/blog2";
    //     $this->load->view("includes/template", $data);
    // }

    // public function blog3()
    // {
    //     $data['title'] = "Blogs";
    //     $data['main_content'] = "pages/blog3";
    //     $this->load->view("includes/template", $data);
    // }

    public function addblogview()
    {
        $data['title'] = "Add Blog Page";
        $data['main_content'] = "pages/addblog";
        $this->load->view("includes/template", $data);
    }


    public function addblog()
    {
        $this->form_validation->set_rules("blog_author_name", "Author Name", "required");
        $this->form_validation->set_rules("blog_heading", "Blog Title", "required");
        $this->form_validation->set_rules("blog_short_description", "Blog Short Description", "required");
        $this->form_validation->set_rules("blog_content", "Blog Content", "required");

        if ($this->form_validation->run()) {
            $config['upload_path']          = './assets/uploads';
            $config['allowed_types']        = 'png|jpeg|jpg|gif';
            // $config['allowed_types']        = 'gif|jpg|png|jpeg';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('blog_banner')) {
                $data = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $data['error']);
                redirect(base_url('blog/addblogview'));
            } else {
                $data = array('upload_data' => $this->upload->data());
                if ($data) {
                    $authorname = $this->input->post('blog_author_name');
                    $blogtitle = $this->input->post("blog_heading");
                    $blog_short_description = $this->input->post("blog_short_description");
                    $blog_content = $this->input->post("blog_content");
                    $attachment = "assets/uploads/" . $data['upload_data']['file_name'];
                    $data = array(
                        'blog_author' => $authorname,
                        'blog_header' => $blogtitle,
                        'blog_short_description' => $blog_short_description,
                        'blog_content' => $blog_content,
                        'blog_image' => $attachment,
                        'created_at' => date('Y-m-d h:i:sa')
                    );
                    $add = $this->Blogmodel->add($data);
                    if ($add) {
                        $this->session->set_flashdata('success', 'Blog Added Successfully');
                        redirect(base_url('blog/addblogview'));
                    } else {
                        $this->session->set_flashdata('error', 'Failed To Add Blog');
                        redirect(base_url('blog/addblogview'));
                    }
                }
            }
        } else {
            $data = array(
                "error" => validation_errors()
            );
            $this->session->set_flashdata("error", $data['error']);
            redirect(base_url("blog/addblogview"));
        }
    }


    public function getBlog()
    {
        // $blog = $this->Blogmodel->getBlog();
        // echo "<pre>";
        // print_r($blog);
        // die;
        $data['blogdata'] = $this->Blogmodel->getBlog();
        $data['title'] = "Blogs";
        $data['main_content'] = "pages/blog_right_sidebar";
        $this->load->view("includes/template", $data);
        
    }
}
