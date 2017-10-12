<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_model extends CI_Model {

		var $db;
		function __construct() {
		parent::__construct();
		
		$this->db = $this->load->database('default', TRUE);//db connection
		}	

		public function change_password($old,$new,$confirm)
		{

		$user=$this->session->userdata("NAME");
		// echo "SELECT * FROM vk_users WHERE password='$old' AND fname='$user'";exit;
		$sql=$this->db->query("SELECT * FROM vk_users WHERE password='$old' AND fname='$user'");
		if($sql->num_rows() >0)
		
		 {
		
		$data=$this->db->query("UPDATE vk_users SET password='$confirm' WHERE fname='$user' ");
		return true;
		}else{


			return false;
		}
	}
}
	?>