<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Suppliers_model');
        $this->load->library('session');
        $this->load->library('pagination');

    }
    public function view_our_cards()
    {
        $log_id=1;
        $data['allcards'] = $this->Suppliers_model->getallcards($log_id);
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('supplier/view_our_cards',$data);
        $this->load->view('admin/footer');
        $this->load->view('admin/script');
    }
    public function sub_agent_sales()
    {
        $log_id=1;
        $card['allcards'] = $this->Suppliers_model->getallcardspur($log_id);
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/sidemenu');
        $this->load->view('supplier/sub_agent_sales_cards', $card);
        $this->load->view('admin/footer');
        $this->load->view('admin/script');
    }
}