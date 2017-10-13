<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
		$this->load->library('pagination');
		
	}

	
	
	public function type()
	{
		$data['type']=$this->User_model->getalltype();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/type',$data);
		$this->load->view('admin/script');

	}

	
	public function useradd()
	{

		$data['mainagent']=$this->User_model->getmainagentid();
		$data['usertype']=$this->User_model->getalltype();
       
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/useradd',$data);
		$this->load->view('admin/script');
	}
	public function userlist()
	{

		
		$data['users']=$this->User_model->getalluser();
		$data['usertype']=$this->User_model->getalltype();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/userlist',$data);
		$this->load->view('admin/script');
	}

    public function typedit()
	{
		$typeid=$_GET['typeid'];
		$data['typedit']=$this->User_model->getypedit($typeid);
		$data['type']=$this->User_model->getalltype();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/typedit',$data);
		$this->load->view('admin/script');
	}

	public function user_action()
	{
		$type=$_POST['type'];
		$addate=date('Y/m/d');

		$sql = ['usertype' =>$type,'date' =>$addate ];
		$this->User_model->user_action($sql);

		$this->session->set_flashdata("msg","<p class='alert alert-success'>User Type Adedd</p>");
            header('Location:'.base_url.'type');
    } 

    public function typedelete()
    {
         	$userid=$_GET['getdeleid'];
         	$this->User_model->getdelid($userid);
         	$this->session->set_flashdata("msg","<p class='alert alert-success'>User Type Deleted</p>");
            header('Location:'.base_url.'type');
    } 

    public function type_update()
    {

         	$this->User_model->typupdate();

         	$this->session->set_flashdata("msg","<p class='alert alert-success'>User Type Updated</p>");

         	header('Location:'.base_url.'type');
    } 

    public function user_check()
    {
      

        $type 	=$_POST['type'];
     	$parent =$_POST['parent_id'];
     	$fname	=$_POST['fname'];
     	$lname	=$_POST['lname'];
     	$phone	=$_POST['phone'];
     	$email 	=$_POST['email'];
     	$address=$_POST['address'];
        $pass   =$_POST['password'];
     	$addate=date('Y/m/d');

     
        $config['upload_path']   = './assets/images/User/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        $this->load->library('upload', $config);
            
        if(!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();

            $this->session->set_flashdata("msg",$error);

            header("Location:".base_url."useradd");

            }else{

            $session=$this->session->userdata("ID");
            $file=$this->upload->data();
            $imagename=$file['file_name'];

     	   $query = [
     		'type_id' =>$type,
     		'parent_id' =>$parent,
     		'fname' =>$fname,
     		'lname' =>$lname,
     		'phone' =>$phone,
     		'email' =>$email,
     		'status'=>1,
     		'address' =>$address,
            'user_image'=>$imagename,
     		'added_date' =>$addate,
     		'last_logindate' =>$addate,
     		'create_date' =>$addate,
     		'modify_date' =>$addate,
     		'password'	=>$pass,
     		'created_userid' =>$session];

     	$this->User_model->usercheck($query);
     	$this->session->set_flashdata("msg","<p class='alert alert-success'>User Added</p>");
            header('Location:'.base_url.'userlist');
            }
    }

    public function userdel()
    {

      	$userid=$_GET['userid'];
      	if($this->User_model->userdel($userid))
      	{

      	$this->session->set_flashdata("msg","<p class='alert alert-success'>Users Deleted Succefully</p>");
        unlink("assets/images/User/".$_GET['photo']);
        }else{
      	$this->session->set_flashdata("msg","<p class='alert alert-danger'>User already used</p>");
        }
      
        header('Location:'.base_url.'userlist');



    } 

    public function useredit()
    {

    	$userid=$_GET['useredit'];
		$data['useredit']=$this->User_model->getuseredit($userid);
		$data['mainagent']=$this->User_model->getmainagentid();
		$data['usertype']=$this->User_model->getalltype();

		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');		
		$this->load->view('admin/useredit',$data);
		$this->load->view('admin/script');
      	
    }

    public function user_update()
    {
    	$ueditid=$_POST['ueditid'];
    	$type 	=$_POST['type'];
     	$parent =$_POST['parent_id'];
     	$fname	=$_POST['fname'];
     	$lname	=$_POST['lname'];
     	$phone	=$_POST['phone'];
     	$email 	=$_POST['email'];
        $password=$_POST['password'];
     	$address=$_POST['address'];
     	$addate=date('Y/m/d');
     	
        $config['upload_path']   = './assets/images/User/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        $this->load->library('upload', $config);
            
        if(!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("msg",$error);
            header("Location:".base_url."useradd");
            }else{

        $file=$this->upload->data();
        $imagename=$file['file_name'];

     	$this->User_model->user_update($ueditid,$type,$parent,$fname,$lname,$phone,$email,$address,$addate,$password,$imagename);
     	$this->session->set_flashdata("msg","<p class='alert alert-success'>User Updated Succesfully</p>");
        header('Location:'.base_url.'userlist');
        }

    }

    public function supplier_list()
    {
       
        $data['users']=$this->User_model->getallsupplier();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/userlist',$data);
        $this->load->view('admin/script');
    }
    public function mainagent_list()
    {
       
        $data['users']=$this->User_model->getallmaingent();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/userlist',$data);
        $this->load->view('admin/script');
    }

    public function subagent_list()
    {
       
        $data['users']=$this->User_model->getallsubagent();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/userlist',$data);
        $this->load->view('admin/script');
    }

    public function normaluser_list()
    {
       
        $data['users']=$this->User_model->getallnormaluser();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/userlist',$data);
        $this->load->view('admin/script');
    }

}



	

	?>