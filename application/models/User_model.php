<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    var $db;
    function __construct() {
        parent::__construct();

        $this->db = $this->load->database('default', TRUE);//db connection
    }

    public function user_action($sql)
    {

        $this->db->insert('vk_usertype',$sql);
        return true;
    }

    public function getalltype()
    {
        $sql=$this->db->query("SELECT * FROM vk_usertype");
        return $sql->result();
    }
    public function getdelid($userid)
    {
        // echo "DELETE FROM bs_banner WHERE banner_id='$bannerid'";exit;
        $sql=$this->db->query("DELETE FROM vk_usertype WHERE user_id='$userid'");
        return true;
    }

    public function getypedit($typeid)
    {


        $sql=$this->db->query("SELECT * FROM vk_usertype WHERE user_id='$typeid'");
        return $sql->row();
    }

    public function typupdate()
    {
        $typeid=$_POST['typeid'];
        $type=$_POST['type'];
        $addate=date('Y/m/d');

        $sql=$this->db->query("UPDATE vk_usertype SET usertype='$type',date='$addate' WHERE user_id='$typeid'");
        return true;
    }

    public function usercheck($query)
    {
        $this->db->insert('vk_users',$query);
        return true;
    }

    public function getalluser()
    {
        $sql=$this->db->query("SELECT * from vk_users INNER JOIN vk_usertype ON type_id=user_id");
        return $sql->result();
    }
    public function getmainagentid()
    {

        $sql=$this->db->query("SELECT * from vk_users WHERE type_id=2");
        return $sql->result();

    }
    public function userdel($userid)

    {

        // echo "SELECT * FROM vk_users WHERE parent_id='$userid'";exit;
        $qry=$this->db->query("SELECT * FROM vk_users WHERE parent_id='$userid'");
        $sq=$qry->num_rows();
        // if($sq<0){

            $sql=$this->db->query("DELETE from vk_users WHERE userid='$userid'");
            return true;
        // }else{

        //     return false;
        // }
    }

    public function getuseredit($useredit)
    {

        $sql=$this->db->query("SELECT u.*,(select a.fname from vk_users a where a.userid=u.parent_id)as 'parent_name' FROM vk_users u WHERE userid='$useredit'");
        return $sql->row();

        // return true;

    }

    public function user_update($ueditid,$type,$parent,$fname,$lname,$phone,$email,$address,$addate,$password,$imagename)
    {

        $dq=$this->db->query("SELECT `usertype` FROM `vk_usertype` WHERE `usertype`='Sub Agent'");
        $sq=$dq->num_rows();
        if($sq>0){

        unlink("assets/images/User/".$_GET['photo']);
        $sql=$this->db->query("UPDATE vk_users SET type_id='$type',parent_id='$parent',fname='$fname',lname='$lname',phone='$phone',email='$email',password='$password',address='$address',modify_date='$addate',user_image='$imagename' WHERE userid='$ueditid'");
        return true;

        }
    }

    public function getallsupplier()
    {

     $sql=$this->db->query("SELECT * from vk_users INNER JOIN vk_usertype ON type_id=user_id WHERE type_id=1");
        return $sql->result();

    }

    public function getallmaingent()
    {

     $sql=$this->db->query("SELECT * from vk_users INNER JOIN vk_usertype ON type_id=user_id WHERE type_id=2");
        return $sql->result();

    }
    public function getallsubagent()
    {

     $sql=$this->db->query("SELECT * from vk_users INNER JOIN vk_usertype ON type_id=user_id WHERE type_id=3");
        return $sql->result();

    }
     public function getallnormaluser()
    {

     $sql=$this->db->query("SELECT * from vk_users INNER JOIN vk_usertype ON type_id=user_id WHERE type_id=4");
        return $sql->result();

    }
}
?>