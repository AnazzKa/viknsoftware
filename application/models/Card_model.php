<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_model extends CI_Model
{

    var $db;

    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', TRUE); //db connection
    }

    public function card_action($sql)
    {

        $this->db->insert('vk_cardtype', $sql);
        return true;
    }

    public function getallcard()
    {
        $sql = $this->db->query("SELECT * FROM vk_cardtype");
        return $sql->result();
    }

    public function cardelid($cardid)
    {

        $sql = $this->db->query("DELETE FROM vk_cardtype WHERE card_id='$cardid'");
        return true;
    }



    public function getcardedit($cardid)
    {
        $sql = $this->db->query("SELECT * FROM vk_cardtype WHERE card_id='$cardid'");
        return $sql->row();
    }

    public function card_typupdate()
    {
        $type = $_POST['type'];
        $card_id=  $_POST['card_id'];
        $addate = date('Y/m/d');

        $sql = $this->db->query("UPDATE vk_cardtype SET cardtype='$type',date='$addate' where card_id=$card_id");
        return true;
    }

    public function cardcheck($query)
    {
        $this->db->insert('vk_cards', $query);
        return true;
    }

    public function cardsupdation($query,$id)
    {
        $this->db->where('cards_id',$id);
        $this->db->update('vk_cards',$query);
        return true;
    }

    public function getallcards()
    {
        $sql = $this->db->query("SELECT * FROM vk_cards c inner join vk_cardtype t on c.card_type_id=t.card_id");
        return $sql->result();
    }
    public function cardsdelid($cardid)
    {

        $sql = $this->db->query("DELETE FROM vk_cards WHERE cards_id='$cardid'");
        return true;
    }
    public function get_single_card($id)
    {
        $sql = $this->db->query("SELECT * FROM vk_cards where cards_id='$id'");
        return $sql->result();
    }
}

?>