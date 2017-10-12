<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_agent extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_agent_model');
        $this->load->model('Card_model');
        $this->load->library('session');
        $this->load->library('pagination');

    }
    public function main_cards_view()
    {

        $data['allcards'] = $this->Card_model->getallcards();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('main_agent/view_our_cards',$data);
        $this->load->view('admin/footer');
        $this->load->view('admin/script');
    }
    public function purchase_card()
    {
        $quantity = $_GET['quantity'];
        $card_id = $_GET['card_id'];
        $price = $_GET['price'];
        $total = $_GET['total'];
        $addate = date('Y/m/d');
        $logid=1;

        $query = [
            'user_id' => $logid,
            'card_id' => $card_id,
            'quantity' => $quantity,
            'price' => $price,
            'total' => $total,
            'pur_date' => $addate,
            ];

        $this->Main_agent_model->card_purchase($query);
        $this->session->set_flashdata("msg", "<p class='alert alert-success'>Card Purchase Sucessfully</p>");
        header('Location:' . base_url . 'main_cards_view');

    }

    public function mainagent_add()
    {
    
        
        $data['usertype']=$this->Main_agent_model->getalltype();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/mainagent_add',$data);
        $this->load->view('admin/script');

    }

    public function mainagent_list()
    {
        $session=$this->session->userdata("ID");
        $data['users']=$this->Main_agent_model->getalluser($session);
        $data['usertype']=$this->Main_agent_model->getalltype();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/userlist',$data);
        $this->load->view('admin/script');

    }

    public function mainagent_action()
    {
        
        $type   =$_POST['type'];
        $fname  =$_POST['fname'];
        $lname  =$_POST['lname'];
        $phone  =$_POST['phone'];
        $email  =$_POST['email'];
        $address=$_POST['address'];
        $addate=date('Y/m/d');
        $user=$this->session->userdata("ID");

        // echo $user;exit;
        // echo "<pre>";
        // print_r($_POST);exit();

  $query = [
            'type_id' =>$type,
            'parent_id' =>$user,
            'fname' =>$fname,
            'lname' =>$lname,
            'phone' =>$phone,
            'email' =>$email,
            'status'=>1,
            'address' =>$address,
            'added_date' =>$addate,
            'last_logindate' =>$addate,
            'create_date' =>$addate,
            'modify_date' =>$addate,
            'password'  =>12345,
            'created_userid' =>$user];
    

    $this->Main_agent_model->mainagentadd($query);
    $this->session->set_flashdata("msg","<p class='alert alert-success'>User Successfully added</p>");

    header("Location:".base_url."mainagent_list");
    
    

    }

    public function mainagent_del()
    {
    $userid=$_GET['userid'];
    if($this->Main_agent_model->mianagent_del($userid))
    {

    $this->session->set_flashdata("msg","<p class='alert alert-success'>Users Deleted Succefully</p>");
    }else{
    $this->session->set_flashdata("msg","<p class='alert alert-danger'>User already used</p>");
    }
      
    header('Location:'.base_url.'mainagent_list');


    }

    public function mainagent_edit()
    {
        $userid=$_GET['useredit'];
        $data['mainagent_edit']=$this->Main_agent_model->get_mainagent_edit($userid);
        $data['usertype']=$this->Main_agent_model->getalltype();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/mainagent_edit',$data);
        $this->load->view('admin/script');

    }
     public function user_update()
    {
        $ueditid=$_POST['ueditid'];
        $type   =$_POST['type'];
        $fname  =$_POST['fname'];
        $lname  =$_POST['lname'];
        $phone  =$_POST['phone'];
        $email  =$_POST['email'];
        $address=$_POST['address'];
        $addate=date('Y/m/d');
        // print_r($_POST);exit;


        $this->Main_agent_model->mainagent_update($ueditid,$type,$fname,$lname,$phone,$email,$address,$addate);
        $this->session->set_flashdata("msg","<p class='alert alert-success'>User Updated Succesfully</p>");
      header('Location:'.base_url.'mainagent_list');

    }

}