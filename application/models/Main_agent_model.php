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

    public function getalltype()
    {

        // echo "SELECT * FROM vk_usertype WHERE user_id=2";exit;
        $sql=$this->db->query("SELECT * FROM vk_usertype WHERE user_id=3");
        return $sql->result();
    }


    public function mainagentadd($query)
    {
        $this->db->insert('vk_users',$query);
        return true;
    }

    public function getalluser($session)
    {
            
            
    $sql=$this->db->query("SELECT * from vk_users INNER JOIN vk_usertype ON type_id=user_id WHERE parent_id=$session");
    return $sql->result();
    }

    public function mianagent_del($userid)

    {

            
    $session=$this->session->userdata("ID");
    $qry=$this->db->query("SELECT * FROM vk_users WHERE parent_id='$session'");
    $sq=$qry->num_rows();
    if($sq>0){

    $sql=$this->db->query("DELETE from vk_users WHERE userid='$userid'");
    return true;
    }else{

    return false;
    }
}

    public function get_mainagent_edit($useredit)
    {

    $sql=$this->db->query("SELECT u.*,(select a.fname from vk_users a where a.userid=u.parent_id)as 'parent_name' FROM vk_users u WHERE userid='$useredit'");
    return $sql->row();

            // return true;

    }

    public function mainagent_update($ueditid,$type,$fname,$lname,$phone,$email,$address,$addate)
    {
        
    $sql=$this->db->query("UPDATE vk_users SET type_id='$type',fname='$fname',lname='$lname',phone='$phone',email='$email',address='$address',modify_date='$addate' WHERE userid='$ueditid'");
    return true;

    }
}