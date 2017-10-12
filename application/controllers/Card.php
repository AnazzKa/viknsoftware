<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Card_model');
        $this->load->library('session');
        $this->load->library('pagination');

    }

//noufal
    public function cardtype()
    {
        $card['card']=$this->Card_model->getallcard();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/cardtype',$card);
        $this->load->view('admin/script');
    }
    public function cardedit()
    {
        $cardid=$_GET['cardid'];
        $data['cardedit']=$this->Card_model->getcardedit($cardid);
        $data['card']=$this->Card_model->getallcard();
        $this->load->view('admin/head');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/cardeditype',$data);
        $this->load->view('admin/script');
    }

    public function card_action()
    {
        $type=$_POST['type'];
        $addate=date('Y/m/d');

        $sql = ['cardtype' =>$type,'date' =>$addate ];
        $this->Card_model->card_action($sql);

        $this->session->set_flashdata("msg","<p class='alert alert-success'>Card Type Adedd</p>");
        header('Location:'.base_url.'cardtype');
    }

    public function cardelete()
    {
        $cardid=$_GET['cardeleid'];
        $this->Card_model->cardelid($cardid);
        $this->session->set_flashdata("msg","<p class='alert alert-success'>Card Type Deleted</p>");
        header('Location:'.base_url.'cardtype');
    }

    public function card_update()
    {

        $this->Card_model->card_typupdate();

        $this->session->set_flashdata("msg","<p class='alert alert-success'>User Type Updated</p>");

        header('Location:'.base_url.'cardtype');
    }

//noufal
    public function cardsdelete()
    {
        $cardid = $_GET['cardeleid'];
        $this->Card_model->cardsdelid($cardid);

        $this->session->set_flashdata("msg", "<p class='alert alert-success'>Cards Deleted</p>");
        header('Location:' . base_url . 'card_list');
    }

    public function user_update()
    {
        $this->User_model->typupdate();

        $this->session->set_flashdata("msg", "<p class='alert alert-success'>User Type Updated</p>");

        header('Location:' . base_url . 'type');
    }


    public function usercard()
    {
        if(!isset($_GET['cardid']))
        {

            $card['card'] = $this->Card_model->getallcard();
            $this->load->view('admin/head');
            $this->load->view('admin/header');
            $this->load->view('admin/sidemenu');
            $this->load->view('admin/card', $card);
            $this->load->view('admin/script');
        }else{

            $cardid= $_GET['cardid'];
            $card['data']=$this->Card_model->get_single_card($cardid);
            $card['card'] = $this->Card_model->getallcard();
            $card['edit']=$cardid;
            $this->load->view('admin/head');
            $this->load->view('admin/header');
            $this->load->view('admin/sidemenu');
            $this->load->view('admin/card', $card);
            $this->load->view('admin/script');
        }

    }

    public function card_check()
    {
//        echo "<pre>";
//         print_r($_POST);
//        print_r($_FILES);exit;

        $card_type = $_POST['card_type'];
        $editid = $_POST['editid'];
        $card_name = $_POST['card_name'];
        $card_number = $_POST['card_number'];
        $card_date = $_POST['card_date'];
        $card_price = $_POST['card_price'];
        $card_key = $_POST['card_key'];
        $card_offer = $_POST['card_offer'];
        $card_username = $_POST['card_username'];
        $card_password = $_POST['card_password'];
        $addate = date('Y/m/d');


        $config['upload_path'] = './assets/card/';
        $config["allowed_types"] = 'jpg|jpeg|png|gif';
        $this->load->library('upload', $config);




        if(!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();

            $this->session->set_flashdata("msg", "<p class='alert alert-success'>$error</p>");

            $card['card'] = $this->Card_model->getallcard();

            $this->load->view('admin/head');
            $this->load->view('admin/header');
            $this->load->view('admin/sidemenu');
            $this->load->view('admin/card', $card);
            $this->load->view('admin/script');
        } else {
            //success
            $file=$this->upload->data();
            $imagename=$file['file_name'];

            $query = [
                'card_type_id' => $card_type,
                'card_name' => $card_name,
                'cartd_number' => $card_number,
                'card_date' => $card_date,
                'card_price' => $card_price,
                'card_serial_key' => $card_key,
                'card_offer' => $card_offer,
                'card_username' => $card_username,
                'card_password' => $card_password,
                'added_date' => $addate,
                'modify_date' => $addate,
                'created_user_id' => 1,
                'card_image'=>$imagename];
            if($editid=="")
            {
            $this->Card_model->cardcheck($query);
            $this->session->set_flashdata("msg", "<p class='alert alert-success'>Card Added Sucessfully</p>");
            header('Location:' . base_url . 'card_list');
           }
            else{
                $this->Card_model->cardsupdation($query,$editid);
                $this->session->set_flashdata("msg", "<p class='alert alert-success'>Card Modify Sucessfully</p>");
                header('Location:' . base_url . 'card_list');
            }
        }
    }

    public function card_list()
    {
        $card['cards'] = $this->Card_model->getallcards();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('admin/card_list', $card);
        $this->load->view('admin/script');
    }

}


?>