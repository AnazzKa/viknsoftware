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
}