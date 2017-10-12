<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session');
        $this->load->library('pagination');
        if($this->session->userdata("ID")=="")
        {
            $this->session->set_flashdata("msg","<p class='alert alert-danger'>unauthorised access!</p>");
            header("Location:".base_url."admin");
        }

    }

    public function login()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/home');
        $this->load->view('admin/script');

    }



}
