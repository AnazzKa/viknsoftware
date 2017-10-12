<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Change_model');
		$this->load->library('session');
		$this->load->library('pagination');
		
	}

	public function change_password()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/changepass');
		$this->load->view('admin/script');
		
	}

	public function pass_action()
	{
		$old=$_POST['old'];
		$new=$_POST['new'];
		$confirm=$_POST['confirm'];

		// echo '</pre>';
		// print_r($_POST);exit;

	if($this->Change_model->change_password($old,$new,$confirm))
	{
	
	
		
      	$this->session->set_flashdata("msg","<p class='alert alert-success'>Password changed Succefully</p>");
      }else{
      	$this->session->set_flashdata("msg","<p class='alert alert-danger'>Old Password is wrong..!!!</p>");
      }
     
     header('Location:'.base_url.'change_password');
      

  }
}

// }
?>