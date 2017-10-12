<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('session');
		$this->load->library('pagination');
		
	}

	public function index()
	{
		$this->load->view('admin/head');
		// $this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/script');
		
	}

	public function login_action()
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];

		$log=$this->Login_model->login_action($user,$pass);
		if($log==true)
		{
			header('Location:'.base_url.'Dashboard');
		}else{
			$this->session->set_flashdata("msg","<p class='alert alert-danger'>Sorry Invalid Login!<p>");
			header("Location:".base_url."admin");
		}

	}

	public function logout()
	{
		$sql=array("ID"=>"","NAME"=>"");
		$this->session->set_userdata($sql);
		$this->session->set_flashdata("msg","<p class='alert alert-success'>You are logged out successfully!</p>");
		header("Location:".base_url."admin");

	}

	

}
?>