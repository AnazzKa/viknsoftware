<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_agent_model extends CI_Model
{

    var $db;

    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', TRUE); //db connection
    }
    public function getallcards()
    {
        $sql = $this->db->get('vk_cards');
        return $sql->result();
    }
    public function card_purchase($query)
    {
        $this->db->insert('vk_pruchase', $query);
        return true;
    }
}