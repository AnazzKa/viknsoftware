<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers_model extends CI_Model
{

    var $db;

    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', TRUE); //db connection
    }
    public function getallcards($log_id)
    {
        $sql = $this->db->get_where('vk_cards',array('created_user_id' => $log_id));
        return $sql->result();
    }
    public function getallcardspur($log_id)
    {
        $this->db->select('*');
        $this->db->from('vk_pruchase');
        $this->db->join('vk_cards', 'vk_pruchase.card_id = vk_cards.cards_id');
        $this->db->join('vk_cardtype', 'vk_cards.card_type_id = vk_cardtype.card_id');
        $this->db->where('user_id', $log_id);
        $query = $this->db->get();
        return $query->result();
    }
}